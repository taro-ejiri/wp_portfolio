/*
src 参照元を指定
dest 出力先を指定
watch ファイル監視
series(直列処理) と parallel(並列処理)
*/

// gulpプラグインの読み込み
const { src, dest, watch } = require("gulp");
// Sassをコンパイルするプラグインの読み込み
const sass = require("gulp-sass")(require("sass"));
// ベンダープレフィックス自動付与
const autoprefixer = require('gulp-autoprefixer');
// css-mqpackerを使うために必要
const postcss = require("gulp-postcss");
// メディアクエリをまとめる
const mqpacker = require('css-mqpacker');
// メディアクエリをソート
const sortCSSmq = require("sort-css-media-queries");
// プロパティ順をソート
const cssdeclsort = require("css-declaration-sorter"); 

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
const compileSass = () => {
    return src("sass/**/*.scss") //コンパイル元 style.scssファイルを取得
        .pipe(sass({outputStyle: "expanded"})) //Sassのコンパイルを実行 コンパイル後のCSSを展開
        // 指定できるキー expanded(css見やすく) compressed(全CSSコードが1行になる)      
        .pipe(autoprefixer(TARGET_BROWSERS)) //ベンダープレフィックス

        // sassの後に指定
        .pipe(postcss([cssdeclsort({order: "concentric-css"})])) // concentric-cssでソートする（ボックスモデルの外側からソートする）
        .pipe(postcss([mqpacker({sort: sortCSSmq.desktopFirst})]))

        .pipe(postcss([mqpacker()])) //メディアクエリをまとめる
        .pipe(dest("css")); //cssフォルダー以下に保存 コンパイル先     
    }
    
/**
 * Sassファイルを監視し、変更があったらSassを変換しaます
 */
const watchSassFiles = () => watch("sass/**/*.scss", compileSass);

// npx gulpというコマンドを実行した時、watchSassFilesが実行される
exports.default = watchSassFiles;