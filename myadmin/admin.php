<?php require_once "a_conn.php"?>

<?php require_once "a_header.php" ?>

<div class="body">
	<!-- //////////////////////////////////// -->
	<div class="a_head">
		<div class="btn-div">
<button class=" my_btn m_btn" id="m_music"> My Music </button>
<button class=" my_btn v_btn" id="m_video"> My Video</button>
	 </div>
	</div>

<!-- ////////////////music///////////////////////////////// -->

	<div class="t_div music_div">
		<div class="up_div">
	 <a href="music.php"><button class="up_btn">
	 	<span class="up_img"><img src="../images/download.png"> </span>
	 	<span>Upload Music</span>
	 	</button></a>

	 </div>
<!-- ////////////////////////////////////////////////// -->
	 <table>
	 	<thead>
	 		<tr>
			<th>Id </th>
			<th>Art Work </th>
			<th>Title</th>
			<th>Type</th>
			<th>Likes</th>
			<th>Action</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php foreach ($my_music as $i => $music): ?>
	 			
	 			<td><?php echo $i + 1 ?></td>
	 			<td>
	 				<img src="<?php echo $music['art_work']?>">
	 			</td>
				<td><?php echo $music['title']?> </td>
				<td><?php echo $music['type']?> </td>
	 			<td><?php echo $music['likes']?> </td>	
	 			<td>
	 				<button class="up-action"> Edit</button>
	 				<form style="display: inline" method="post" action="delete.php">
	 					<input type="hidden" name="id" value="<?php echo $music['id']?>">
	 				<button class="up-action up-del">Delete</button>
	 				</form>
	 			</td>
	 		</tr>
	 		<?php endforeach ?>
	 		
	 	</tbody>
	 </table>
	</div>
	<!-- ////////////////music///////////////////////////////// -->

	<div class="t_div video_div">
		<div class="up_div">
	 <a href="video.php"><button class="up_btn">
	 	<span class="up_img"><img src="../images/download.png"> </span>
	 	<span>Upload Video</span>
	 	</button></a>

	 </div>
<!-- ////////////////////////////////////////////////// -->
	 <table>
	 	<thead>
	 		<tr>
			<th>Id </th>
			<th>Thumbnail </th>
			<th>Title</th>
			<th>Type</th>
			<th>Likes</th>
			<th>Action</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php foreach ($my_music as $i => $music): ?>
	 			
	 			<td><!-- <?php echo $i + 1 ?> --></td>
	 			<td>
	 				<img src="<!-- <?php echo $music['art_work']?> -->">
	 			</td>
				<td><!-- <?php echo $music['title']?> --> </td>
				<td><!-- <?php echo $music['type']?> --> </td>
	 			<td><!-- <?php echo $music['likes']?> --> </td>	
	 			<td>
	 				<button class="up-action"> Edit</button>
	 				<form style="display: inline" method="post" action="delete.php">
	 					<input type="hidden" name="id" value="<!-- <?php echo $music['id']?> -->">
	 				<button class="up-action up-del">Delete</button>
	 				</form>
	 			</td>
	 		</tr>
	 		<?php endforeach ?>
	 		
	 	</tbody>
	 </table>
	</div>
<!-- //////////////////////////////////////// -->
</div>
 




<?php require_once "a_footer.php" ?>