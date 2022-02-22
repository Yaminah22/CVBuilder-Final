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
    <title>Basic Information</title>
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
        <div class="ml-4 mr-5">
            <h4 class="h-font">Basic Information</h4>
            <p style="font-weight:500;">This will let the recruiters know your bio data like location etc.</p>
        </div>
        <div class="progress1">
            <div class="circle active">
              <span class="label">1</span>
              <span class="title" style="font-weight:500; color:black;">Basic</span>
            </div>
            <span class="bar"></span>
            <div class="circle">
              <span class="label">2</span>
              <span class="title" style="font-weight:500;">Experience</span>
            </div>
            <span class="bar"></span>
            <div class="circle">
              <span class="label">3</span>
              <span class="title" style="font-weight:500;">Education</span>
            </div>
            <span class="bar"></span>
            <div class="circle">
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
    <div class="container">
            <form method="POST" action="save_basic.php" enctype="multipart/form-data">
                <div class="row shadow bg-white rounded opacity-75">
                    <div class="col-md-4 d-flex justify-content-center flex-column align-items-center">
                        <div class="rectangle">
                            <img id="output">
                            <div id="plustext">
                                <label id="plus" for="fileinput">&plus;</label>
                                <input type="file" name="picture" id="fileinput">
                                <span class="addcover">Add Picture</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="p-3 py-5">
                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels">First Name</label><input type="text"
                                        class="form-control" placeholder="Ayesha" name="first_name" required></div>
                                <div class="col-md-6"><label class="labels">Last Name</label><input type="text"
                                        class="form-control" name="last_name" placeholder="Khalid"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Contact Number</label><input type="tel"
                                        class="form-control" placeholder="3127936922" name="contact" required></div>
                                <div class="col-md-4"><label class="labels">City</label><input type="text"
                                        class="form-control" placeholder="Karachi" name="city" required></div>
                                <div class="col-md-4"><label class="labels">Country</label><input type="text"
                                        class="form-control" placeholder="Pakistan" name="country" required></div>
                                <div class="col-md-4"><label class="labels">ZIP Code</label><input type="number"
                                        class="form-control" placeholder="79590" name="zip" required></div>
                                <div class="col-md-12"><label class="labels">Email</label><input type="email"
                                        class="form-control" placeholder="ayesha17901@gmail.com" name="email" required></div>
                                <div class="col-md-12"><label class="labels">Profession</label><input type="text"
                                        class="form-control" placeholder="Web Developer" name="profession" required></div>
                                <div class="col-md-12"><label class="labels">Linkedin Profile</label><input type="url"
                                        class="form-control" name="linkedin" placeholder="https://www.linkedin.com/in/ayesha-khalid-42473a196/"></div>
                                <div class="col-md-12"><label class="labels">GitHub Account</label><input type="text"
                                        class="form-control" name="github" placeholder="ayeshakhalid17"\>
                                </div>
                            </div>
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button align-left"
                                    type="submit" name="upload">Next : Work Experience</button></div>
                        </div>
                    </div>

                </div>
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
        var image = document.getElementById("fileinput");
        var p = document.getElementById("plustext");
        image.addEventListener("change", (event) => {
            var img = document.getElementById('output');
            img.src = URL.createObjectURL(event.target.files[0]);
            img.style.display = "block";
            p.style.display = "none";
        })
    </script>
</body>

</html>