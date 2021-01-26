# Usage

---

## 1.git clone
Gitからリポジトリをクローン
https://github.com/wadaryohei/wadaryohei-docker-nginx-php-mysql-phpmyadmin.git


## 2.Makefile
既存のMakefileを使用する

#### Local
```$ make up```

#### Test
```$ make up e=tst```

#### Production
```$ make up e=prod```


## 3.DB Init Datas
make up時に./docker/db/mysql_init内のファイルが実行されるので初期化したい処理を入れる

```
USE sample;

CREATE TABLE IF not exists users (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(20) NOT NULL
);

INSERT INTO users VALUES (1, "suzuki");
INSERT INTO users VALUES (2, "tanaka");
INSERT INTO users VALUES (3, "yamada");
```
