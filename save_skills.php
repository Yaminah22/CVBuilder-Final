<?php
include 'config.php';
session_start();
if (isset($_POST['upload'])){
$first_name=$_SESSION['first_name'];
$last_name=$_SESSION['last_name'];
$skill_1=mysqli_real_escape_string($conn,$_POST['skill_1']);
$skill_1_exp=$_POST['skill_1_exp'];
$insert_q="INSERT INTO `cvbuilder`.`skills` (first_name,last_name,skill_name,skill_level) VALUES ('$first_name','$last_name','$skill_1','$skill_1_exp')";
$insertion=mysqli_query($conn, $insert_q);
$skill_2=mysqli_real_escape_string($conn,$_POST['skill_2']);
$skill_2_exp=$_POST['skill_2_exp'];
if($skill_2!=''){
    $insert_q="INSERT INTO `cvbuilder`.`skills` (first_name,last_name,skill_name,skill_level) VALUES ('$first_name','$last_name','$skill_2','$skill_2_exp')";
    $insertion=mysqli_query($conn, $insert_q);
}
$skill_3=mysqli_real_escape_string($conn,$_POST['skill_3']);
$skill_3_exp=$_POST['skill_3_exp'];
if($skill_3!=''){
    $insert_q="INSERT INTO `cvbuilder`.`skills` (first_name,last_name,skill_name,skill_level) VALUES ('$first_name','$last_name','$skill_3','$skill_3_exp')";
    $insertion=mysqli_query($conn, $insert_q);
}
$skill_4=mysqli_real_escape_string($conn,$_POST['skill_4']);
$skill_4_exp=$_POST['skill_4_exp'];
if($skill_4!=''){
    $insert_q="INSERT INTO `cvbuilder`.`skills` (first_name,last_name,skill_name,skill_level) VALUES ('$first_name','$last_name','$skill_4','$skill_4_exp')";
    $insertion=mysqli_query($conn, $insert_q);
}
$skill_5=mysqli_real_escape_string($conn,$_POST['skill_5']);
$skill_5_exp=$_POST['skill_5_exp'];
if($skill_5!=''){
    $insert_q="INSERT INTO `cvbuilder`.`skills` (first_name,last_name,skill_name,skill_level) VALUES ('$first_name','$last_name','$skill_5','$skill_5_exp')";
    $insertion=mysqli_query($conn, $insert_q);
}
header("Location:summary.php");
}