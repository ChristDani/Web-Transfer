var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass')(require('sass'));
var postcss = require('gulp-postcss');
var cssnano = require('cssnano');

// var server = browserSync.create();
var postCSSPluggins = [
    cssnano({
        autoprefixer: {
            add:true
        }
    })
]

gulp.task('sass', function(){
    return gulp.src('./dev/scss//**/*.scss')
            .pipe(sass())
            .pipe(postcss(postCSSPluggins))
            .pipe(gulp.dest('./public/css'))
            .pipe(browserSync.stream({match: '**/*.css'}))
})

gulp.task('default', function(){
    browserSync.init({
        server: "./public"
    })
})

gulp.watch('./dev/scss/**/*.scss', gulp.series('sass'));
gulp.watch('./public/index.html').on("change", browserSync.reload);
gulp.watch('./public/js/**.js').on("change", browserSync.reload);