<?php
session_start();
include "../config/db.php";

if(!isset($_SESSION['admin_logged_in'])){
    header("Location: login.php");
    exit();
}

$query = "SELECT * FROM about_me LIMIT 1";
$result = mysqli_query($conn,$query);

/* Prevent warnings if table is empty */
$data = mysqli_fetch_assoc($result) ?? [];
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage About</title>
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

<h2>Edit About Me</h2>

<form action="../api/about_api.php" method="POST">

<input type="hidden" name="id" value="<?php echo $data['id'] ?? ''; ?>">

<label>Full Name</label>
<input type="text" name="full_name" value="<?php echo $data['full_name'] ?? ''; ?>">

<label>Description</label>
<textarea name="description"><?php echo $data['description'] ?? ''; ?></textarea>

<label>Age</label>
<input type="text" name="age" value="<?php echo $data['age'] ?? ''; ?>">

<label>Birthdate</label>
<input type="date" name="birthdate" value="<?php echo $data['birthdate'] ?? ''; ?>">

<label>Gender</label>
<input type="text" name="gender" value="<?php echo $data['gender'] ?? ''; ?>">

<label>Marital Status</label>
<input type="text" name="marital_status" value="<?php echo $data['marital_status'] ?? ''; ?>">

<label>Religion</label>
<input type="text" name="religion" value="<?php echo $data['religion'] ?? ''; ?>">

<label>Language</label>
<input type="text" name="language" value="<?php echo $data['language'] ?? ''; ?>">

<br><br>

<button type="submit">Update</button>

</form>

</div>

</body>
</html>