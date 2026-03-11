<?php

include "../config/db.php";

$address = $_POST['address'];
$contact_number = $_POST['contact_number'];
$email = $_POST['email'];
$facebook = $_POST['facebook'];
$linkedin = $_POST['linkedin'];
$telegram = $_POST['telegram'];

/* Check if record exists */

$check = mysqli_query($conn,"SELECT * FROM contacts LIMIT 1");

if(mysqli_num_rows($check) == 0){

    /* INSERT if empty */

    $query = "INSERT INTO contacts 
    (address, contact_number, email, facebook, linkedin, telegram)
    VALUES
    ('$address','$contact_number','$email','$facebook','$linkedin','$telegram')";

}else{

    /* UPDATE if record exists */

    $query = "UPDATE contacts SET
    address='$address',
    contact_number='$contact_number',
    email='$email',
    facebook='$facebook',
    linkedin='$linkedin',
    telegram='$telegram'
    WHERE id=1";

}

$result = mysqli_query($conn,$query);

if(!$result){
    die("Database Error: ".mysqli_error($conn));
}

header("Location: ../admin/manage_contacts.php");
exit();