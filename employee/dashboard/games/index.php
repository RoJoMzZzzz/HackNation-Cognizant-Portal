<?php

include '../../../dbconnect.php';session_start();
$_SESSION["succ"]='';
$_SESSION["fail"]='';
echo$_SESSION["search"] ='';

$loggedin = $_SESSION['userLoggedIn'];

$search = mysqli_query($conn,"SELECT * from employeetb where employee_id = '$loggedin' ");
while($rows = mysqli_fetch_assoc($search)){
  $fname = $rows['fname'];
  $mname = $rows['mname'];
  $lname = $rows['lname'];
  $position = $rows['position'];
  $image = $rows['image'];
  $fullname = $fname." ".$lname;
}

$games = mysqli_query($conn,"SELECT * from games");
$count = $games->num_rows;
while ($rows1 = mysqli_fetch_assoc($games)) {
$question = $rows1['question'];
$answer = $rows1['answer'];
$games_image = $rows1['image'];
$points = $rows1['points'];
}

error_reporting(0);

$counter ;

?>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="mobile-web-app-capable" content="yes">

    <link rel="shortcut icon" type="image/png" href="../../../assets/img/logo-game.png">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Game | Cognizant</title>

    <!-- Bootstrap -->
    <link href="../../../assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../assets/css/animate.css" rel="stylesheet">
    <link href="../../../assets/css/font-awesome.css" rel="stylesheet">

    <style>
        body {
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      text-size-adjust: 100%;
      color: #eee;
      font: normal 100%/1.4 sans-serif;
      background: #cdd6d6;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      background-position: center;
      margin:0;
      padding:0;
    }
    .img-con{
        width:50%;
    }
    .header{
        background:#4b8133;
        font-size: 20px;
        font-weight: bold;
        padding-top:10px;
        padding-bottom: 10px;
    }

    .hidden{
        display:none;
    }

    .title{
        color:#606060;
        padding:20px;
        font-size:15px;
    }

    .input-style{
        margin-top:30px;
        height:45px;
        border-radius:0px;
        background-color: #efefef;
        border-color:#d7d7d7;
        width:80%;
    }

    @media (max-width: 991px) {
        .img-con{
        width:100%;
        margin-top:90px;
    }
    }

    </style>


    

    </head>

    <body>

    <div class="container img-con hidden" id="img">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <img src="../../../assets/img/banner2.png" class="img-responsive">

    </div>

    </div>


    <div class="container-fluid hidden" id="con" style="padding-left:0px;padding-right: 0px">

    <div class="header">

    &nbsp;&nbsp;&nbsp;&nbsp;Clash of Agents

    </div>

    <?php  
        if($position=="Team Leader" || $position=="Manager"){
    ?>
    <div class="title">
    Hello <font color="#457b2c"><b><?php echo $fname." ".$lname ?></b></font>!<br><br>
    Create Question for today!
    </div>

    <div class="container">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        </div>

    </div>
        
    </div>
    <?php
    }
    else if($position=="Agent"){
        if($counter > 0){
            echo '
            <div class="title">
            Hello <font color="#457b2c"><b> '.$fname.' '.$lname.' </b></font>!<br><br>
            </div>

            <center>

            <button type="button"  class="btn btn-success" disabled = "disabled">Question of the Day</button>
            
            </center>
        ';

        }

        else if($counter == 0){
            echo '
            <div class="title">
            Hello <font color="#457b2c"><b> '.$fname.' '.$lname.' </b></font>!<br><br>
            </div>

            <center>

            <a href="#modal" data-toggle="modal" data-target="#myModal" class="btn btn-success">Question of the Day</a>
            
            </center>
        ';
    }
       } 
    ?>



    </div>
    <form method="POST" action="index.php">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel" style="color:#3d7723">Question of the Day</h4>
                  </div>
                  <div class="modal-body" style="color:#464e42;font-size: 18px;">
                    <p><?php echo$question;?></p>


                    <input type="text" class="form-control input-style" id="ans" placeholder="Answer" name="answer" required>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-info" name="sub" value="Submit">
                  </div>
                </div>
              </div>
            </div>  
            </form>

            <?php

            if(isset($_POST['sub'])){
                $counter = 1;
                if($_POST['answer'] == $answer){
                    $store = mysqli_query($conn,"SELECT * from employeetb where employee_id = '$loggedin' ");
                    while ($rows2 = mysqli_fetch_assoc($store)){
                        $count = $rows2['points'];
                    }
                    $point = $points;
                    $result = $count + $point;
                    $update = mysqli_query($conn,"UPDATE employeetb set points = '$result' where employee_id = '$loggedin' ");
                }
                else{
                    $store = mysqli_query($conn,"SELECT * from employeetb where employee_id = '$loggedin' ");
                    while ($rows2 = mysqli_fetch_assoc($store)){
                        $count = $rows2['points'];
                    }
                    $points = 1;
                    $result = $count + $points;
                    $update = mysqli_query($conn,"UPDATE employeetb set points = '$result' where employee_id = '$loggedin' ");
                }



            }

            ?>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../../assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../../../assets/js/jquery.visible.js" charset="utf-8"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#img').fadeIn(800).removeClass('hidden');

        });


    </script>

    <script type="text/javascript">
        $(document).ready(function() {
           window.setTimeout("fadeMyDiv();", 3000); //call fade in 3 seconds
         }
        )

        function fadeMyDiv() {
           $("#img").fadeOut(800);

           
           window.setTimeout("displayCon();", 800); //call fade in 3 seconds
         

           
        }

        function displayCon(){
            $("#con").fadeIn(1000).removeClass('hidden');
        }
    </script>
    
    </body>

    </html>