<?php
include '../../dbconnect.php';session_start();
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

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <meta name="mobile-web-app-capable" content="yes">

    <link rel="shortcut icon" type="image/png" href="../../assets/img/logo.png">

    <title>Employee | Cognizant</title>
  <!-- <link rel="stylesheet" type="text/css" href="user.css" />
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../../assets/dash/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/css/font-awesome.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../assets/dash/bootstrap/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/dash/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../../assets/dash/dist/css/skins/skin-green.min.css">
    <link rel="stylesheet" href="../../assets/dash/style.css">

    <link rel="stylesheet" href="../../assets/css/admin.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


    <style>


    .sidebar-toggle:hover{
      background-color: #518e31;
    }

    .wrapper-header{
      background-color: #fff;
      height:50px;
      text-align: left;
      color:#5d6669;
      font-size: 20px;
      padding-top:10px;
    }
    .bulletin{
      min-height:200px;
      width:100%;
      background-color: #fff;
      margin-top:20px;
      padding-left:0px;
      padding-right: 0px;
    }
    .bulletin-header{
      height:40px;
      width:100%;
      background-color: #3bb4d5;
      color:#fff;
      font-size:18px;
      padding-top: 10px;
    }
    .wr{
      width:100%;
      margin-top:20px;
    }
    .memo-con{
      width:100%;
      height:190px;
      background:#e9e9e9;
      margin-top:15px;
      margin-bottom: 20px;
    }
    .memo-header{
      height:70px;
      width:100%;
      text-align: left;
      padding-top:10px;
    }
    .memo-content{
      text-align: justify;
      text-indent: 15px;
      padding:15px;
      margin-top:20px;
    }
    .width{
      width:70%;
    }
    @media (max-width: 991px) {
      .wrapper{
        padding-top:0px;
        margin-top:0px;
      }
      .content-header{
        padding-top:0px;
        margin-top:0px;
      }

      .cn{
        padding-left:0px;
        padding-right:0px;
      }
      .width{
      width:100%;
    }

    }
    .profilePic{
          background: #11101c;
          
          height:50px;
          width:50px;
          float:left;
          margin-top:10px;
          margin-left: 10px;
}
.wallpost2{
  width:98%;
  min-height:130px;
  margin-top:10px;
  background: #fff;
  
  font-family: Arial;
  transform:traslate3d(0,0,0);
  -webkit-transform:translate3d(0,0,0);

  /*box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2), 0 6px 4px 0 rgba(0, 0, 0, 0.2);*/
  box-shadow:         1px 1px 1px 1px #ccc;

}
.profileContainer{
  width:100%;
  
  height:65px;
}
.post{
  
  
  /*margin-left:10px;*/
  min-height:20px;
  width:95%;
  margin-top:15px;
  font-family: Arial;
  font-size: 15px;


}
.name{
  float:left;
  margin-top: 10px;
  margin-left:10px;
  height:20px;
  width:79%;
  padding:5px;
  font-family: Arial;
  font-size: 15px;
  color:#11101c;
  font-weight: bold;
  padding-bottom:2px;

}
.statusTB{
  width:88%;
}
.timeContainer1{
  float:left;
  font:Arial;
  color:#a6a5a5;
  font-size: 13px;
  margin-left:15px;

}
.custom-file-upload {
    /*border: 1px solid #ccc;*/
    float:left;
    padding: 6px 12px;
    cursor: pointer;
    margin:10px;
    margin-left:30px;
}

input[type="file"] {
    display: none;
      }

      .sbmt-btn{
        float:right;
        margin-right:40px;
      }

      #show-picture{
        width:80%;
      }

      .view{
        display: block;
      }
      .hide{
        display: none;
      }

  </style>

  <body class="skin-green fixed" data-spy="scroll" data-target="#scrollspy">
    
<center>
<div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <!-- Logo -->
        <a href="#" class="logo header-color hidden-xs" style="padding:0px">
          
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg" style="background-color:#518e31"><b>Employee </b>Portal</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation" style="background-color: #62a440;">
          <!-- Sidebar toggle button-->
          <!-- Sidebar toggle button-->


      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <span class="logo-lg hidden-on-lg-sm" style="color:#fff;font-size:22px;margin-top:8px;width:100%;margin-left:0px;"><b>Employee </b>Portal</span>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu hidden-xs">
            <ul class="nav navbar-nav">
              
              <li><a href="../../">Logout</a></li>
              <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu" style="background-color: #518e31">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo"data:image/png;base64,".base64_encode($image); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><b><?php echo$fullname;?></b></span>
            </a>
            
          </li>
            </ul>
          </div>
        </nav>
      </header>
       <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="sidebar" id="scrollspy">
      <!-- Sidebar user panel -->
      <div class="user-panel" align="left">
        <div class="pull-left image">
          <img src="<?php echo"data:image/png;base64,".base64_encode($image); ?>" class="img-circle" alt="User Image"></a>
        </div>
        <div class="pull-left info">
          <p><?php echo$fullname;?></p>
          <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
          <a href="#"><?php echo$position;?></a>
        </div>
      </div>
      
      <!-- search form -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" align="left">
        <li class="header">MAIN NAVIGATION</li>

        

        <li class="treeview active">
          <a href="#">
            <i class="glyphicon glyphicon-list-alt"></i> <span>Announcements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
              
              
                <li class="index.php"><a href="index"><i class="fa fa-circle-o"></i> Bulletin</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Schedule</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> New Hires</a></li>
                 <li><a href="timeline.php"><i class="fa fa-circle-o"></i> Timeline</a></li>
              
          
            

          </ul>
       
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-group "></i> <span>Ranking</span>
            
          </a>
          
        </li>
        <li class="treeview">
          <a href="games/">
            <i class="fa fa-puzzle-piece"></i> <span>Icebreaker/Games</span>
             <span class="pull-right-container">
              <span class="label label-warning pull-right"><?php echo($count);?></span>
            </span>
            
          </a>
          
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-trophy"></i> <span>Rewards</span>
            
          </a>
          
        </li>

        <li class="treeview">
          <a href="reservations">
            <i class="glyphicon glyphicon-envelope"></i> <span>Chat</span>
            <span class="pull-right-container">
              <span class="label label-warning pull-right">4</span>
            </span>
            
          </a>
          
        </li>



        <li class="header">MORE</li>

        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-cog"></i> <span>Account</span>
            
          </a>
          
        </li>

        <li class="treeview hidden-on-lg-sm">
          <a href="../../index">
            <i class=" glyphicon glyphicon-log-out"></i> <span>Logout</span>
            
          </a>
          
        </li>
        
      </ul>
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper cn"  style="padding-top:50px">


<section class="content-header" style="background:#fff;height:50px;text-align:left;border-bottom:2px solid #e7e7e7;font-size:17px;">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Cognizant</b> | Portal
</section>

<div class="wr">


<div class="container cn width">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bulletin"> 


    <div class="bulletin-header">
      Timeline
    </div>


      <div class="tab-content">

        <form method="POST" enctype="multipart/form-data">
                    <br>
                    <textarea name="teka" class="statusTB" rows="4" cols="100" placeholder="Write a Post"></textarea>
                      <input type='hidden' id='date' name='date'>
                       <div class="line"></div>
                <label class="custom-file-upload">
                <input type="file" name="uploadfile" id="take-picture" accept="image/*"/>
                <i class="fa fa-cloud-upload"></i> Choose Image
                </label>
                <img src="" alt="" id="show-picture" width="95%">
                    
                   <!-- <input type="button" value="Post" class="btn btn-primary" id="postBtn" onClick="get()" style="width: 90px">-->
                     <input type="submit" value="Post" class="btn btn-primary sbmt-btn" id="postSubmit" name="submit" onClick="get()" style="width: 90px;">
 </form>

     <?php

                    if(isset($_POST['submit'])){
                       // $un1 = $loggedin;
                        $un1 = $_SESSION['userLoggedIn'];
                        $user = mysql_real_escape_string($un1);
                        $post2 = mysql_real_escape_string($_POST['teka']);
                        $date = mysql_real_escape_string($_POST['date']);
                        $type= "event";
                        $college = "general";
                        $imageData = addslashes(file_get_contents($_FILES['uploadfile']['tmp_name']));
                        $imageName = mysql_real_escape_string($_FILES["uploadfile"]["name"]);
                      // $imageData = mysql_real_escape_string(file_get_contents($_FILES["uploadfile"]["tmp_name"]));

                        $sql2=mysqli_query($conn,"INSERT into post VALUES ('','$un1','$date','$imageData','$post2')");
                      
                    }

                ?>

                <!--<script src="../../assets/js/base.js"></script>-->
            
            

            <script type="text/javascript">
                $('#head1').on( 'change keyup keydown paste cut', 'textarea', function (){
                $(this).height(0).height(this.scrollHeight);
                }).find( 'textarea' ).change();
            </script>
                

                <script src="../../jquery/jqueryAjax.js"></script>
                <!--<script src="jquery/jquery.js"></script>-->

                <script type="text/javascript">
                    $(function(){
                        $("input:file").change(function (){
                            document.getElementById('show-picture').style.display="block";
                            document.getElementById('postSubmit').style.display="block";
                            document.getElementById('postBtn').style.display="none";
                        });
                    });
                </script>
                
                <script type="text/javascript">

                function get(){





                    

                    var name= $("#name").val();
                    
                    var date = $("#date").val();

                    var college ="general";

                    var input = $("#pst").val();

                    var username = $("#uname").val();

                    if(input != ""){
                    $.post('', {wallPost:input, date:date,college:college}, function(output){
                    
                    $("#wallpost").prepend("")});
                    }
                    


                    document.getElementById("pst").value = "";


                    
                    document.getElementById("show-picture").value = "";

                    




                }
                
                

                    

                    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                    var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

                    var d = new Date();
                     var day = days[d.getDay()];
                    var hr = d.getHours();
                    var ampm = hr >= 12 ? 'pm' : 'am';
                    hr = hr % 12;
                    hr = hr ? hr : 12; // the hour '0' should be '12'
                    var min = d.getMinutes();
                    if (min < 10) {
                        min = "0" + min;
                    }
                    
                    var date = d.getDate();
                    var month = months[d.getMonth()];
                    var year = d.getFullYear();
                    var x = document.getElementById("date");
                    //x.innerHTML = day + " " + hr + ":" + min + ampm + " " + date + " " + month + " " + year;

                    x.value = month+" "+date+", "+year+" at "+hr+":"+min + ampm;


                    
                    

                </script>

            </div>
            
            <script type="text/javascript">
            var auto_refresh = setInterval(
                    function ()
                    {
                    $('#wallpost').load('loadPost2.php');
                    }, 500);

            </script>

            <br><br><br>

            <div id="wallpost" class="wallpost">

                <?php

            
            $un = $_SESSION["userLoggedIn"];



                 $sql = 'SELECT * FROM post order by id desc';
                 $result = $conn->query($sql);
                 
                    if ($result->num_rows > 0) {
                    // output data of each row
   
                    while($row = $result->fetch_assoc()) {
                        $post = $row['post'];

                        $userName = $row['employee_id'];
                        $date = $row['dateAndTime'];
                        $postId = $row['id'];

                        $sql1 = 'SELECT * FROM employeetb where employee_id ="'.$userName.'"';
                        $result1 = $conn->query($sql1);
                        
                        if ($result1->num_rows > 0) {
                        // output data of each row
   
                        while($row = $result1->fetch_assoc()) {

                        $fname = $row['fname'];
                        $lname = $row['lname'];
                        $profile= $row['image'];
                        $fullname = $fname." ".$lname;
                    }
                    
                    }
                    
                        echo "<div class='wallpost2' id='wp2'>";
                        echo "<div class='profileContainer'>";
                        echo "<div class='profilePic'><img src="."data:image/png;base64,".base64_encode($profile)." width='50px' height = '50px'></div>";
                        echo "<div id='nameA' class='name' align='left'>$fullname</div>";
                        echo "<div class='timeContainer1' align='left'>$date</div>";
                        echo "</div>";
                        
                        echo "<div class='post' align='left'>$post</div>";
                         echo "</div>";
                        }
   
                     } 
                    else {
                        echo("WALA");
    
                    }

   

                    
                

            ?>

</div>

</div>



</div>

</div>
</div>


</center>

    <!-- jQuery 2.2.3 -->
    <script src="../../assets/dash/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="../../assets/dash/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../assets/dash/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../assets/dash/dist/js/app.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="../../assets/dash/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>



    <script type="text/javascript">
      
      (function () {
    var takePicture = document.querySelector("#take-picture"),
        showPicture = document.querySelector("#show-picture");

    if (takePicture && showPicture) {
        // Set events

        takePicture.onchange = function (event) {
            // Get a reference to the taken picture or chosen file
            //showPicture.style.display = "block";

            //showPicture.addClass('view');
            //showPicture.removeClass("hide");

            var files = event.target.files,
                file;
            if (files && files.length > 0) {
                file = files[0];
                try {
                    // Get window.URL object
                    var URL = window.URL || window.webkitURL;

                    // Create ObjectURL
                    var imgURL = URL.createObjectURL(file);

                    // Set img src to ObjectURL
                    showPicture.src = imgURL;

                    // Revoke ObjectURL after imagehas loaded
                    showPicture.onload = function() {
                        URL.revokeObjectURL(imgURL);  
                    };
                }
                catch (e) {
                    try {
                        // Fallback if createObjectURL is not supported
                        var fileReader = new FileReader();
                        fileReader.onload = function (event) {
                            showPicture.src = event.target.result;
                        };
                        fileReader.readAsDataURL(file);
                    }
                    catch (e) {
                        // Display error message
                        var error = document.querySelector("#error");
                        if (error) {
                            error.innerHTML = "Neither createObjectURL or FileReader are supported";
                        }
                    }
                }
            }
        };
    }
})();

    </script>

  </body>
</html>
