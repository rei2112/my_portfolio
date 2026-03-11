


<section id="contact" class="contact-section-simple">
	<h2>Contact Me</h2>
	<?php
		$query = "SELECT * FROM contacts LIMIT 1";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_assoc($result);
	?>
	<div class="contact-info">
		<p><strong>Address:</strong> <?php echo $row['address']; ?></p>
		<p><strong>Contact Number:</strong> <?php echo $row['contact_number']; ?></p>
		<p><strong>Email:</strong> <?php echo $row['email']; ?></p>
	</div>
	<div class="contact-links">
		<p><strong>Facebook:</strong> <a href="<?php echo $row['facebook']; ?>" target="_blank">reailie reyes</a></p>
		<p><strong>LinkedIn:</strong> <a href="<?php echo $row['linkedin']; ?>" target="_blank">reailie reyes</a></p>
		<p><strong>Telegram:</strong> <a href="<?php echo $row['telegram']; ?>" target="_blank">rei2112</a></p>
	</div>
</section>