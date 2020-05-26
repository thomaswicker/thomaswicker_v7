//gulp variables
var gulp 					= require('gulp'),
		sass 					= require('gulp-sass'),
		notify     		= require('gulp-notify'),
		minifycss 		= require('gulp-minify-css'),
		rename 				= require('gulp-rename'),
		cssnano       = require('gulp-cssnano');

//other variables
var input 				= './src/scss/application.scss',
	  output 				= './css',
		sassSources 	= 'src/scss/**/*.scss',
		currentdate = new Date(),
		datetime = currentdate.getDate() + "/"
               + (currentdate.getMonth()+1)  + "/"
               + currentdate.getFullYear() + " @ "
               + currentdate.getHours() + ":"
               + currentdate.getMinutes() + ":"
               + currentdate.getSeconds();

gulp.task('sass', function() {
	return gulp
		.src(input)
    .pipe(sass())
    .pipe(gulp.dest('./css'))
		.pipe(rename({suffix: '.min'}))
    .pipe(cssnano())
		.pipe(gulp.dest('./css'))
    .pipe(notify({ message: '\n_______________________________________________________\n %%% SASS COMPILED %%%\n_______________________________________________________' }))
});

// Watch & Rerun Gulp
gulp.task('watch', function() {
  gulp.watch(sassSources, ['sass']);
});

// Initalize
gulp.task('default', ['watch'], function() {
	gulp.start('sass');
});
