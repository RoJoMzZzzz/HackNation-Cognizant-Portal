<?php

include 'dbconnect.php';session_start();
$_SESSION["succ"]='';
$_SESSION["fail"]='';
echo$_SESSION["search"] ='';

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

    <link rel="shortcut icon" type="image/png" href="assets/img/logo.png">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login | Cognizant</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">

    

    </head>
    <!-- Main Styling-->
    <style>

    body {
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      text-size-adjust: 100%;
      color: #37302a;
      font: normal 100%/1.4 sans-serif;
      background: url(assets/img/bg.png);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      background-position: center;
      margin:0;
      padding:0;
    }

    @font-face {
      font-family: first_font;
      src: url("../fonts/Ubuntu-R.ttf");

      font-weight: normal;
      font-style: normal;
    }

    @font-face {
      font-family: second_font;
      src: url("../fonts/Merriweather-Regular.ttf");

      font-weight: normal;
      font-style: normal;
    }

    .log-in-form{
        min-height:80px;
        background-color:#fff;
        border-top: 4px solid #4b8133;
        padding-left:0px;
        padding-right:0px;


    }

    .input-style{
        margin-top:30px;
        height:45px;
        border-radius:0px;
        background-color: #efefef;
        border-color:#d7d7d7;
        width:80%;
    }

    .submit-btn-style{
        font-family:second_font;
        margin-top: 20px;
        margin-bottom:5px;
        width:80%;
        height:45px;
    }

    .form-header{
        height:70px;
        background-color:#4b8133;
        color:#fff;
        font-size: 20px;
        

    }

    .form-title{
        text-align: left;
        width:85%;
    }

    .employee-icon{
        width:40%;
        margin-bottom:10px;
        margin-top:5px;
    }

    .banner{
        width:60%;
        display:block;
    }
    .logo-icon{
        display:none;
    }

    @media (max-width: 991px) {
      .banner{
      display:none;
    }

    .form-header{
        display:none;
    }
    .logo-icon{
        display:block;
    }
    .employee-icon{
        display:none;
    }

    }

    

    </style>


    <body>

    <center>

    <div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs">

    <br><br>

    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 animate fadeInLeft">

    <div class="banner">

    <img src="assets/img/banner.png" class="img-responsive">
    
    </div>

    </div>

    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 log-in-form ">

    <div class="form-header">
    <br>
    <div class="form-title"><b>Employee</b> Log-In</div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px">

                <img src="assets/img/employee_icon.png" class="employee-icon">

                <img src="assets/img/logo.png" class="logo-icon">

                </div>

    <form method="POST">
    <br><br>

        <input type="text" class="form-control input-style" id="id" placeholder="Employee ID" name="emp_id" required>

        <input type="password" class="form-control input-style" id="id" placeholder="Password" name="pass" required>


        <input type="submit" class="btn btn-success submit-btn-style" style="border-radius:0px" name="submit" value="LOG-IN">



    </form>

    

    <a class="btn btn-link" data-toggle="modal" data-target="#signUp">Sign Up for Account</a>
    <br><br>
    </div>

    </div>
    </div>

    <!--MODAL-->
    <form method="POST" >
             <div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">SIGN UP</h4>
                  </div>
                  <div class="modal-body">
                     <div class="form-horizontal form-label-left input_mask">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="fname" placeholder="First Name">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess3"  name="lname" placeholder="Last Name">
                        <span class="fa fa-user form-control-feedback right" aria-hidden="true" placeholder="Last Name"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4"  name="email" placeholder="Email">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" id="inputSuccess5"  name="phone" placeholder="Phone">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess4"  name ="address" placeholder="Address">
                        <span class="fa fa-map-marker form-control-feedback left" aria-hidden="true"></span>
                      </div>
                       <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="date" class="form-control" id="inputSuccess5"  name="bdate">
                        <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                      </div>

                     
                      
                      
                      
                      </div>
                   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="login" value="Submit">
                  </div>
                </div>
              </div>
            </div> 
             </form> 

    <?php

if(isset($_POST['submit'])){
	
    //search inputted employee id from database
	$sql = mysqli_query($conn,"SELECT * from employeetb where employee_id = '".$_POST['emp_id']."' and password =  '".$_POST['pass']."' ");

		$_SESSION['userLoggedIn'] = $_POST['emp_id'];
	if($sql->num_rows>0){
        //log in success
         header('location:employee/dashboard/');
		echo'	
		<script type="text/javascript">
		confirm("WELCOME! ");
		</script>	
						';
	}else if ($_POST['emp_id'] == "admin" && $_POST['pass'] == "admin123") {
		header('location:employee#');
	}{
        //display invalid id and password if the inputted data are not in the database
		echo'	
			<script type="text/javascript">
			confirm("INVALID USERNAME OR PASSWORD!");
			</script>	
							';
						}
}


    ?>

    </center>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
    </body>

    </html>