<section id="projects">

<h2>My Projects</h2>

<?php

$query = "SELECT * FROM projects ORDER BY id DESC";
$result = mysqli_query($conn,$query);

?>

<div class="projects-container">

<?php
while($row = mysqli_fetch_assoc($result)){
?>

<div class="project-card">

<h3><?php echo $row['title']; ?></h3>

<h4><?php echo $row['project_name']; ?></h4>

<p><?php echo $row['description']; ?></p>

<p><strong>Purpose:</strong> <?php echo $row['purpose']; ?></p>

<?php if(!empty($row['project_image'])){ ?>
<img src="uploads/<?php echo $row['project_image']; ?>" width="250">
<?php } ?>

<?php if(!empty($row['project_video'])){ ?>
<video width="300" controls>
<source src="uploads/<?php echo $row['project_video']; ?>" type="video/mp4">
</video>
<?php } ?>

</div>

<?php } ?>

</div>

</section>