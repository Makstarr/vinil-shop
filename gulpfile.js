let gulp = require('gulp'),
      sass = require('gulp-sass'),
      browserSync = require('browser-sync'),
      concat = require('gulp-concat'),
      uglify  = require('gulp-uglify'),
      rename  = require('gulp-rename');

gulp.task('scss', function(){ 
    return gulp.src('app/scss/**/*.scss')
    .pipe(sass({outputStyle: 'compressed '}))
    .pipe(rename({
        suffix: '.min'
    }))
    .pipe(gulp.dest('App/css'))
    .pipe(browserSync.reload({stream: true}))  
});

gulp.task('html', function(){
    return gulp.src('app/*.html')
});
gulp.task('mainJs', function(){
    return gulp.src('app/*.js')
});
gulp.task('js', function(){
    return gulp.src([
        'node_modules/slick-carousel/slick/slick.js'
    ])
    .pipe(concat('libs.min.js'))  
    .pipe(uglify())
    .pipe(gulp.dest('app/js'))
    .pipe(browserSync.reload({stream: true}))  
});

gulp.task('watch', function(){
    gulp.watch('app/scss/**/*.scss', gulp.parallel('scss'));
    gulp.watch('App/*.html', gulp.parallel('html'));
    gulp.watch('app/js/*.js', gulp.parallel('mainJs'));
});

gulp.task('browser-sync', function(){
    browserSync.init({
        server:{
            baseDir: 'App/'
        }
    })
});

gulp.task('default', gulp.parallel('js','scss','browser-sync', 'watch'));