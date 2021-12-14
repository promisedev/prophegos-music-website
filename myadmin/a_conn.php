<?php
 
// define('HOST', "localhost");
// define('PORT', "3306");
// define('DB_NAME', "prophegos");


 
//  private $host = HOST;
//  private $port = PORT;
//  private $db_name = DB_NAME;

$pdo = new PDO('mysql:host=localhost;port=3306; dbname=prophegos', 'root', ''  ); 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// ////////////////////////////////////////////////////////////////
$statement = $pdo->prepare('SELECT * FROM music_list ORDER BY title');

$statement->execute();
$my_music = $statement->fetchAll(PDO::FETCH_ASSOC);
?>