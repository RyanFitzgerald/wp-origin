var gulp = require('gulp');
var plumber = require('gulp-plumber');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('scripts', function() {
    return gulp.src('assets/js/concat/*.js')
        .pipe(plumber(plumber({
            errorHandler: function (err) {
                console.log(err);
                this.emit('end');
            }
        })))
        .pipe(concat('all.js'))
        .pipe(gulp.dest('assets/js'));
});

gulp.task('styles', function() {
    return gulp.src('assets/scss/style.scss')
        .pipe(plumber(plumber({
            errorHandler: function (err) {
                console.log(err);
                this.emit('end');
            }
        })))
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest('./'));
});

gulp.task('watch', ['scripts', 'styles'], function() {
    gulp.watch('assets/js/concat/*.js', ['scripts']);
    gulp.watch('assets/scss/styles/*.scss', ['styles']);
});
