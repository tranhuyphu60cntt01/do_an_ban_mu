<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "qlbm";
$conn = new mysqli($hostname, $username, $password, $dbname);
if (mysqli_connect_errno()){
    echo 'Lỗi kết nối data base' .mysqli_connect_errno();exit;
}

?>