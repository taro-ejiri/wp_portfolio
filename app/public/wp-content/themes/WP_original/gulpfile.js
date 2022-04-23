// gulpプラグインの読み込み
const { src, dest, watch } = require("gulp");
// Sassをコンパイルするプラグインの読み込み
const sass = require("gulp-sass")(require("sass"));

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
    // cssフォルダー以下に保存
    .pipe(dest("css"));

/**
 * Sassファイルを監視し、変更があったらSassを変換します
 */
const watchSassFiles = () => watch("sass/**/*.scss", compileSass);

// npx gulpというコマンドを実行した時、watchSassFilesが実行される
exports.default = watchSassFiles;