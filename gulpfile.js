var gulp = require('gulp'),
	pxlGulp = require('./pxl-gulp/gulpfile.js');

	gulp.task('default', function() {
		pxlGulp.init(gulp);
	});