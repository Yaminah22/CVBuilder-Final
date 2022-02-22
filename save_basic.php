<?php
include 'config.php';
session_start();
if (isset($_POST['upload'])){
$first_name=mysqli_real_escape_string($conn,$_POST['first_name']);
$_SESSION['first_name']=$first_name;
$last_name=mysqli_real_escape_string($conn,$_POST['last_name']);
$_SESSION['last_name']=$last_name;
$contact=mysqli_real_escape_string($conn,$_POST['contact']);
$city=mysqli_real_escape_string($conn,$_POST['city']);
$country=mysqli_real_escape_string($conn,$_POST['country']);
$zip=mysqli_real_escape_string($conn,$_POST['zip']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$profession=mysqli_real_escape_string($conn,$_POST['profession']);
$linkedin=mysqli_real_escape_string($conn,$_POST['linkedin']);
$github=mysqli_real_escape_string($conn,$_POST['github']);
$picturename=$_FILES['picture']['name'];
$picturetmp_name=$_FILES['picture']['tmp_name'];
$folder="images/".$picturename;
$insert_q="INSERT INTO `cvbuilder`.`basic` (first_name,last_name,contact,city,country,zip,email,profession,linkedin,github,picture) VALUES ('$first_name','$last_name','$contact','$city','$country','$zip','$email','$profession','$linkedin','$github','$picturename')";
$insertion=mysqli_query($conn, $insert_q);
if (move_uploaded_file($picturetmp_name,$folder)) {
	header("Location:workExperience.php");
}
}
