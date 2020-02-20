const { src, dest, watch } = require('gulp');
const browserSync = require('browser-sync').create();


function browser() {
    browserSync.init({
        proxy: 'http://fictional-university-2020.test',
        files: [
            './**/*.php',
            './**/*.css',
            './js/*.js'
        ]
    });

   // watch('./sass/**/*.scss', css);
    //watch('./js/*.js', js).on('change', browserSync.reload);
}

exports.default = browser;