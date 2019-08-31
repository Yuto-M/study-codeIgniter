# study-codeIgniter
codeIgniter tutorial用repo
下記を参考に環境を作る。
https://qiita.com/wMETAw/items/aaf6a94a83e2ac5ac0c3

# 環境立ち上げ
```
cd Docker
docker-compose up -d
phpmyadminにアクセスして`tutorial`DB作成
phpのコンテナに入る
/var/www/htmlで`php index.php Migrate index`を叩く
```

## hosts
下記。ポートは`8080`でアクセスするので注意。
```
127.0.0.1 dev.study-codeigniter.com
```

## phpmyadmin
下記にアクセス
http://127.0.0.1:8888/

## phpリンター関係
phpmd
```
composer phpmd
```

phpcs
```
composer phpcs
```
