<?php
session_start();
include "../config/db.php";

if(!isset($_SESSION['admin_logged_in'])){
    header("Location: login.php");
    exit();
}

$query = "SELECT * FROM projects ORDER BY id DESC";
$result = mysqli_query($conn,$query);

$edit_id = $_GET['edit'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Projects</title>
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

<h2>Add Project</h2>

<form action="../api/project_api.php" method="POST" enctype="multipart/form-data">

<input type="text" name="title" placeholder="Title" required>

<input type="text" name="project_name" placeholder="Project Name" required>

<textarea name="description" placeholder="Description"></textarea>

<textarea name="purpose" placeholder="Purpose"></textarea>

<label>Image</label>
<input type="file" name="project_image">

<label>Video</label>
<input type="file" name="project_video">

<button type="submit" name="add">Add Project</button>

</form>

<hr>

<h2>Project List</h2>

<table border="1" cellpadding="10">

<tr>
<th>ID</th>
<th>Title</th>
<th>Project</th>
<th>Description</th>
<th>Purpose</th>
<th>Image</th>
<th>Video</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

<?php if($edit_id == $row['id']){ ?>

<form action="../api/project_api.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<td><?php echo $row['id']; ?></td>

<td>
<input type="text" name="title" value="<?php echo $row['title']; ?>">
</td>

<td>
<input type="text" name="project_name" value="<?php echo $row['project_name']; ?>">
</td>

<td>
<input type="text" name="description" value="<?php echo $row['description']; ?>">
</td>

<td>
<input type="text" name="purpose" value="<?php echo $row['purpose']; ?>">
</td>

<td>
<img src="../uploads/<?php echo $row['project_image']; ?>" width="60">
</td>

<td>
<video width="120" controls>
<source src="../uploads/<?php echo $row['project_video']; ?>" type="video/mp4">
Your browser does not support video.
</video>
</td>

<td>
<button type="submit" name="update">Update</button>
<a href="manage_projects.php">Cancel</a>
</td>

</form>

<?php } else { ?>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['project_name']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['purpose']; ?></td>

<td>
<img src="../uploads/<?php echo $row['project_image']; ?>" width="60">
</td>

<td>
<video width="80" controls>
<source src="../uploads/<?php echo $row['project_video']; ?>">
</video>
</td>

<td>

<a href="manage_projects.php?edit=<?php echo $row['id']; ?>">Edit</a> |
<a href="../api/delete_project.php?id=<?php echo $row['id']; ?>">Delete</a>

</td>

<?php } ?>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>