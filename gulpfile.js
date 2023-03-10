const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass')(require('sass'));


function styles(){
return src('src/scss/style.scss')
.pipe(sass({outputStyle: 'expanded'}))
.pipe(dest('src/styling/css'))
}

function watching() {
    watch(['src/scss/**/*.scss'], styles);
} 

exports.styles = styles;
exports.watching = watching;