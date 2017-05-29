var gulp        = require('gulp');
var connect     = require('gulp-connect-php');
var browserSync = require('browser-sync');
var sass        = require('gulp-sass');
var prefix      = require('gulp-autoprefixer');

var clean = require('gulp-clean-css');
var gcmq = require('gulp-group-css-media-queries');

var mode = "css";

/**
 * Reload the page after SASS
 */
gulp.task('browser-sync', ['sass'], function() {
    if (mode == "php") {
        connect.server({
            port: 80,
            open: false
        }, function (){
            browserSync({
                proxy: "http://francesco.local/"
            });
        });
    } else if (mode == "css") {
        browserSync.init({
            server: {
                baseDir: './'
                // proxy: "http://francesco.local/"
            }
        });
    }
});

/**
 * Compile .css file from main.scss
 */
gulp.task('sass', function () {
    return gulp.src(['css/main.scss', 'css/5-jquery-ui/jquery-ui.scss'])
        .pipe(sass({
            includePaths: ['css'],
            onError: browserSync.notify
        }))
        .pipe(prefix(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
        // .pipe(prefix(['> 0.01%'], { cascade: false }))
        .pipe(gulp.dest('css'))
        .pipe(browserSync.reload({stream:true}))
});


/**
 * Watch task
 */

gulp.task('watch', function() {
    gulp.watch('css/**', ['sass']);
    // gulp.watch('js/**', ['browser-sync']);
    gulp.watch(['js/**']).on('change', function () {
        browserSync.reload();
    });
    gulp.watch(['index.html' ,'pages/**']).on('change', function () {
        browserSync.reload();
    });

    if (mode == "php") {
        gulp.watch(['*.php']).on('change', function () {
            browserSync.reload();
        });
    }
});

/**
 * Redefine default gulp task
 */
gulp.task('default', ['browser-sync', 'watch']);


/**
 * Clean css task
 */
gulp.task('clean', function () {
    gulp.src('css/main.css')
        .pipe(clean({
            level: 2,
            compatibility: 'ie8'
        }))
        .pipe(gcmq())
        .pipe(gulp.dest('css/min'));
});