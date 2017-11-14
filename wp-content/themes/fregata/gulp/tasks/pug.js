module.exports = function () {
    $.gulp.task('pug:build', function () {
        return $.gulp.src($.path.src.pug)
            .pipe($.gp.pug({
                pretty: true
            }))
            .pipe($.replace('&lt;', '<'))
            .pipe($.replace('&gt;', '>'))
            .pipe($.replace('<!--', ''))
            .pipe($.replace('-->', ''))
            .pipe($.replace('//', ''))
            .pipe($.gulp.dest($.path.build.html))
            // .on('end', $.bs.reload)
    })
}