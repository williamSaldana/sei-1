<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "sei";

$connection = mysqli_connect($host,$user,$pass,$db);

mysqli_set_charset($connection, "utf8");
?>