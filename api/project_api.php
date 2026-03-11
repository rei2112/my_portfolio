<?php

include "../config/db.php";

/* ADD PROJECT */

if(isset($_POST['add'])){

$title = $_POST['title'];
$project_name = $_POST['project_name'];
$description = $_POST['description'];
$purpose = $_POST['purpose'];

/* IMAGE UPLOAD */
$image = $_FILES['project_image']['name'];
$tmp_image = $_FILES['project_image']['tmp_name'];

if($image != ""){
move_uploaded_file($tmp_image,"../uploads/".$image);
}

/* VIDEO UPLOAD */
$video = $_FILES['project_video']['name'];
$tmp_video = $_FILES['project_video']['tmp_name'];

if($video != ""){
move_uploaded_file($tmp_video,"../uploads/".$video);
}

/* INSERT INTO DATABASE */

$query = "INSERT INTO projects
(title, project_name, description, purpose, project_image, project_video)
VALUES
('$title','$project_name','$description','$purpose','$image','$video')";

$result = mysqli_query($conn,$query);

if(!$result){
die("Database Error: ".mysqli_error($conn));
}

header("Location: ../admin/manage_projects.php");
exit();

}



/* UPDATE PROJECT */

if(isset($_POST['update'])){

$id = $_POST['id'];
$title = $_POST['title'];
$project_name = $_POST['project_name'];
$description = $_POST['description'];
$purpose = $_POST['purpose'];

$query = "UPDATE projects SET
title='$title',
project_name='$project_name',
description='$description',
purpose='$purpose'
WHERE id='$id'";

mysqli_query($conn,$query);

header("Location: ../admin/manage_projects.php");
exit();

}