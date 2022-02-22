<!DOCTYPE html>
<html lang="en">
<?php
    require("config.php");
    session_start();
?>

<head>
    <title>Education Section</title>
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
    .addButton {
        color: #1a5672;
        border: 2px dashed #1a5672;
        border-radius: 5px;
    }

    .addButton:hover {
        cursor: pointer;
        background-color: lavender;
    }

    .tableButtons {
        cursor: pointer;
        background-color: rgb(203, 203, 216);
    }

    .tableButtons:hover {
        cursor: pointer;
        background-color: lightgrey;
    }
    .btn{
        border: none; 
        color: white; 
        font-size: 16px; 
    }
    body{
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
                        <a class="nav-link" href="#">Home
            </span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="index.html#about">About</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="temp.php">Templates</span></a>
            </li>
            </ul>
            </span>
        </div>
    </nav>


    <div class="row align-items-middle ms-2 mt-5 col-10">
            <div class="ms-5 col-3">
                <h4 class="h-font">
                    Education Summary
                </h4>
                <p class="pt-2 ps-2 lead">Here is a summary of what you told us.</p>
            </div>
           <div class="progress1 col-7 me-1 ">
               <div class="circle done">
                 <span class="label">1</span>
                 <span class="title" style="font-weight:500; color:black;">Basic</span>
               </div>
               <span class="bar"></span>
               <div class="circle done">
                 <span class="label">2</span>
                 <span class="title" style="font-weight:500;">Experience</span>
               </div>
               <span class="bar"></span>
               <div class="circle active">
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

        <div class="container rounded align-items-center ms-5 mt-3 mb-5">
            
            <table class="m-4 table vertical-align: middle table-bordered  col-10 ">
                <?php
                    if(isset($_SESSION['first_name']) && isset($_SESSION['last_name']))
                    {
                        $count=1;
                        $query1="SELECT * FROM `user_school_mapping` WHERE `fname`='$_SESSION[first_name]'AND `lname`='$_SESSION[last_name]'";
                        $result = mysqli_query($conn, $query1);
                        if (mysqli_num_rows($result)>0) 
                        {
                            while ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
                            {
                                $query2="SELECT `name`, `location` FROM `user_education_details` WHERE `school_id`='$rows[school_id]'";
                                $run = mysqli_query($conn, $query2);
                                $row = mysqli_fetch_array($run, MYSQLI_ASSOC);
                                echo"
                                    <tbody>
                                        <tr>
                                            <td class='p-2'>
                                                <p class='fw-bolder text-center pt-1'>$count</p>
                                            </td>
                                            <td class='p-2'>
                                                <p class='fw-bolder fst-italic pt-1'>
                                                $row[name] - 
                                                <span style='font-weight:50;''>$row[location]</span>
                                                </p>
                                                
                                            </td>
                                            ";
                                            ?>
                                            <form method="post">
                                            <td class='pt-2 ps-4 pb-2 pe-3 tableButtons col-1' >
                                                <input type="hidden" name="school_id" value="<?php echo $rows['school_id']?>">
                                                <button class="btn" type="submit" name="delete"><i class='fas fa-lg fa-trash pt-2 ' style='color:brown;'></i></button>
                                            </td>
                                            </form>
                                        </tr>
                                    </tbody>
                <?php
                                $count+=1;
                                
                            }
                        } 
                        else 
                        {
                            echo"
                            <tbody>
                            <tr>
                                <td class='p-2' colspan='4'>
                                    <p class='fw-bolder text-center pt-1'>You haven not added any school yet!\n Add a school to view it here.</p>
                                </td>
                                
                            </tr>
                        </tbody>
                            ";
                        }
                        if(isset($_POST['delete'])){
                            $queryDel1="DELETE FROM `user_education_details` WHERE `school_id`='$_POST[school_id]'";
                            $result1 = mysqli_query($conn, $queryDel1); 
                            if($result1){
                                $queryDel2="DELETE FROM `user_school_mapping` WHERE `school_id`='$_POST[school_id]'";
                                $result2 = mysqli_query($conn, $queryDel2);
                                if($result2){
                                    echo "<script>
                                        window.location.href='educationList.php';
                                        </script>";
                                } 
                            }
                        }
                    }
                    
                ?>
            </table>
            <div class="d-flex p-2 m-4 col-10 justify-content-center addButton "
                onclick="window.location.href='education.php'">
                <i class=" fas fa-plus-circle pt-1 pe-2 "></i> Add Another School
            </div>
            <div class="d-flex m-3 p-3 justify-content-center col-10" >
            <button type="button" class="btn btn-primary ps-4 pr-4 pt-2 pb-2" onclick="window.location.href='skills.php'" >Next : Skills</button>
            </div>
        </div>


    <footer class="footer " id="footer ">
        <div class="container ">
            <div class="row justify-content-center ">
                <div class="col-sm-12 col-md-6 col-lg-3 " style="margin-top:1% ; margin-bottom: 1%; "><a>Copyright<i
                            class="fa fa-copyright " aria-hidden="true "></i>CV</a></div>
                <div class="col-sm-12 col-md-6 col-lg-3 " style="margin-top:1% ; "><a><i class="fa fa-whatsapp "
                            aria-hidden="true "></i>&ensp;+92256314548 <br></a></div>

                <div class="col-sm-12 col-md-6 col-lg-3 " style="margin-top:1% ; "><a><i class="fa fa-envelope-o "
                            aria-hidden="true "></i>&ensp;CV@gmail.com</a></div>
                <br>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js "
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js "
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous ">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js "
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js "
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous ">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js "
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI " crossorigin="anonymous ">
    </script>
    <script src="https://kit.fontawesome.com/7f3390af97.js " crossorigin="anonymous "></script>


</body>


</html>