<?php require_once "m_conn.php" ?>
<?php require_once "m_header.php" ?>

<div class="back_div"><a href="admin.php"> <button>back home</button></a></div>

 <?php if(!empty($errors)) :?>
<div class="error">
<?php foreach ($errors as $error) :?>
<h5><?php echo $error.'</br>'?></h5>
<?php endforeach ?>
 </div>
<?php endif ?>

<div class="music_form">
	<form method="post" action="" enctype="multipart/form-data">
		<label> Music Art work</label> </br> <input type="file" name="art_work">
	</br>
		<label> Music file </label></br><input type="file" name="art_file">
	</br>
		<label> Song title</label> </br><input type="name" name="song_title" value="<?php echo $song_title ?>" placeholder="enter song title">
	</br>	
	<label> Song Duration</label> </br><input type="name" name="song_duration" value="<?php echo $song_duration ?>"  placeholder="enter song duration">
	</br>
	<label> Genre</label> </br><input type="name" name="genre" value="<?php echo $genre ?>" placeholder="enter song genre">
 </br>


<label> Author name</label> </br><input type="name" name="song_author" value="<?php echo $author ?>" placeholder="enter author name">
 </br>
 <button class="upload_btn" type="submit" name="upload" >UPLOAD</button>

	</form>
</div>

<?php require_once "a_footer.php" ?>