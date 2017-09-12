'use strict';
var gulp = require('gulp'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	sass = require('gulp-sass'),
	minify = require('gulp-minify-css'),
	sourcemaps = require('gulp-sourcemaps'),
	watch = require('gulp-watch');

var jsFileList = [
	// 'node_modules/bootstrap-sass/assets/javascripts/bootstrap/transition.js',
	// 'node_modules/bootstrap-sass/assets/javascripts/bootstrap/alert.js',
	'node_modules/bootstrap-sass/assets/javascripts/bootstrap/button.js',
	'node_modules/bootstrap-sass/assets/javascripts/bootstrap/carousel.js',
	// 'node_modules/bootstrap-sass/assets/javascripts/bootstrap/collapse.js',
	// 'node_modules/bootstrap-sass/assets/javascripts/bootstrap/dropdown.js',
	'node_modules/bootstrap-sass/assets/javascripts/bootstrap/modal.js',
	// 'node_modules/bootstrap-sass/assets/javascripts/bootstrap/tooltip.js',
	// 'node_modules/bootstrap-sass/assets/javascripts/bootstrap/popover.js',
	// 'node_modules/bootstrap-sass/assets/javascripts/bootstrap/scrollspy.js',
	// 'node_modules/bootstrap-sass/assets/javascripts/bootstrap/tab.js',
	// 'node_modules/bootstrap-sass/assets/javascripts/bootstrap/affix.js',
	'assets/js/theme-script.js'
];

gulp.task('sass', function() {
	gulp.src('./assets/scss/*.scss')
	.pipe(sourcemaps.init())
	.pipe(sass().on('error', sass.logError))
	.pipe(minify())
	.pipe(sourcemaps.write())
	.pipe(gulp.dest('./build/css'));
});

gulp.task('js', function(){
	return gulp.src(jsFileList)
	.pipe(concat({ path:'scripts.js' }))
	.pipe(uglify())
	.pipe(gulp.dest('./build/js'));
});

gulp.task('default', ['sass', 'js'], function(){
	gulp.watch( './assets/scss/**/*.scss', ['sass'] );
	gulp.watch( jsFileList, ['js'] );
});

gulp.task('fonts', function(){
	gulp.src('node_modules/font-awesome/fonts/**/*')
		.pipe(gulp.dest('./build/fonts'));
});

gulp.task('build', ['fonts','sass','js']);