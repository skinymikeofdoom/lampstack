<?php
    $db = new mysqli('mysql','app','app','project-mysql-db','3306');

    $result = $db->query('SHOW TABLES') OR die($db->error);

    while($row = $result->fetch_assoc()){
        var_dump($row);
    }
    die('test');