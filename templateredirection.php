<?php
include_once('config.php');
session_start();
$exclude_list1 = array("rgb(102, 187, 144)","rgb(228, 117, 117)","rgb(77, 182, 231)","rgb(245, 245, 245)");
$exclude_list2 = array("rgb(16, 128, 109)","rgb(177, 103, 19)","rgb(56, 15, 13)","rgb(70, 130, 191)");
$exclude_list3 = array("rgb(0, 171, 159)","navy","rgba(220, 20, 60, 0.494)","mediumseagreen");

if ( $_SESSION['template']=="Create CV3"){
    if(!in_array($_SESSION['color'], $exclude_list1)){ 
        $_SESSION['color']="rgb(245, 245, 245)";
    }
}
   
if ( $_SESSION['template']=="Create CV2"){
    if(!in_array($_SESSION['color'], $exclude_list2)){ 
        $_SESSION['color']="rgb(70, 130, 191)";
    }
}
   
if ( $_SESSION['template']=="Create CV1"){
    if(!in_array($_SESSION['color'], $exclude_list3)){ 
        $_SESSION['color']="rgb(0, 171, 159)";
    }
}
header("Location:basic.php");
?>