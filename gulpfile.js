var gulp        = require('gulp');
var connect     = require('gulp-connect-php');
var browserSync = require('browser-sync');
var sass        = require('gulp-sass');
var prefix      = require('gulp-autoprefixer');



/**
 * Reload the page after SASS
 */
gulp.task('browser-sync', ['sass'], function() {
    connect.server({
        port: 80,
        open: false
    }, function (){
        browserSync({
            proxy: "http://francesco.local/"
        });
    });
    // browserSync.init({
    //     server: {
    //         // baseDir: './'
    //         proxy: "http://francesco.local/"
    //     }
    // });
});

/**
 * Compile files from _scss into both _site/css (for live injecting) and site (for future jekyll builds)
 */
gulp.task('sass', function () {
    return gulp.src('css/main.scss')
        .pipe(sass({
            includePaths: ['css'],
            onError: browserSync.notify
        }))
        .pipe(prefix(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
        .pipe(gulp.dest('css'))
        .pipe(browserSync.reload({stream:true}))
});


// MY GULP STUFF

gulp.task('watch', function() {
    gulp.watch('css/**', ['sass']);
    // gulp.watch('js/**', ['browser-sync']);
    gulp.watch(['*.php']).on('change', function () {
        browserSync.reload();
    });


});

/**
 * Default task, running just `gulp` will compile the sass,
 * compile the jekyll site, launch BrowserSync & watch files.
 */
gulp.task('default', ['browser-sync', 'watch']);