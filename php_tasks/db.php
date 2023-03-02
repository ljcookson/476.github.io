<?php
    $db_host = "sql9.freemysqlhosting.net";
    $db_user = "sql9600607";
    $db_pwd = "mUJCgzLCWf";
    $db_db = "sql9600607";
    $chars = "utf8mb4";

    $attr = "mysql:host=$db_host;dbname=$db_db; charset=$chars";

    $options = [
        PDO::ATTR_ERRMODE                   => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE        => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES          =>false
    ];
?>