<?php require_once "conn.php" ?>

<?php require_once "record_header.php" ?>

<div class="record_body">
	<div class="r_form_body">
		
		<form method="post" action="record_booking.php">

		<div class="form_div">
		<input type="name" name="f_name" placeholder="Customers name">
		</div>

		<div class="form_div"><input type="email" name="email" placeholder="Email"></div>
		<div class="form_div">
		<label>Date:</label>  <input type="date" name="date" placeholder="date">
		 <label>Time:</label>  <input type="Time" name="hour" placeholder="hour">
		</div>

		<div class="form_div"><textarea maxlength="200" name="message" placeholder="Your message..."></textarea></div>
		<div class="form_div"><button type="submit">BOOK</button></div>
		</form>
	</div>
</div>

<?php require_once "footer.php" ?>

<