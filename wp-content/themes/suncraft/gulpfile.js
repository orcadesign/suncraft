// Load plugins
var gulp = require('gulp'),
	sass = require('gulp-sass'),
	useref = require('gulp-useref'),
	cssnano = require('gulp-cssnano'),
	imagemin = require('gulp-imagemin'),
	cache = require('gulp-cache'),
	del = require('del');

gulp.task('sass', function(){
  return gulp.src('styles.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('assets/css'))
});

gulp.task('sass', function() {
  return gulp.src('*.scss') // Gets all files ending with .scss in app/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('assets/css'))
})

gulp.task('useref', function(){
  return gulp.src('*.html')
    .pipe(useref())
    .pipe(gulpIf('*.js', uglify()))
    // Minifies only if it's a CSS file
    .pipe(gulpIf('*.css', cssnano()))
    .pipe(gulp.dest('assets/css'))
});

gulp.task('images', function(){
  return gulp.src('assets/images/**/*.+(png|jpg|jpeg|gif|svg)')
  // Caching images that ran through imagemin
  .pipe(cache(imagemin({
      interlaced: true
    })))
  .pipe(gulp.dest('assets/images/minified'))
});

gulp.task('clean:dist', function() {
  return del.sync('dist');
})

// Gulp watch syntax
gulp.watch('files-to-watch', ['tasks', 'to', 'run']); 