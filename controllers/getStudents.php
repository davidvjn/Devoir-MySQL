<?php

$pdo = new PDO('mysql:host=localhost; dbname=Team_DWM11', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$dwm = $pdo->prepare('SELECT * FROM students');
$dwm->execute();
$students = $dwm->fetchAll(PDO::FETCH_ASSOC);