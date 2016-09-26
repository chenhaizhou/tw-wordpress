var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var jshint = require('gulp-jshint');
var zip = require('gulp-zip');

gulp.task('css', function () {
  return gulp.src('dev/scss/**/*.scss')
    .pipe(sass({outputStyle:'expanded'}))
    .pipe(autoprefixer({browsers: ['last 2 versions', 'Explorer 9']}))
    .pipe(gulp.dest('./'));
});

gulp.task('js', function() {
  return gulp.src('dev/js/*.js')
    .pipe(jshint('.jshintrc')) // https://github.com/jshint/jshint/blob/master/examples/.jshintrc
    .pipe(jshint.reporter('jshint-stylish'))
    .pipe(gulp.dest('assets/js'));
});

gulp.task('zip', ['css', 'js'], function() {
    return gulp.src(['./*.+(php|css|txt|png)', './assets', './images', './includes', './languages'])
        .pipe(zip('tw.zip'))
        .pipe(gulp.dest('dist'));
});

// Default task
gulp.task('default', ['css', 'js']); // , 'images'

// Watch
gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch('dev/scss/**/*.scss', ['css']);

  // Watch .js files
  gulp.watch('dev/js/*.js', ['js']);
});