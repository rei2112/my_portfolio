




<section id="skills">
	<div class="skills-modern-grid">
		<div class="skills-modern-left">
			<h2>My Skills</h2>
			<p class="skills-modern-desc">
				Aspiring IT professional with experience in web development and AI-based mobile projects. I am passionate about using my academic background to contribute to a team and build helpful digital tools
			</p>
		</div>
		<div class="skills-modern-right">
			<?php
			$query = "SELECT * FROM skills";
			$result = mysqli_query($conn,$query);
			$colors = ['#e74c3c','#3498db','#f1c40f','#2ecc71','#9b59b6','#e67e22','#1abc9c'];
			$icons = ['\1F4BB','\1F4C8','\1F4A1','\1F4C1','\1F4DA','\1F4D6','\1F4C6'];
			$i = 0;
			while($row = mysqli_fetch_assoc($result)){
				$color = $colors[$i % count($colors)];
				$icon = $icons[$i % count($icons)];
				?>
				<div class="skill-modern-card">
					<div class="skill-modern-icon" style="background:<?php echo $color; ?>;">
						<?php echo json_decode('"'.$icon.'"'); ?>
					</div>
					<div class="skill-modern-info">
						<div class="skill-modern-title">
							<?php echo htmlspecialchars($row['skills']); ?>
						</div>
						<div class="skill-modern-desc">
							<?php if(!empty($row['technologies'])){ echo htmlspecialchars($row['technologies']); } else { echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.'; } ?>
						</div>
					</div>
				</div>
				<?php $i++; } ?>
		</div>
	</div>
</section>