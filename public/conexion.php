<?php

$db_host = "localhost";

$db_port = "3306";

$db_user = "root";

$db_pass = "";

$db_schema = "vie_saine";

$db_type = "mysql";

$db_info = "$db_type:host=$db_host;dbname=$db-schema";

try {
    $db = new PDO($db_info, $db_user, $db_pass);
} catch (PDOException $e) {
    print "Hop hop hop... Ereur !:" . $e->getMessage() ."<br>";
    echo __FILE__. "à la ligne : " .__LINE__;
    die();
}
?>