<?php

class DatabaseModel {
    private $dsn;
    private $user;
    private $password;
    private $dbh;

    /**
     * 初期化処理
     */
    function __construct($dsn, $user, $password) {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->password = $password;
        $this->dbh = new PDO($this->dsn, $this->user, $this->password);
    }

    /**
     * DBをFetchする
     */
    public function read ($sql) {
        $prepare = $this->dbh->prepare($sql);
        $prepare->execute();
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    /**
     * DBをFetchする
     */
    public function create ($tablename, $id, $name) {
        $sql = "INSERT INTO {$tablename} (id, name) VALUE (:id, :name)";
        $prepare = $this->dbh->prepare($sql);

        $prepare->bindValue(':id', $id, PDO::PARAM_INT);
        $prepare->bindValue(':name', $name, PDO::PARAM_STR);

        $prepare->execute();
    }
};

?>
