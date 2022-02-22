<!DOCTYPE html>
<html lang="en">
<?php
    require("config.php");
    session_start();
   
?>

<head>
    <title>Work Section</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navBarAndFooter.css">
    <link rel="stylesheet" href="progress.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    
    <style>
    body {
        background-image: url(images/bg1.jpeg) !important;
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Templates
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Template 1</a>
                    <a class="dropdown-item" href="#">Template 2</a>
                    <a class="dropdown-item" href="#">Template 3 </a>
                </div>
            </li>
            </ul>
            </span>
        </div>
    </nav>

    <div class="row align-items-middle ms-5 mt-5 col-10 ">
            <div class="ms-5 col-3">
                <h4 class="h-font">Work Experience</h4>
                <p class="pt-2 ps-2 lead">Tell us about your job from most recent to the oldest.</p>
            </div>
           <div class="progress1 col-7 me-1">
               <div class="circle done">
                 <span class="label">1</span>
                 <span class="title" style="font-weight:500; color:black;">Basic</span>
               </div>
               <span class="bar"></span>
               <div class="circle active">
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
            <div class="container rounded mt-1 mb-5">
            <form method="post" enctype="application/x-www-form-urlencoded">
                <div class="ms-4 shadow-sm mb-5 bg-white rounded p-4">
                    <div class="row pt-1 ps-2">
                        <div class="col col-sm-5">
                            <div class="mb-3">
                                <label for="jobName" class="form-label">Job Title</label>
                                <input type="text" name="jobName" class="form-control" id="jobName"
                                    placeholder="Enter your job title" required>
                            </div>
                        </div>
                        <div class="col col-sm-5">
                            <div class="mb-3">
                                <label for="employer" class="form-label">Employer</label>
                                <input type="text" name="employer" class="form-control" id="employer"
                                    placeholder="Enter your employer name" required>
                            </div>
                        </div>
                    </div>

                    <div class="row pt-1 ps-2">
                        <div class="col col-sm-5">
                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" name="city" class="form-control" id="city" placeholder="City name"
                                    required>
                            </div>
                        </div>
                        <div class="col col-sm-5">
                            <div class="mb-3">
                                <label for="state" class="form-label">State</label>
                                <input type="text" name="state" class="form-control" id="state" placeholder="State name"
                                    required>
                            </div>
                        </div>

                    </div>
                    <div class="row pt-1 ps-2">
                        <div class="col col-sm-3">
                            <div class="mb-3">
                                <label for="startDate" class="form-label">Start Date</label>
                                <input type="date" onchange="startDateCheck(this.value)" name="startDate"
                                    class="form-control" id="startDate" required data-bs-container="body"
                                    data-bs-toggle="popover" data-bs-placement="bottom"
                                    data-bs-content="Start date can not be after today!">
                            </div>
                        </div>
                        <div class="col col-sm-3">
                            <div class="mb-3">
                                <label for="endDate" class="form-label">End Date</label>
                                <input type="date" onchange="endDateCheck(this.value)" name="endDate"
                                    class="form-control" id="endDate" required data-bs-container="body"
                                    data-bs-toggle="popover" data-bs-placement="bottom"
                                    data-bs-content="End date can not be before start date!">
                            </div>
                        </div>
                        <div class="col col-sm-3">
                            <div class="form-check p-5">
                                <input class="form-check-input" onchange="check(this.value)" type="checkbox" value="1"
                                    name="working" id="currentWork">
                                <label class="form-check-label" for="currentWork">
                                    I currently work here
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="row pt-1 ps-2">
                        <div class=" col d-flex justify-content-start col-7">
                            <button type="button" class="btn btn-secondary ps-4 pr-4 pt-2 pb-2"
                                onclick="window.location.href='basic.html'">Previous</button>
                        </div>
                        <div class="col d-flex justify-content-end col-4">
                            <button type="submit" name="workexperience"
                                class="btn btn-primary ps-4 pr-4 pt-2 pb-2">Next</button>
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
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script>
    function check(d) {
        if (d == 1) {
            document.getElementById('endDate').disabled = true;
        } else {
            document.getElementById('endDate').disabled = false;
        }
    }

    function endDateCheck(b) {
        var end = new Date(b);
        var s = document.getElementById('startDate').value;
        var start = new Date(s);
        if (end.setHours(0, 0, 0, 0) < start.setHours(0, 0, 0, 0)) {
            $('#endDate').popover('show');
            document.getElementById("endDate").value = null;
        } else {
            $('#endDate').popover('hide');
        }
    }

    function startDateCheck(c) {
        var start = new Date(c);
        const now = new Date();
        if (start.setHours(0, 0, 0, 0) > now.setHours(0, 0, 0, 0)) {
            $('#startDate').popover('show');
            document.getElementById("startDate").value = null;
        } else {
            $('#startDate').popover('hide');
        }
    }
    </script>

    <?php
        if (isset($_SESSION['first_name']) && isset($_SESSION['last_name'])){
            if(isset($_POST['workexperience'])) {
                $query = "SELECT * FROM `user_work_mapping` WHERE`job_title`='$_POST[jobName]'";
                $result = mysqli_query($conn, $query);
                if ($result) {
                        if($_POST['working']==1)
                        {
                            $_POST['endDate'] = null;
                        }
                        $add1 = "INSERT INTO `user_work_mapping`(`fname`,`lname`,`job_title`) VALUES ('$_SESSION[first_name]','$_SESSION[last_name]','$_POST[jobName]')";
                        $add2="INSERT INTO `user_work_details`(`title`, `employer`, `city`, `state`, `start`, `end`, `current`) VALUES ('$_POST[jobName]','$_POST[employer]','$_POST[city]','$_POST[state]','$_POST[startDate]','$_POST[endDate]','$_POST[working]')";
                        $run1 = mysqli_query($conn, $add1);
                        $run2 = mysqli_query($conn, $add2);
                            if ($run1 && $run2) {
                                echo "<script>
                                window.location.href='workExperienceList.php';
                                </script>";
                            } 
                            else {
                                    echo "<script>alert('Failed to add this workplace!')
                                window.location.href='workExperience.php';
                                </script>";
                            }
                        }
                else {
                    echo "<script>alert('Cannot run Query')
                            window.location.href='workExperience.php';
                            </script>";
                }
            }

            
        }
        ?>
</body>


</html>