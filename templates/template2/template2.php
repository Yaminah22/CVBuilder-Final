<?php
include_once 'config.php';
session_start();
$firstname=$_SESSION['first_name'];
$lastname=$_SESSION['last_name'];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <link rel="stylesheet" href="template2.css">
    <link rel="shortcut icon" href="../../images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/bootstrap-4.6.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <script type="text/javascript" src="pdf.js"></script>
    <title>CV Builder</title>
</head>
<?php
     $sql=mysqli_query($conn,"SELECT * FROM basic WHERE first_name='$firstname' AND last_name='$lastname'");
     $data = mysqli_fetch_array($sql);
?>

<body style="--profile-theme: <?php echo($_SESSION['color'])?>;">
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
        <div >
          <div class="wrapper" id="ad">
            <div class="intro">
              <div class="profile">
                <div class="photo">
                    <img src="../../images/<?php echo $data["picture"]; ?>" alt="">
                 </div>
                <div class="bio">
                  <h1 class="name"><?php echo($data['first_name']);
                  echo(" ");
                  echo($data['last_name']);?></h1>
                  <p class="profession"><?php echo($data['profession']);?></p>
                </div>
              </div>
              <div class="intro-section about">
                <h1 class="title">Objective</h1>
                <p class="paragraph">
                  <?php
                     $sql2=mysqli_query($conn,"SELECT * FROM summary WHERE first_name='$firstname' AND last_name='$lastname'");
                     $data2 = mysqli_fetch_array($sql2);
                      $summary=trim($data2['summary']);
                                    echo($summary);?>
                </p>
              </div>
              <div class="intro-section contact">
                <h1 class="title">Contact</h1>
                <div class="info-section">
                  <i class="fas fa-phone"></i>
                  <span><?php echo("+92");
                            echo($data['contact']);?></span>
                </div>
                <div class="info-section">
                  <i class="fas fa-map-marker-alt"></i>
                  <span><?php echo($data['city']);
                            echo(" , ");
                            echo($data['country']);?></span>
                </div>
                <div class="info-section">
                  <i class="fas fa-paper-plane"></i>
                  <span><?php echo($data['email']); ?></span>
                </div>
              </div>
              <div class="intro-section follow">
                <h1 class="title">Social</h1>
                <div class="info-section link">
                  <i class="fab fa-github"></i>
                    <span><?php echo($data['github']); ?></span>
                  </a>
                </div>
                <div class="info-section link">
                  <i class="fab fa-linkedin"></i>
                    <span>  <?php echo($data['linkedin']); ?></span>
                  </a>
                </div>
              </div>
            </div>
            <div class="detail">
              <?php
                   $query1="SELECT * FROM user_school_mapping WHERE fname='$firstname' AND lname='$lastname'";
                   $result3 = mysqli_query($conn, $query1);
                   if (mysqli_num_rows($result3)>0)
                   {?>
              <div class="detail-section edu">
                <div class="detail-title">
                  <div class="title-icon">
                    <i class="fas fa-user-graduate"></i>
                  </div>
                  <span>Education</span>
                </div>
                <div class="detail-content">
                  <?php
                                    while ($rows = mysqli_fetch_array($result3, MYSQLI_ASSOC))
                                    {$query2="SELECT * FROM `user_education_details` WHERE `school_id`='$rows[school_id]'";
                                        $run = mysqli_query($conn, $query2);
                                        $row = mysqli_fetch_array($run, MYSQLI_ASSOC);?>
                  <div class="timeline-block">
                    <h6><?php echo($row['name']);?><span>&nbsp(<?php $start=$row['start'];
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
                                      ?>)</span></h6>
                              <i><?php echo($row['degree']);?>- <?php echo($row['field']);?><br></i>
                              <i><?php echo($row['location']);?></i>
                  </div>
                  <?php }} ?>
                </div>
              </div>
              <?php
                   $query1="SELECT * FROM user_work_mapping WHERE fname='$firstname' AND lname='$lastname'";
                   $result3 = mysqli_query($conn, $query1);
                   if (mysqli_num_rows($result3)>0)
                   {?>
              <div class="detail-section pg-skill">
                <div class="detail-title">
                  <div class="title-icon">
                    <i class="fas fa-trophy-alt"></i>
                  </div>
                  <span>Experience</span>
                </div>
                <div class="detail-content">
                  <?php
                                    while ($rows = mysqli_fetch_array($result3, MYSQLI_ASSOC))
                                    {$query2="SELECT * FROM `user_work_details` WHERE `work_id`='$rows[work_id]'";
                                        $run = mysqli_query($conn, $query2);
                                        $row = mysqli_fetch_array($run, MYSQLI_ASSOC);?>
                  <div class="timeline-block">
                    <h6><?php echo($row['title']);?><span>&nbsp(<?php $start=$row['start'];
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
                                      ?>)</span></h6>
                              <i><?php echo($row['employer']);?>- <?php echo($row['city']);?></i>
                  </div>
                  <?php }} ?>
                </div>
              </div>
              <div class="detail-section pg-skill">
                <div class="detail-title">
                  <div class="title-icon">
                    <i class="fas fa-laptop-code"></i>
                  </div>
                  <span>Skills</span>
                </div>
                <div class="detail-content">
                  <ul class="pg-list">
                    <?php
                          $data3 = mysqli_query($conn, "SELECT * FROM skills WHERE first_name='$firstname' AND last_name='$lastname'");
                            foreach ($data3 as $result) {?>
                    <li>
                      <span><?php echo($result['skill_name']);?></span>
                      <div class="sb-skeleton">
                        <div class="skillbar" style="--pgbar-length: <?php echo($result['skill_level']);?>%"></div>
                      </div>
                    </li>
                  <?php }?>
                  </ul>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js"></script>
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
  <script src="pdf.js"></script>
</body>
</html>
