module.exports = function() {
    $.gulp.task('style:build', function () {
        $.gulp.src($.path.src.style) 
            .pipe($.gp.sass({
                includePaths: ['src/style/']
            }))
            .pipe($.gp.autoprefixer())
            .pipe($.gulp.dest($.path.build.css))
            .on('end', $.bs.reload)
    });
}