<section id="about">

<?php
$query = "SELECT * FROM about_me LIMIT 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>


<div class="about-card">
	<div class="about-card-grid">
		<div class="about-card-image">
			<img src="assets/images/about-profile.jpg" alt="Profile photo" class="about-image">
		</div>
		<div class="about-card-content">
			<p class="about-kicker">Discover</p>
			<h2>About Me</h2>
			<p class="about-description"><?php echo htmlspecialchars($row['description'] ?? 'Write a short introduction about yourself in the admin panel.'); ?></p>
			<div class="about-info-grid">
				<p><strong>Name:</strong> <?php echo htmlspecialchars($row['full_name'] ?? '-'); ?></p>
				<p><strong>Age:</strong> <?php echo htmlspecialchars($row['age'] ?? '-'); ?></p>
				<p><strong>Birthdate:</strong> <?php echo htmlspecialchars($row['birthdate'] ?? '-'); ?></p>
				<p><strong>Gender:</strong> <?php echo htmlspecialchars($row['gender'] ?? '-'); ?></p>
				<p><strong>Marital Status:</strong> <?php echo htmlspecialchars($row['marital_status'] ?? '-'); ?></p>
				<p><strong>Religion:</strong> <?php echo htmlspecialchars($row['religion'] ?? '-'); ?></p>
				<p><strong>Language:</strong> <?php echo htmlspecialchars($row['language'] ?? '-'); ?></p>
			</div>
			<a href="assets/cv/my-cv.pdf" class="download-cv-btn" download>DOWNLOAD CV</a>
		</div>
	</div>
</div>

</section>