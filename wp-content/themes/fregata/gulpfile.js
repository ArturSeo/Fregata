global.$ = {
    gulp: require('gulp'),
    gp: require('gulp-load-plugins')(),
    tap: require('gulp-tap'),
    replace: require('gulp-replace'),
    fs: require('fs'),
    newfile: require('gulp-file'),
    http: require('http'),
    bs: require('browser-sync').create(),
    path: {
        tasks: require('./gulp/config/tasks.js'),
        build: {
            php: './',
            css: './',
            js: './js/',
            html: './gulp/src/html/',
            converter: './gulp/src/php/'
        },
        src: {
            php: './**/*.php',
            style: './gulp/src/pages/style/style.scss',
            js: './gulp/src/js/**/*.js',
            pug: [
                './gulp/src/pages/homepage/homepage.pug'
            ],
            html: './gulp/src/html/*.html'
        },
        watch: {
            php: './**/*.php',
            style: [
                './gulp/src/pages/style/**/*.scss',
                './gulp/src/pages/**/**/**/*.scss'
            ],
            js: './gulp/src/js/**/*.js',
            pug: [
                './gulp/src/pages/**/**/**/*.pug',
                './gulp/src/pug/*.pug'
            ],
            converter: './gulp/src/html/*.html'
        }
    }
};


$.path.tasks.forEach(function(taskPath) {
    require(taskPath)();
});

$.gulp.task('build', [
    'php:build',
    'style:build',
    'js:build',
    'pug:build',
    'converter:build'
]);

$.gulp.task('default', ['build', 'serve', 'watch']);