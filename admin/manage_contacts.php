<?php
session_start();
include "../config/db.php";

if(!isset($_SESSION['admin_logged_in'])){
header("Location: login.php");
exit();
}

$query = "SELECT * FROM contacts LIMIT 1";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
<title>Manage Contacts</title>
<link rel="stylesheet" href="../assets/css/dashboard.css">
</head>

<body>

<div class="sidebar">

<h2>Portfolio CMS</h2>

<a href="dashboard.php">Dashboard</a>
<a href="manage_about.php">Manage About</a>
<a href="manage_skills.php">Manage Skills</a>
<a href="manage_projects.php">Manage Projects</a>
<a href="manage_contacts.php">Manage Contacts</a>
<a href="logout.php">Logout</a>

</div>

<div class="main">

<h2>Manage Contact Information</h2>

<form action="../api/contact_api.php" method="POST">

<label>Address</label>
<input type="text" name="address" value="<?php echo $row['address'] ?? ''; ?>">

<label>Contact Number</label>
<input type="text" name="contact_number" value="<?php echo $row['contact_number'] ?? ''; ?>">

<label>Email</label>
<input type="text" name="email" value="<?php echo $row['email'] ?? ''; ?>">

<label>Facebook</label>
<input type="text" name="facebook" value="<?php echo $row['facebook'] ?? ''; ?>">

<label>LinkedIn</label>
<input type="text" name="linkedin" value="<?php echo $row['linkedin'] ?? ''; ?>">

<label>Telegram</label>
<input type="text" name="telegram" value="<?php echo $row['telegram'] ?? ''; ?>">

<button type="submit">Update Contact</button>

</form>

</div>

</body>
</html>