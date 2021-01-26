<?php

require_once('./Model/DatabaseModel.php');

class DatabaseController {

    private $db;

    function __construct($dsn, $user, $password) {
        $this->db = new DatabaseModel($dsn, $user, $password);
    }

    function doCreate($tablename, $id, $name) {
        $this->db->create($tablename, $id, $name);
    }

    function fetchData($tablename) {
        return $this->db->read("SELECT * FROM {$tablename}");
    }
};

?>
