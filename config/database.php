<?php

    $dsn = 'mysql:dbname=site_perso;host=localhost';
    $user = "root";
    $password = "admin";

    try {

        $db = new PDO($dsn, $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    } catch(exception $e) {
    
        echo $e;
    
    }
    
?>