var gulp = require('gulp');
var less = require('gulp-less');
var plumber = require('gulp-plumber');

gulp.task('less', function () {
	return gulp.src(['./**/*.less', '!node_modules/**/*'], { base: './'})
		.pipe(plumber())
		.pipe(less())
		.pipe(gulp.dest('./'));
});
