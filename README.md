laravelの練習用プロジェクトです。  

databaseディレクトリ配下に"database.sqlite"を追加して、sqliteで動作確認しながら実装  

ローカル環境でのアプリスタート  
```php artisan serve --port=8080```


日本語リソースファイルDL元  
https://github.com/minoryorg/laravel-resources-lang-ja/tree/master/resources/lang/ja

## PHPの画像リサイズライブラリのインストール
Ubuntuでphp7.4環境の場合
```sudo apt-get install php7.4-gd```

## リアルタイムチャットで使うPusherで必要なphp-curlのインストールコマンド（php7.4の場合）
```sudo apt-get install php7.4-curlsudo apt-get install php7.4-curl```

## リアルタイムチャットで使うPusherライブラリのインストールコマンド（教材通りだと2.1が入って動かない）
```composer require pusher/pusher-php-server ^4 --ignore-platform-reqs```
  
（WSL環境だからなのか、最終的にリアルタイムでのチャット更新は動作確認できず）
