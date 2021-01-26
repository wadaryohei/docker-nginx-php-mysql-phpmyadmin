USE sample;

CREATE TABLE IF not exists users (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(20) NOT NULL
);

INSERT INTO users VALUES (1, "suzuki");
INSERT INTO users VALUES (2, "tanaka");
INSERT INTO users VALUES (3, "yamada");
