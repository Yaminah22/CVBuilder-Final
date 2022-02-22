<?php
session_start();
include 'config.php';
$first_name = $_SESSION["first_name"];
$last_name = $_SESSION["last_name"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="form1.css">
    <link rel="stylesheet" href="progress.css">
    <link rel="stylesheet" href="summary.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <title>Summary</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#"><img class="image" src="images/logo_transparent.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
            </ul>
            <span class="navbar-text">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home
            </span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.html">About</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="temp.php">Templates</span></a>
            </li>
            </ul>
            </span>
        </div>
    </nav>
    <div class="m-3 ml-5 row align-items-center">
        <div class="ml-4 d-flex flex-column">
            <h4 class="h-font">Summary</h4>
            <p style="font-weight:500;">Some templates are available for you to select an eye-catching summary of <br>your profile. Click on a template to select it.</p>
        </div>
        <div class="progress1">
            <div class="circle done">
                <span class="label">1</span>
                <span class="title" style="font-weight:500;">Basic</span>
            </div>
            <span class="bar done"></span>
            <div class="circle done">
                <span class="label">2</span>
                <span class="title" style="font-weight:500;">Experience</span>
            </div>
            <span class="bar done"></span>
            <div class="circle done">
                <span class="label">3</span>
                <span class="title" style="font-weight:500;">Education</span>
            </div>
            <span class="bar half"></span>
            <div class="circle done">
                <span class="label">4</span>
                <span class="title" style="font-weight:500;">Skills</span>
            </div>
            <span class="bar"></span>
            <div class="circle active">
                <span class="label">5</span>
                <span class="title" style="font-weight:500;">Summary</span>
            </div>
        </div>
    </div>
    <div class="container rounded mt-4 align-items-center">
        <form method="POST" action="save_summary.php" enctype="multipart/form-data">
            <div class="summary">
                <div class="text" id="box_1" onclick="select(this.id)">
                    An independent and self-motivated business student with proven and tested
                    <?php
                    $data3 = mysqli_query($conn, "SELECT * FROM `cvbuilder`.`skills` WHERE first_name='$first_name' AND last_name='$last_name'");
                    foreach ($data3 as $result) {
                        echo ",",$result['skill_name'];
                    };
                    ?>
                    skills. Committed to prove myself in a challenging environment.
                </div>
                <div class="text" id="box_2" onclick="select(this.id)">
                    To seek and maintain a full-time position that offers professional challenges and adding value to the team by utilizing <?php
                    $data3 = mysqli_query($conn, "SELECT * FROM `cvbuilder`.`skills` WHERE first_name='$first_name' AND last_name='$last_name'");
                    foreach ($data3 as $result) {
                        echo ",",$result['skill_name'];
                    };
                    ?> skills.
                </div>
                <div class="text" id="box_3" onclick="select(this.id)">
                    Hardworking and passionate job seeker with strong  <?php
                    $data3 = mysqli_query($conn, "SELECT * FROM `cvbuilder`.`skills` WHERE first_name='$first_name' AND last_name='$last_name'");
                    foreach ($data3 as $result) {
                        echo ",",$result['skill_name'];
                    };
                    ?> skills eager to secure entry-level <?php
                    $data3 = mysqli_query($conn, "SELECT * FROM `cvbuilder`.`basic` WHERE first_name='$first_name' AND last_name='$last_name'");
                    foreach ($data3 as $result) {
                        echo ",",$result['profession'];
                    };
                    ?> position. Ready to help team achieve company goals.
                </div>
            </div>
            <input type="hidden" id="mydata" name="summ">
            <div class="mt-5 text-center"><button class="btn btn-primary profile-button align-left" type="submit" name="summary">Generate PDF</button></div>
        </form>
    </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        function select(id) {
            var box = document.getElementById(id);
            box.style.backgroundColor = "#A7D1CF";
            var summary = box.innerHTML;
            document.getElementById("mydata").value = summary;
            console.log(document.getElementById("mydata").value);
        };
    </script>
</body>

</html>