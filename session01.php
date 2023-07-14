<?php

session_start();

$name = 'ささき';
$age = '12';
//echo $name . $age;

$_SESSION['name'] = $name;
$_SESSION['age'] = $age;

$id = session_id();
echo $id