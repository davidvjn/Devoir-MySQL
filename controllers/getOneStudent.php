<?php

$pdo = new PDO('mysql:host=localhost; dbname=Team_DWM11', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$dwm = $pdo->prepare('SELECT * FROM students WHERE id=:id');
$dwm->bindParam(':id', $_POST['id']);
$dwm->execute();
$student = $dwm->fetch(PDO::FETCH_ASSOC);