
var gulp = require('gulp'),
	uglify = require('gulp-uglify'),
	sass = require('gulp-sass'),
	plumber = require('gulp-plumber'),
	gulpConcat = require('gulp-concat'),
	sourcemaps = require('gulp-sourcemaps');


function errorLog(error){
	console.error.bind(error);
	this.emit('end');
}


/*
* Javascript tasks
* select all javascript files under js/app and any subdirectory
*
* */
gulp.task('js', function () {
    return gulp.src('js/app/**/*.js')
        .pipe(gulpConcat('js/scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./'))
});

//SASS taks
gulp.task('sass', function () {
 return gulp.src('css/**/*.scss')
  .pipe(plumber())
  .pipe(sass().on('error', sass.logError))
  .pipe(sass({outputStyle: "compressed"}))
  .pipe(gulpConcat('styles.css'))
  .pipe(sass().on('error', sass.logError))
  .pipe(sourcemaps.init())
  .pipe(gulp.dest('./styles.css'));
});

//Watch for changes
gulp.task('watch', function(){
	gulp.watch('js/app/**/*.js', ['js']);
	gulp.watch('css/**/*.scss', ['sass']);
});

gulp.task('default', ['js', 'sass']);
