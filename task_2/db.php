<?php

$mysqli = new mysqli("localhost","root","", "product");

if ($mysqli->connect_error) {
    die("ERROR : " . mysqli_connect_error());
    exit();
}