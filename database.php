<?php
    function set_string($db, $input) {
        $input = mysqli_real_escape_string($db, trim($input));
        return $input;
    }

    define('DB_USER', 'administrator');
    define('DB_PASSWORD', 'task7');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'dbtask7');

    $db_connect = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        OR die('Could not connect to MySQL: '. mysqli_connect_error());
    mysqli_set_charset($db, 'utf8');
?>