# portfolio

ET ウェブデザイン（ポートフォリオ）

## Authors

Taro Ejiri

## Dependency

### 【 CMS 】

WordPress

### 【 言語、フレームワーク等 】

- SASS(SCSS)
  ※Gulp でコンパイル
- jQuery

### 【 フォント 】
Google Fonts（Sawarabi Gothic）

### 【 ビルドツール 】

- gulp（コンパイルは VSCode で行う様変更したのでスプライト画像作成や画像圧縮の際に使用）
- Webpack（JS ビルド）※予定

#### gulpプラグイン
- gulp-sass（sass）
- gulp-autoprefixer（Vendor Prefix）
- gulp-postcss（css-mqpackerに必要）
- css-mqpacker（Media Queries）
- sort-css-media-queries（Media Queriesをソート）
- css-declaration-sorter（プロパティをソート）

## 環境設定
### 【 エディタ 】
Visual Studio Code
### 【 ローカル環境 】
Local by Flywheel

wp-config.php と themes ファイルのみ編集対象  
node_modules は更新対象外

### 上記以外を編集した場合

WP 固定ページなどダッシュボード内を編集した場合

1. Local 環境で「All-in-One WP Migration」からエクスポート
2. 本番環境の「All-in-One WP Migration」へインポート
