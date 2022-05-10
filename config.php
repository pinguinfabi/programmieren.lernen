<?php

define('USER', 'sql11491336');
define('PASSWORD', 'SjUWBgaPfi');
define('HOST', 'sql11.freesqldatabase.com');
define('DATABASE', 'sql11491336');


try {

    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error " . $e->getMessage());
}
?>