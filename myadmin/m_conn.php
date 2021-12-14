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
// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';
// exit;
// ///////////////////////////////
$art_work = '';
$music_file ='';
$song_title = '';
$song_duration = '';
$author = '';
$genre = '';
$type = '';
$errors = [];

if($_SERVER['REQUEST_METHOD'] == 'POST'){

// $art_work = '';
$song_title = ucfirst($_POST['song_title']);
// $type = '';
$author = ucfirst($_POST['song_author']);
$likes = '';
$create_date = date('F j, Y');
// $music_file = '';
$song_duration = $_POST['song_duration'];
$genre = ucfirst($_POST['genre']);

// //////////////////////////////////////////////

// if(empty($art_work)){
// 	$errors[]= 'Music art work is required*';
// }
if(empty($song_title)){
	$errors[]= 'Song title is required*';
}
if(empty($author)){
	$errors[]= 'Author name is required*';
}
// if(empty($music_file)){
// 	$errors[]= 'Music file is required*';
// }
if(empty($song_duration)){
	$errors[]= 'Song duration is required*';
}
if(empty($genre)){
	$errors[]= 'Song genre is required*';
}

// ////////////////////creating a directory///////////////////////////////////
if(!is_dir('music_artwork')){ mkdir('music_artwork');}

// /////////
if(!is_dir('music_files')){ mkdir('music_files');}
// ////////////////////////////////////////////////////////
if(empty($errors)){

// ////////////////art_work logic///////////////////////////
$art_work = $_FILES['art_work'] ?? null;
$art_work_path = '';

if($art_work && $art_work['tmp_name']){

	$art_work_path = 'music_artwork/'.random_num(5).'/'.$art_work['name'];
	mkdir(dirname($art_work_path));
	move_uploaded_file($art_work['tmp_name'], $art_work_path);
}

// ////////////////music_file logic///////////////////////////////////////
$music_file = $_FILES['art_file'] ?? null;
$music_file_path = '';
$type = $music_file['type'];

if($music_file && $music_file['tmp_name']){

	$music_file_path = 'music_files/'.random_num(5). '/'. $music_file['name'];
	mkdir(dirname($music_file_path));
	move_uploaded_file($music_file['tmp_name'], $music_file_path);
}

// ////////////////////////////////////////////////
 $statement=$pdo->prepare("INSERT INTO music_list (art_work, title, type, aurthor, likes, create_date, file, duration, genre)
VALUES(:art_work, :song_title, :type, :author, :likes, :create_date, :music_file, :song_duration, :genre)");

$statement->bindvalue(':art_work', $art_work_path);
$statement->bindvalue(':song_title', $song_title);
$statement->bindvalue(':type', $type);
$statement->bindvalue(':author', $author);
$statement->bindvalue(':likes', $likes);
$statement->bindvalue(':create_date', $create_date);
$statement->bindvalue(':music_file', $music_file_path);
$statement->bindvalue(':song_duration', $song_duration);
$statement->bindvalue(':genre', $genre);
$statement->execute();
header('Location: admin.php' );
}
}

function random_num($n){
	$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$str = '';

	for ($i=0; $i < $n ; $i++) { 
		$index = rand(0, strlen($chars) -1);
		$str .= $chars[$index] ;
	}
	return $str;
}
?>