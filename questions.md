- locationディレクティブのtry_filesとは
- locationディレクティブのfastcgi系のやつ
- rootディレクティブとは
- `datastore`のVOLUME指定とは
- ~~cliからmigrationファイルを実行していく方法~~
  - ドキュメントルートで`php index.php Migrate index`でmigrateできる。
- cli叩ける理由
- `public/index.php`に移設している理由
- ~~下記のコマンドの意味~~
  - `-n`で改行文字で改行させない http://www.ksknet.net/cat24/echo.html
  - バッククォートを使用してコマンドを実行して出力 https://uxmilk.jp/27649
  - date +'%Y'のような形式でフォーマットを設定して出力できる https://www.sejuku.net/blog/50053
```
echo -n > migrations/`date '+%Y%m%d%H%M%S'`_add_news.php
```