<?php
include_once 'config.php';
session_start();
$firstname=$_SESSION['first_name'];
$lastname=$_SESSION['last_name'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> CV Builder</title>
    <link rel="shortcut icon" href="../../images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styletemplate.css" />
    <link rel="stylesheet" type="text/css" href="../style.css" />

  
</head>
<?php
     $sql=mysqli_query($conn,"SELECT * FROM basic WHERE first_name='$firstname' AND last_name='$lastname'");
     $data = mysqli_fetch_array($sql);
     $sql2=mysqli_query($conn,"SELECT * FROM summary WHERE first_name='$firstname' AND last_name='$lastname'");
     $data2 = mysqli_fetch_array($sql2);
     
?>

<body>
<nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#"><img class="image" src="../../images/logo_transparent.png" alt="logo"></a>
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
                        <a class="nav-link" href="../../index.html">Home
            </span></a>
            </li>
            </ul>
            </span>
        </div>
    </nav>
    <div class="col-md-12 text-center">
            <button type="button" class="btn btn-primary" id="pdf" >Your CV is now downloading as PDF</button>
        </div>
    <div class="container-fluid overcover" >
        <div class="container profile-box"id="pdfdownloaddiv">
            <div class="row">
                <div class="col-md-4 left-co">
                    <div class="left-side" style="background-color:<?php echo($_SESSION['color']);?>">
                        <div class="profile-info">
                            <img src="../../images/<?php echo $data["picture"]; ?>" alt="">
                            <h3><?php echo($data['first_name']);
                            echo(" ");
                            echo($data['last_name']);?></h3>
                            <span><?php echo($data['profession']);?>
                            </span>
                        </div>
                        <h4 class="ltitle">Contact</h4>
                        <div class="contact-box pb0">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="detail">
                            <?php 
                            echo($data['contact']);?> <br>
                            </div>
                        </div>
                        <div class="contact-box pb0">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="detail details">
                            <?php echo($data['city']);
                            echo(" , ");
                            echo($data['country']);?>
                            </div>
                        </div>
                        <div class="contact-box pb0">
                            <div class="icon a">
                                <i class="far fa-file-archive"></i>
                            </div>
                            <div class="detail">
                            <?php echo($data['zip']); ?><br>
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="detail details">
                            <?php echo($data['email']); ?><br>
                            </div>
                        </div>
                        
                        <h4 class="ltitle">Social</h4>
                        <ul class="column social-link no-margin">
                        <div class="contact-box">
                            <div class="ico">
                            <i class="fab fa-linkedin-in fonts"></i>
                            </div>
                            <div class="detail details" >
                            <?php echo($data['linkedin']); ?><br>
                            </div>
                        </div>
                        <div class="contact-box">
                            <div class="ico">
                            <i class="fab fa-github fonts"></i>
                            </div>
                            <div class="detail details">
                            <?php echo($data['github']); ?><br>
                            </div>
                        </div>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 rt-div">
                    <div class="rit-cover">
                        <div class="hotkey">
                            <h1 class=""><?php echo($data['first_name']);
                            echo(" ");
                            echo($data['last_name']);?> </h1>
                            <small><?php echo($data['profession']);?></small>
                        </div>
                        <h2 class="rit-titl"><i class="far fa-user"></i> Summary</h2>
                        <div class="about">
                            <p><?php $summary=trim($data2['summary']);
                            echo($summary);?></p>
                        </div>
                        <?php 
                        $query1="SELECT * FROM user_work_mapping WHERE fname='$firstname' AND lname='$lastname'";
                        $result3 = mysqli_query($conn, $query1);
                        if (mysqli_num_rows($result3)>0)
                        {?>
                        <h2 class="rit-titl"><i class="fas fa-briefcase"></i> Work Experience</h2>
                        <?php 
                            while ($rows = mysqli_fetch_array($result3, MYSQLI_ASSOC)) 
                            {$query2="SELECT * FROM `user_work_details` WHERE `work_id`='$rows[work_id]'";
                                $run = mysqli_query($conn, $query2);
                                $row = mysqli_fetch_array($run, MYSQLI_ASSOC);?>
                            <div class="work-exp">
                            <h6><?php echo($row['title'])?> <span><?php $start=$row['start'];
                                                                        $startdate = explode("-", $start);
                                                                        echo($startdate[0]);
                                                                        echo(" - ");
                                                                        if($row['current']==1){
                                                                            echo("Present");
                                                                        }
                                                                        else{
                                                                        $end=$row['end'];
                                                                        $enddate = explode("-", $end);
                                                                        echo($enddate[0]);
                                                                        }
                                                                        ?></span></h6>

                            <i><?php echo($row['employer']) ?> / <?php echo($row['city']);?></i>
                        </div>
                        <?php }} 
                        $query2="SELECT * FROM user_school_mapping WHERE fname='$firstname' AND lname='$lastname'";
                        $result4 = mysqli_query($conn, $query2);
                        if (mysqli_num_rows($result4)>0)
                        {?>
                      
                        <h2 class="rit-titl"><i class="fas fa-graduation-cap"></i> Education</h2>
                        
                        <div class="education">
                            <ul class="row no-margin">
                            <?php 
                            while ($rows2 = mysqli_fetch_array($result4, MYSQLI_ASSOC)) 
                            {$query2="SELECT * FROM `user_education_details` WHERE `school_id`='$rows2[school_id]'";
                                $run = mysqli_query($conn, $query2);
                                $row2 = mysqli_fetch_array($run, MYSQLI_ASSOC);?>
                                <li class="col-md-6"><span><?php $start=$row2['start'];
                                                                        $startdate = explode("-", $start);
                                                                        echo($startdate[0]);
                                                                        echo(" - ");
                                                                        if($row2['current']==1){
                                                                            echo("Present");
                                                                        }
                                                                        else{
                                                                        $end=$row['end'];
                                                                        $enddate = explode("-", $end);
                                                                        echo($enddate[0]);
                                                                        }
                                                                        ?></span> <br>
                                    <?php echo($row2['degree']);
                                            if ($row2['field']!=""){
                                                echo(" in ");
                                                echo($row2['field']);
                                            } ?> <br>
                                     <span><?php echo($row2['name']);
                                                echo(" - ");
                                                echo($row2['location']);?></span>       
                                </li>
                                    <?php } ?>
                            </ul>
                        </div>
                        <?php } 

                        $data3 = mysqli_query($conn, "SELECT * FROM skills WHERE first_name='$firstname' AND last_name='$lastname'");
                        if (mysqli_num_rows($data3)>0){?>
                            <h2 class="rit-titl"><i class="fas fa-users-cog"></i> Skills</h2>
                        <div class="profess-cover row no-margin">
                        <?php foreach ($data3 as $result) {
                           
                        ?>
                        
                            <div class="col-md-6">
                                <div class=" prog-row row">
                                    <div class="col-sm-6">
                                        <?php echo($result['skill_name']);?>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="progress" >
                                            
                                            <div  class="progress-bar" role="progressbar"  aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" 
                                            style="width:<?php echo($result['skill_level']); echo("%");?>;
                                            background-color:<?php echo($_SESSION['color']);?>"; ></div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                       <?php }}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    
      
</body>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script src="../pdf.js"></script>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

</html>