# zero-kara-SQL+PHP
SQL 第2版 ゼロからはじめるデータベース操作のハンズオン

 psql postgresで起動
¥qで終了（quitやめるの略）


php環境立ち上げ手順
docker compose up -d

MariaDBの確認（XAMPP Shellの代わり）

書籍では「XAMPP Control Panel の Shell」からコマンドを打つけど、
Dockerでは次のように代用できる：
```
docker exec -it xampp_like_db mysql -u root -p
```

パスワードを聞かれたら rootpass を入力してOK。
次のように表示されたら接続成功：

Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 8
...
MariaDB [(none)]>

文字化け防止
```
SET character_set_client = cp932;
SET character_set_connection = cp932;
SET character_set_results = cp932;
```

これで本と同じ「MariaDB動作確認」が完了🌙

☁︎テストファイルの確認方法は
例えば（htdocs/test/make_associative.php）のファイルを確認したい時は
http://localhost:8080/test/make_associative.php
にアクセス！！🪼