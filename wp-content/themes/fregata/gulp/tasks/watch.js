module.exports = function() {
    $.gulp.task('watch', function() {
        $.gulp.watch([$.path.watch.php], function(event, cb) {
            $.gulp.start('php:build');
        });
        $.gulp.watch([$.path.watch.style], function(event, cb) {
            $.gulp.start('style:build');
        });
        $.gulp.watch([$.path.watch.js], function(event, cb) {
            $.gulp.start('js:build');
        });
        $.gulp.watch([$.path.watch.pug], function(event, cb) {
            $.gulp.start('pug:build');
        });
        $.gulp.watch([$.path.watch.converter], function(event, cb) {
            $.gulp.start('converter:build');
        });
    });
};