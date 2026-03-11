<section id="skills">

<h2>Skills / Technologies</h2>

<?php

$query = "SELECT * FROM skills";
$result = mysqli_query($conn,$query);

?>

<ul class="skills-list">

<?php
while($row = mysqli_fetch_assoc($result)){
?>

<li>

<strong><?php echo $row['skills']; ?></strong>

<?php if(!empty($row['technologies'])){ ?>

- <?php echo $row['technologies']; ?>

<?php } ?>

</li>

<?php } ?>

</ul>

</section>