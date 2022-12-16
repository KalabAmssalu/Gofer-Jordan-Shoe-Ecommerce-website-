<?php
define('Db_SERVER', 'localhost');
define('Db_USER', 'root');
define('Db_PASSWORD', '');
define('Db_NAME', 'gofer');

$con = mysqli_connect(Db_SERVER, Db_USER, Db_PASSWORD, Db_NAME);
if (!$con) {
    die("Connection Faild!!! " . mysqli_connect_error());
} else {
    //echo "connection successfully";
}
