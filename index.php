<?php include "config/db.php"; ?>

<!DOCTYPE html>
<html>
<head>

<title>My Portfolio</title>

<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


<!-- NAVBAR -->

<nav class="navbar">

<div class="logo">MyPortfolio</div>

<ul class="nav-links">

<li><a href="#about">About Me</a></li>
<li><a href="#skills">Skills</a></li>
<li><a href="#projects">Projects</a></li>
<li><a href="#footer">Contact</a></li>
<li><a href="admin/login.php" class="login-btn">Login</a></li>

</ul>

</nav>



<!-- HERO SECTION -->

<section class="hero">

<video class="hero-video" autoplay muted loop playsinline>
<source src="assets/videos/hero-bg.mp4" type="video/mp4">
</video>

<div class="hero-overlay"></div>

<div class="hero-content">

<h1>WELCOME TO MY PORTFOLIO</h1>

<p>Building digital experiences through code and creativity</p>

<a href="#projects" class="hero-btn">Show My Work</a>

</div>

</section>



<!-- ABOUT -->

<?php include "aboutme.php"; ?>


<!-- SKILLS -->

<?php include "skills.php"; ?>


<!-- PROJECTS -->

<?php include "projects.php"; ?>



<!-- CONTACT INFO IN FOOTER ONLY -->



<footer id="footer">
	<div class="footer-content">
		<div>
			<div class="footer-logo">MyPortfolio</div>
			<div class="footer-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</div>
			<div class="footer-social">
				<a href="#"><span class="footer-icon">&#xf09a;</span></a>
				<a href="#"><span class="footer-icon">&#xf099;</span></a>
				<a href="#"><span class="footer-icon">&#xf16a;</span></a>
			</div>
		</div>
		<div class="footer-links">
			<a href="#">Home</a>
			<a href="#about">About</a>
			<a href="#skills">Skills</a>
			<a href="#projects">Projects</a>
			<a href="#contact">Contact</a>
		</div>
		<div class="footer-contact">
			<span><span class="footer-icon">&#xf041;</span> Talon-Talon Sampaloc Drive Zamboanga City</span>
			<span><span class="footer-icon">&#xf095;</span> 09657330569</span>
			<span><span class="footer-icon">&#xf0e0;</span> rreailie@gmail.com</span>
			<span><span class="footer-icon">&#xf09a;</span> <a href="https://facebook.com/reailie.reyes" target="_blank">reailie reyes</a></span>
			<span><span class="footer-icon">&#xf0e1;</span> <a href="https://linkedin.com/in/reailie.reyes" target="_blank">reailie reyes</a></span>
			<span><span class="footer-icon">&#xf2c6;</span> <a href="https://t.me/rei2112" target="_blank">rei2112</a></span>
		</div>
	</div>
	<div class="footer-copyright">
		© <?php echo date("Y"); ?> MyPortfolio | Powered by MyPortfolio
	</div>
</footer>


</body>
</html>