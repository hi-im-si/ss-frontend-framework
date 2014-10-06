// include gulp
var gulp = require('gulp');

// include plug-ins
var jshint = require('gulp-jshint');
var sass = require('gulp-ruby-sass');
var watch = require('gulp-watch');
var changed = require('gulp-changed');
var imagemin = require('gulp-imagemin');

var basePaths = {
	src: './assets/'
};

var paths = {

	scripts: {

		src: [
			basePaths.src + 'js/**/*.js',
			'!'+basePaths.src + 'js/vendor/*.js'
		],
		dest: basePaths.src + 'build/js/'

	},

	styles: {
		src: basePaths.src + 'sass/**/*.scss',
		dest: basePaths.src + 'build/css/*.css'
	},

	images: {
		src: basePaths.src + 'img/**/*',
		dest: basePaths.src + 'build/img/',
	}

};


var onError = function (err) {
	beep([0, 0, 0]);
	gutil.log(gutil.colors.green(err));
};








// JS hint task
gulp.task('jshint', function() {
	gulp.src(paths.scripts.src)
		.pipe(jshint())
		.pipe(jshint.reporter('jshint-stylish'));
});


gulp.task('sass', function () {

    return gulp.src(paths.styles.src)

        .pipe(sass({
        	sourcemap: true,
        	sourceComments: 'map'
        }))
        .on('error', function (err) {
        	console.log(err.message);
        })
        .pipe(gulp.dest(paths.styles.dest));
});


// minify new images
gulp.task('images', function() {
 
	return gulp.src(paths.images.src)
		.pipe(changed(paths.images.dest))
		.pipe(imagemin({
			optimizationLevel: 3,
			progressive: true,
			interlaced: true
		}))
		.pipe(gulp.dest(paths.images.dest))
		.pipe(notify({ message: 'Images task complete' }));
});


gulp.task('watch', ['sass'], function(){

});

gulp.task('default', ['sass']);