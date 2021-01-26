<?php

require_once('./Controller/DatabaseController.php');

$db = new DatabaseController("mysql:dbname=sample;host=db", "root", "pass");

try {
    $db->doCreate("users", 2, "わだ");

    echo('<pre>');
    var_dump($db->fetchData("users"));
    echo('</pre>');

    echo "接続成功\n";
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}

echo 'Hello';

?>
