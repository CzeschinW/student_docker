<?php
$con = mysqli_connect("172.21.0.2", "dbuser", "dbpass", "db");

//Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to mysql: " . mysqli_connect_error();
    exit();
}