<?php

$pdo = new PDO('mysql:host=localhost;port=3306; dbname=prophegos', 'root', ''  ); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['id'];
$item = $pdo->prepare('DELETE FROM music_list WHERE id = :id');
$item->bindvalue(':id', $id);
$item->execute();
header('Location:admin.php');

?>