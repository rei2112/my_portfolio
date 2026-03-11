<section id="about">

<?php
$query = "SELECT * FROM about_me LIMIT 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<h2>About Me</h2>

<p><strong>Name:</strong> <?php echo $row['full_name']; ?></p>

<p><?php echo $row['description']; ?></p>

<ul>

<li><strong>Age:</strong> <?php echo $row['age']; ?></li>

<li><strong>Birthdate:</strong> <?php echo $row['birthdate']; ?></li>

<li><strong>Gender:</strong> <?php echo $row['gender']; ?></li>

<li><strong>Marital Status:</strong> <?php echo $row['marital_status']; ?></li>

<li><strong>Religion:</strong> <?php echo $row['religion']; ?></li>

<li><strong>Language:</strong> <?php echo $row['language']; ?></li>

</ul>

</section>