// gulpプラグインの読み込み
const { src, dest, watch } = require("gulp");
// Sassをコンパイルするプラグインの読み込み
const sass = require("gulp-sass")(require("sass"));
// Autoprefixと一緒に使うもの
// const postcss = require("gulp-postcss"); 
// ベンダープレフィックス自動付与
const autoprefixer = require('gulp-autoprefixer');

//ベンダープレフィックスを付与する条件
const TARGET_BROWSERS = [
    'last 2 versions', // 各ブラウザの2世代前までのバージョンを担保
    "ie >= 11", // ie11以上を担保
    "Android >= 4", // Android4以上
    "ios_saf >= 8" // ios safari8以上
  ];

/**
 * Sassをコンパイルするタスク
 */
const compileSass = () =>
  // style.scssファイルを取得
  src("sass/**/*.scss")
    // Sassのコンパイルを実行
    .pipe(
      // コンパイル後のCSSを展開
      sass({
        // 指定できるキー expanded(css見やすく) compressed(全CSSコードが1行になる)
        outputStyle: "expanded"
      })
    )
    .pipe(autoprefixer(TARGET_BROWSERS))
    // cssフォルダー以下に保存
    .pipe(dest("css"));

/**
 * Sassファイルを監視し、変更があったらSassを変換します
 */
const watchSassFiles = () => watch("sass/**/*.scss", compileSass);

// npx gulpというコマンドを実行した時、watchSassFilesが実行される
exports.default = watchSassFiles;