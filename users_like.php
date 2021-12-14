<?php

$pdo = new PDO('mysql:host=localhost;port=3306; dbname=prophegos', 'root', ''  ); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$id = $_POST['id'];
$incr = 1;
$like = $pdo->prepare("INSERT INTO music_list (likes)  
	VALUES(:incr ) WHERE id = :id LIMIT 1 ");
$like->bindvalue(':id', $id);
$like->bindvalue(':incr', $incr);
$like->execute();



// $likes = $pdo->prepare('SELECT likes FROM music_list WHERE id = :id');
// $likes->bindvalue(':id', $id);
// $likes->execute();
// header('Location: my music.php');
?>