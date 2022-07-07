<?php

$hostname = "localhost";

$user = "root";

$password = "";

$database = "epiz_19621311_database";

$db = mysqli_connect($hostname,$user,$password) or die("Connection Failed........!!!");

mysqli_select_db($db,$database) or die("Database not selected....!!!");

?>