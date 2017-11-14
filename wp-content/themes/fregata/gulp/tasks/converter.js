module.exports = function() {
    $.gulp.task('converter:build', function () {
        $.gulp.src($.path.src.html)
        .pipe($.tap(function(file) {
            var content = $.fs.readFileSync('gulp/src/html/homepage.html', 'utf8');
            var fileName = 'homepage.php';
            var contents = '<?php\n/*\n\tTemplate name: Стартовая страница\n*/\n?>\n\n' + content;
            return $.newfile(fileName, contents)
            .pipe($.gulp.dest($.path.build.php))
            .on('end', $.bs.reload)
        }));
    });
}