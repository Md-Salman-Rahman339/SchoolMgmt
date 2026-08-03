<?php

$conn = new mysqli("localhost", "root", "", "SchoolMgmt");

if ($conn->connect_error) {
    die("Connection Failed");
}

$conn->set_charset("utf8mb4");

?>