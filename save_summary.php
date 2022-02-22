<?php
include 'config.php';
session_start();
if (isset($_POST['summary'])){
    $first_name=$_SESSION["first_name"];
    $last_name=$_SESSION["last_name"];
    $summary=mysqli_real_escape_string($conn,$_POST["summ"]);
    $insert_q="INSERT INTO `cvbuilder`.`summary` (first_name,last_name,summary) VALUES ('$first_name','$last_name','$summary')";
    $insertion=mysqli_query($conn, $insert_q);
    
}
if ( $_SESSION['template']=="Create CV1"){
    header("Location:templates/template 1/template1.php");
    
}
   
if ( $_SESSION['template']=="Create CV2"){
    header("Location:templates/template2/template2.php");
}
   
if ( $_SESSION['template']=="Create CV3"){
    header("Location:templates/template3/template3.php");
}
?>