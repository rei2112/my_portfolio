<?php
session_start();

if(!isset($_SESSION['admin_logged_in'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

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
    <h1>Admin Dashboard</h1>
    <p>Welcome to your portfolio CMS.</p>
</div>

</body>
</html>