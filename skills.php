<?php 
session_start();
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
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <title>Skills</title>
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
            <h4 class="h-font">Skills</h4>
            <p style="font-weight:500;">Enter relevant skills with expertise level that will help you get recruited.<br>Mention atleast one skill.</p>
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
            <span class="bar half"></span>
            <div class="circle done">
              <span class="label">3</span>
              <span class="title" style="font-weight:500;">Education</span>
            </div>
            <span class="bar"></span>
            <div class="circle active">
              <span class="label">4</span>
              <span class="title" style="font-weight:500;">Skills</span>
            </div>
            <span class="bar"></span>
            <div class="circle">
              <span class="label">5</span>
              <span class="title" style="font-weight:500;" >Summary</span>
            </div>
          </div>
    </div>
        <div class="container rounded mt-4 mb-4 align-items-center shadow rounded opacity-75 bg-white p-4 pl-5 pr-5">
            <form method="POST" action="save_skills.php" enctype="multipart/form-data">
                <div class="row align-items-center mb-2">
                    <div class="col-md-6">
                        <label class="labels">Name of Skill</label>
                        <input type="text" class="form-control" required placeholder="MERN Stack Development" name="skill_1">
                    </div>
                    <div class="col-md-6">
                        <label for="customRange1" class="labels">Expertise of Skill</label>
                        <input type="range" class="custom-range md-6" min="0" max="100" step="20" id="customRange1"
                            class="md-6" value="0" name="skill_1_exp" required>
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-md-6">
                        <label class="labels">Name of Skill</label>
                        <input type="text" class="form-control" placeholder="Cyber Security" name="skill_2">
                    </div>
                    <div class="col-md-6">
                        <label for="customRange1" class="labels">Expertise of Skill</label>
                        <input type="range" class="custom-range md-6" min="0" max="100" step="20" id="customRange1"
                            class="md-6" value="0" name="skill_2_exp">
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-md-6">
                        <label class="labels">Name of Skill</label>
                        <input type="text" class="form-control" placeholder="Logo Designing" name="skill_3">
                    </div>
                    <div class="col-md-6">
                        <label for="customRange1" class="labels">Expertise of Skill</label>
                        <input type="range" class="custom-range md-6" min="0" max="100" step="20" id="customRange1"
                            class="md-6" value="0" name="skill_3_exp">
                    </div>
                </div>
                <div class="row align-items-center mb-2" id="skill_4">
                    <div class="col-md-6">
                        <label class="labels">Name of Skill</label>
                        <input type="text" class="form-control" placeholder="Digital Marketing" name="skill_4">
                    </div>
                    <div class="col-md-6">
                        <label for="customRange1" class="labels">Expertise of Skill</label>
                        <input type="range" class="custom-range md-6" min="0" max="100" step="20" id="customRange1"
                            class="md-6" value="0" name="skill_4_exp">
                    </div>
                </div>
                <div class="row align-items-center mb-2" id="skill_5">
                    <div class="col-md-6">
                        <label class="labels">Name of Skill</label>
                        <input type="text" class="form-control" placeholder="SEO" name="skill_5">
                    </div>
                    <div class="col-md-6">
                        <label for="customRange1" class="labels">Expertise of Skill</label>
                        <input type="range" class="custom-range md-6" min="0" max="100" step="20" id="customRange1"
                            class="md-6" value="0" name="skill_5_exp">
                    </div>
                </div>
                <br>
                <a id="add_skill" class="add_skill4" onclick="add_skill_4()">Add another skill</a>
                <a id="add_skill" class="add_skill5" onclick="add_skill_5()">Add another skill</a>
                <div class="text-center"><button class="btn btn-primary profile-button align-left" type="submit"
                        name="upload">Next : Summary</button></div>
            </form>
        </div>
    <footer class="footer" id="footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-3" style="margin-top:1% ; margin-bottom: 1%;"><a>Copyright<i
                            class="fa fa-copyright" aria-hidden="true"></i>CV</a></div>
                <div class="col-sm-12 col-md-6 col-lg-3" style="margin-top:1% ;"><a><i class="fa fa-whatsapp"
                            aria-hidden="true"></i>&ensp;+92256314548 <br></a></div>

                <div class="col-sm-12 col-md-6 col-lg-3" style="margin-top:1% ;"><a><i class="fa fa-envelope-o"
                            aria-hidden="true"></i>&ensp;CV@gmail.com</a></div>
                <br>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <script>
        var skill_4 = document.getElementById("skill_4");
        var skill_5 = document.getElementById("skill_5");
        var add_skill4 = document.getElementsByClassName("add_skill4")[0];
        var add_skill5 = document.getElementsByClassName("add_skill5")[0];
        function add_skill_4() {
            skill_4.style.display = "flex";
            add_skill4.style.display="none";
            add_skill5.style.display = "flex";
        }
        function add_skill_5() {
            skill_5.style.display = "flex";
            add_skill5.style.display="none";
        }
    </script>
</body>

</html>