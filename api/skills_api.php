<?php

include "../config/db.php";

$id = $_POST['id'] ?? '';

$skills = $_POST['skills'];
$technologies = $_POST['technologies'];

if($id == ""){

$query = "INSERT INTO skills (skills,technologies)
VALUES ('$skills','$technologies')";

}else{

$query = "UPDATE skills SET
skills='$skills',
technologies='$technologies'
WHERE id='$id'";

}

mysqli_query($conn,$query);

header("Location: ../admin/manage_skills.php");
exit();