<?php

include "../config/db.php";

$id = $_POST['id'] ?? '';

$full_name = $_POST['full_name'];
$description = $_POST['description'];
$age = $_POST['age'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$marital_status = $_POST['marital_status'];
$religion = $_POST['religion'];
$language = $_POST['language'];

/* If no record yet → INSERT */
if($id == ""){

    $query = "INSERT INTO about_me 
    (full_name, description, age, birthdate, gender, marital_status, religion, language)
    VALUES 
    ('$full_name','$description','$age','$birthdate','$gender','$marital_status','$religion','$language')";

}else{

/* If record exists → UPDATE */

    $query = "UPDATE about_me SET
    full_name='$full_name',
    description='$description',
    age='$age',
    birthdate='$birthdate',
    gender='$gender',
    marital_status='$marital_status',
    religion='$religion',
    language='$language'
    WHERE id='$id'";

}

mysqli_query($conn,$query);

header("Location: ../admin/manage_about.php");
exit();