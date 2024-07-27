<?php

$con=mysqli_connect("localhost","root","","temp");
if(!$con)
{
    dia ("error detected".mysqli_error($con));
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dateofbirth = $_POST['dob'];
$hobbies = $_POST['hobbies'];


$quary = "INSERT INTO student (fname, lname, email, gender , dob, hobbies)
        VALUES ('$firstname', '$lastname', '$email', '$gender', '$dateofbirth', '$hobbies')";

if (mysqli_query($con, $quary)) {
    echo "<script>alert('New record inserted')</script>";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>