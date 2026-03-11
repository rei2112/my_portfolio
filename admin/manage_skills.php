<?php
session_start();
include "../config/db.php";

if(!isset($_SESSION['admin_logged_in'])){
    header("Location: login.php");
    exit();
}

$query = "SELECT * FROM skills LIMIT 1";
$result = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($result) ?? [];
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Skills</title>
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

<h2>Edit Skills</h2>

<form action="../api/skills_api.php" method="POST">

<input type="hidden" name="id" value="<?php echo $data['id'] ?? ''; ?>">

<label>Skills</label>
<input type="text" name="skills" value="<?php echo $data['skills'] ?? ''; ?>">

<label>Technologies</label>
<input type="text" name="technologies" value="<?php echo $data['technologies'] ?? ''; ?>">

<br><br>

<button type="submit">Update</button>

</form>

</div>

</body>
</html>