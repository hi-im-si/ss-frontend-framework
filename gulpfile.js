var gulp = require('gulp'),
    gutil = require('gulp-util'),
    cache = require('gulp-cache'),
    argv = require('minimist')(process.argv.slice(2)),
    sass = require('gulp-ruby-sass'),
    refresh = require('gulp-livereload'),
    prefix = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    imagemin = require('gulp-imagemin'),
    uglify = require('gulp-uglify'),
    clean = require('gulp-rimraf'),
    useref = require('gulp-useref'),
    filter = require('gulp-filter'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    defineModule = require('gulp-define-module'),
    declare = require('gulp-declare'),
    express = require('express'),
    tinylr = require('tiny-lr'),
    path = require('path'),
    opn = require('opn'),
    filesize = require('gulp-filesize'),
    plumber = require('gulp-plumber'),
    gulpif = require('gulp-if');
    sprite = require('css-sprite').stream,
    info = require('./package.json');

// npm install --save-dev

// configuration
var onError = function(err) {
  gutil.beep();
  console.log(err);
};

var config = {

    port: 9000,
    livereload_port: 35729,

    images: {
        compression: 3,
        progressive: true,
        interlaced: true
    },

    paths: {

        build: {
            root: './',
            js: './js/',
            scss: './sass/',
            css: './css/',
            images: './img/',
            lib: './js/lib/'
        },

        dist: {
            root: './dist',
            js: './dist/js/',
            css: './dist/css/',
            lib: './dist/js/lib/',
            sprite: './dist/img/sprite/'
        },

        base: {
            root: '../fuel/app/views'
        }

    },

    files: {
        scss: 'main.scss',
        css: 'main.css',
        script: 'main.js',
        sprite: 'sprite.png'
    }



}

/*-------------------------------------------------------------
------------------------- TASKS -------------------------------
-------------------------------------------------------------*/



/*-------- STYLES --------*/

gulp.task('styles', function() {

    gulp.start('cleanstyles');

    return gulp.src(config.paths.build.scss + config.files.scss)
        .pipe(plumber(onError))
        .pipe(sass({
            style: 'expanded',
        }))
        .pipe(gulp.dest(config.paths.dist.css))
        .pipe(filesize())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(minifycss())
        .pipe(gulp.dest(config.paths.dist.css))
        .pipe(filesize());

});



/*-------- SCRIPTS --------*/

gulp.task('scripts', function() {

    gulp.start('cleanscripts');

    return gulp.src(config.paths.build.js + '/**/*.js')
        .pipe(jshint('.jshintrc'))
        .pipe(jshint.reporter('jshint-stylish'))
        .pipe(concat(config.files.script))
        .pipe(filesize())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(uglify())
        .pipe(gulp.dest(config.paths.dist.js))
        .pipe(filesize());

});



/*-------- IMAGES --------*/

gulp.task('images', function() {

    return gulp.src([
        config.paths.build.images + '/**/*.png',
        config.paths.build.images + '/**/*.JPG',
        config.paths.build.images + '/**/*.jpg',
        config.paths.build.images + '/**/*.jpeg',
        config.paths.build.images + '/**/*.gif'
    ])

    .pipe(cache(imagemin({
        optimizationLevel: config.images.compression,
        progressive: config.images.progressive,
        interlaced: config.images.interlaced
    })))
    .pipe(gulp.dest(config.paths.build.images));

});



/*-------- SPRITES --------*/

// generate sprite.png and _sprite.scss
gulp.task('sprites', function () {

    return gulp.src(config.paths.build.images + '/sprites/*.png')
        .pipe(sprite({
            name: config.files.sprite,
            style: '_sprite.scss',
            cssPath: config.paths.build.images,
            processor: 'scss',
            retina: true
        }))
        .pipe(gulpif('*.png', gulp.dest(config.paths.build.images), gulp.dest(config.paths.build.scss + '/base')))

});

// generate scss with base64 encoded images
gulp.task('base64', function () {

    return gulp.src(config.paths.build.images + '/sprites/*.png')
        .pipe(sprite({
            base64: true,
            style: '_base64.scss',
            processor: 'scss'
        }))
        .pipe(gulp.dest(config.paths.build.scss));
});







/*gulp.task('server', function() {
  var server = express()
    .use(express.static(path.resolve(config.paths.base.root)))
    .listen(config.port);
  gutil.log('Server listening on port %s', config.port);
});*/

gulp.task('livereload', function() {
  lr = tinylr();
  lr.listen(config.livereload_port, function(err) {
    if (err) gutil.log('Livereload error:', err);
})
});


gulp.task('watch', function() {
  gulp.watch(config.paths.build.scss + '/**/*.scss', ['styles']).on('change', function(event) {
    console.log('File ' + event.path + ' was ' + event.type + ', running style tasks...');
});
  gulp.watch(config.paths.build.js + '/**/*.js', ['scripts']).on('change', function(event) {
    console.log('File ' + event.path + ' was ' + event.type + ', running script tasks...');
});
  gulp.watch([
    config.paths.build.images + '/**/*.png',
    config.paths.build.images + '/**/*.jpg',
    config.paths.build.images + '/**/*.jpeg',
    config.paths.build.images + '/**/*.gif',
    config.paths.dist.css + '/**/*.css',
    config.paths.dist.js + '/**/*.js',
    config.paths.base.root + '/**/*.php',
    ], function(evt) {
        refresh(lr).changed(evt.path);
        console.log('File ' + evt.path + ' was ' + evt.type + ', Livereload');
    });

});

gulp.task('clean', function() {
  return gulp.src([config.paths.dist.root + '/'], {
    read: false
})
  .pipe(clean());
});

gulp.task('cleanstyles', function() {
  return gulp.src([config.paths.dist.root + '/**/*.css'], {
    read: false
})
  .pipe(clean());
});

gulp.task('cleanscripts', function() {
  return gulp.src([config.paths.dist.root + '/**/*.js'], {
    read: false
})
  .pipe(clean());
});

gulp.task('build', ['clean', 'styles', 'images', 'scripts']);
gulp.task('default', ['livereload', 'styles', 'scripts', 'watch'], function() {
  if (argv.o) opn('http://localhost:' + config.port);
});