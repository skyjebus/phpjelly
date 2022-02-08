// gulpfile.js
const { src, dest } = require("gulp");
const sharpResponsive = require("gulp-sharp-responsive");
var rename = require('gulp-rename');

const img = () => src("images/*.{jpg,jpeg,png}")
  .pipe(sharpResponsive({
    formats: [
	  // png
	  { width: 320, format: "png", rename: { suffix: "-xs" } },
	  { width: 375, format: "png", rename: { suffix: "-sm" } },
	  { width: 768, format: "png", rename: { suffix: "-md" } },
	  { width: 1024, format: "png", rename: { suffix: "-lg" } },
	  { width: 1500, format: "png", rename: { suffix: "-xl" } },
	  { width: 4000, format: "png", rename: { suffix: "-2xl" } },
      // jpeg
	  { width: 320, format: "jpeg", rename: { suffix: "-xs" } },
	  { width: 375, format: "jpeg", rename: { suffix: "-sm" } },
	  { width: 768, format: "jpeg", rename: { suffix: "-md" } },
	  { width: 1024, format: "jpeg", rename: { suffix: "-lg" } },
	  { width: 1500, format: "jpeg", rename: { suffix: "-xl" } },
	  { width: 4000, format: "jpeg", rename: { suffix: "-2xl" } },
      // webp
	  { width: 320, format: "webp", rename: { suffix: "-xs" } },
	  { width: 375, format: "webp", rename: { suffix: "-sm" } },
	  { width: 768, format: "webp", rename: { suffix: "-md" } },
	  { width: 1024, format: "webp", rename: { suffix: "-lg" } },
	  { width: 1500, format: "webp", rename: { suffix: "-xl" } },
	  { width: 4000, format: "webp", rename: { suffix: "-2xl" } },
    ]
  }))
  .pipe(rename({ extname: '.jpg' }))
  .pipe(dest("public/images/"));

module.exports = {
  img,
};    