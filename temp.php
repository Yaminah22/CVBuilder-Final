<?php
session_start();

// Creation of a php variable and assigning a value to it.
if (isset($_POST['button1'])) {
    $btn = $_POST['button1'];
    $color=$_POST['color'];
    $_SESSION['template']=$btn;
    $_SESSION['color']=$color;
    header("Location:templateredirection.php");

} elseif (isset($_POST['button2'])) {
    $btn = $_POST['button2'];
    $color=$_POST['color'];
    $_SESSION['template']=$btn;
    $_SESSION['color']=$color;
    
    header("Location:templateredirection.php");
} elseif (isset($_POST['button3'])) {
    $btn = $_POST['button3'];
    $color=$_POST['color'];
    $_SESSION['template']=$btn;
    $_SESSION['color']=$color;
    header("Location:templateredirection.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <title>Templates</title>
</head>
<style>
    body{
    background-image: url(imgaes/bg2.jpg) !important;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-light " >
            <a class="navbar-brand" href="#"><img class="image" src="imgaes/logo_transparent.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                </ul>
                <span class="navbar-text">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html" >Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="temp.php">Templates</a>
                        </li>
                    </ul>
                </span>
            </div>
        </nav>
        <div class="gap"></div>
        <div class="d-flex justify-content-center align-items-center pt-3">
            <p class="h-font mb-3">Select your desired color and template to start making your CV!</p>
        </div>
        <form method="post">
            <div class="container">
                <div class="row ">
                <div class="col-sm-12 col-md-12  col-lg-4">
                    <ul class="list d-flex">
                    <li class="circle" id="c1" onclick="colorborder(this)" style="background-color:#00ab9f;"></li>
                    <li class="circle" id="c2" onclick="colorborder(this)" style="background-color:navy"></li>
                    <li class="circle" id="c3" onclick="colorborder(this)" style="background-color:rgba(220, 20, 60, 0.493)"></li>
                    <li class="circle" id="c4" onclick="colorborder(this) "style="background-color:mediumseagreen"></li></ul>
                        <div class="card" class="imglink">
                            <a href="#"><img src="imgaes/temp1.jpg" style="width: 20rem; height: 30rem;" class="card-img-top"></a>
                            <input type="submit" class="btn btn-danger" id="3" value="Create CV1" name="button3">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12  col-lg-4">
                    <ul class="list d-flex">
                    <li class="circle" id="c4" onclick="colorborder(this)"style="background-color:#4682bf"></li>
                    <li class="circle" id="c1" onclick="colorborder(this) "style="background-color:#10806d"></li>
                    <li class="circle" id="c2" onclick="colorborder(this)"style="background-color:#b16713"></li>
                    <li class="circle" id="c3" onclick="colorborder(this)" style="background-color:#380f0d"></li>
                    </ul>
                        <div class="card" class="imglink">
                            <a href="#"><img src="imgaes/temp2.jpg" style="width: 20rem; height: 30rem;" class="card-img-top"></a>
                            <input type="submit" class="btn btn-danger  " id="2" value="Create CV2" name="button2">
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-12  col-lg-4">
                    <ul class="list d-flex">
                    <li class="circle" id="c1" onclick="colorborder(this)" style="background-color:#f5f5f5"></li>
                    <li class="circle" id="c2" onclick="colorborder(this)" style="background-color:#e47575"></li>
                    <li class="circle" id="c3" onclick="colorborder(this)" style="background-color:#4db6e7"></li>
                    <li class="circle" id="c4" onclick="colorborder(this)" style="background-color:#66bb90"></li></ul>
                        <div class="card" class="imglink">
                            <a href="#">
                                <img src="imgaes/temp3.jpg" style="width: 20rem; height: 30rem;" class="ig" class="card-img-top">
                            </a>
                            <input type="submit" class="btn btn-danger " id="1" value="Create CV3" name="button1">
                        </div>
                    </div>
                </div>
                <input type="hidden" id="mydata" name="color">
            </div>
        </form>
        <div class="gap"></div>
    <footer class="footer" id="footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-3" style="margin-top:1% ; margin-bottom: 1%;"><a>Copyright<i class="fa fa-copyright" aria-hidden="true"></i>CV</a></div>
                <div class="col-sm-12 col-md-6 col-lg-3" style="margin-top:1% ;"><a><i class="fa fa-whatsapp" aria-hidden="true"></i>&ensp;+92256314548 <br></a></div>
                <div class="col-sm-12 col-md-6 col-lg-3" style="margin-top:1% ;"><a><i class="fa fa-envelope-o" aria-hidden="true"></i>&ensp;CV@gmail.com</a></div>
                <br>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
    function colorborder(e){
    selected=document.getElementsByClassName("circle");
    Array.from(selected,child => {
    child.style.border="none";});
    e.style.border="5px solid gray";
    var bgcolor = e.style.backgroundColor;
    document.getElementById("mydata").value=bgcolor;
    }
</script>
</body>

</html>