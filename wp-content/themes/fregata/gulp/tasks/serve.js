module.exports = function() {
    $.gulp.task('serve', function() {
        $.bs.init({
            proxy: 'http://46.146.232.136/fregata/',
            host: "192.168.1.239",
            port: 3000
        });
    });
}