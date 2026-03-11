<section id="contact">

<h2>Contact Me</h2>

<?php

$query = "SELECT * FROM contacts LIMIT 1";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

?>

<div class="contact-container">

<p><strong>Address:</strong> <?php echo $row['address']; ?></p>

<p><strong>Contact Number:</strong> <?php echo $row['contact_number']; ?></p>

<p><strong>Email:</strong> <?php echo $row['email']; ?></p>

<p><strong>Facebook:</strong> 
<a href="<?php echo $row['facebook']; ?>" target="_blank">
<?php echo $row['facebook']; ?>
</a>
</p>

<p><strong>LinkedIn:</strong> 
<a href="<?php echo $row['linkedin']; ?>" target="_blank">
<?php echo $row['linkedin']; ?>
</a>
</p>

<p><strong>Telegram:</strong> 
<a href="<?php echo $row['telegram']; ?>" target="_blank">
<?php echo $row['telegram']; ?>
</a>
</p>

</div>

</section>