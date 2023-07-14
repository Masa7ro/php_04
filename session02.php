<?php
session_start();

$name = $_SESSION['name'];
$age = $_SESSION['age'];

$id = session_id();
echo $name . $age;