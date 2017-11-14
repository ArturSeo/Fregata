module.exports = function() {
    $.gulp.task('js:build', function () {
        $.gulp.src($.path.src.js) 
            .pipe($.gulp.dest($.path.build.js))
            .on('end', $.bs.reload)
    });
}