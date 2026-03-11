<?php
include "config/db.php";
?>

<!DOCTYPE html>
<html>

<head>

<title>My Portfolio</title>

<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


<!-- Navigation -->

<nav class="navbar">

<h2>My Portfolio</h2>

<ul>

<li><a href="#about">About</a></li>
<li><a href="#skills">Skills</a></li>
<li><a href="#projects">Projects</a></li>
<li><a href="#contact">Contact</a></li>

</ul>

</nav>



<!-- Hero Section -->

<section class="hero">

<h1>Hello, I am</h1>

<h2>My Portfolio Website</h2>

<p>Welcome to my personal portfolio.</p>

</section>



<!-- About Section -->

<?php include "aboutme.php"; ?>



<!-- Skills Section -->

<?php include "skills.php"; ?>



<!-- Projects Section -->

<?php include "projects.php"; ?>



<!-- Contact Section -->

<?php include "contact.php"; ?>



<footer>

<p>© <?php echo date("Y"); ?> My Portfolio</p>

</footer>


</body>
</html>