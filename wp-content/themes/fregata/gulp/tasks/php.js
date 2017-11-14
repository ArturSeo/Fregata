module.exports = function() {
    $.gulp.task('php:build', function() {
        return $.gulp.src($.path.src.php)
            .on('end', $.bs.reload)
    });
}; 