<?php

$pdo = new PDO('mysql:host=localhost; dbname=Team_DWM11', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$dwm = $pdo->prepare('INSERT INTO students (firstname, speciality, spareTime) VALUES (:firstname, :speciality, :spareTime)');
$dwm->bindParam(':firstname', $_POST['firstname']);
$dwm->bindParam(':speciality', $_POST['speciality']);
$dwm->bindParam(':spareTime', $_POST['spareTime']);
$dwm->execute();

header('Location: /members.php');