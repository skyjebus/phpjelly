// gulpfile.js
const { src, dest } = require("gulp");
const sharpResponsive = require("gulp-sharp-responsive");
var rename = require('gulp-rename');

const img = () => src("images/*.{jpg,jpeg}")
  .pipe(sharpResponsive({
    formats: [
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
 .pipe(dest("public/images/"));

module.exports = {
  img,
};    