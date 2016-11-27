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
$memo = mysqli_query($conn,"SELECT * from memo ");

while($rows2 = mysqli_fetch_assoc($memo)){
  $title = $rows2['title'];
  $from = $rows2['from'];
  $to = $rows2['to'];
  $content = $rows2['content'];
  $date = $rows2['date'];

}

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

    
  </head>

<!-- Main Styling-->
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

    }
  </style>
<!-- Main Content -->
  <body class="skin-green fixed" data-spy="scroll" data-target="#scrollspy">
    
<center>
<div class="wrapper">

      <header class="main-header">
        
        <a href="#" class="logo header-color hidden-xs" style="padding:0px">
          
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg" style="background-color:#518e31"><b>Employee </b>Portal</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation" style="background-color: #62a440;">

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
        <li class="active"><a href="index"><i class="fa fa-circle-o"></i> Bulletin</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Schedule</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> New Hires</a></li>
                 <li><a href="timeline"><i class="fa fa-circle-o"></i> Timeline</a></li>
          </ul> 

        <li class="treeview">
          <a href="members">
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
          <a href="account_settings.php">
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


<div class="container cn" style="width:100%">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bulletin"> 


    <div class="bulletin-header">
      Bulletin
    </div>

    <ul class="nav nav-tabs" style="color:#057340">
        <li class="active" style="color:#057340">
            <a  href="#1" data-toggle="tab">Memos</a>
        </li>
        <li style="color:#057340">
            <a href="#2" data-toggle="tab">Events</a>
        </li>
        <li style="color:#057340">
            <a href="#3" data-toggle="tab">Figures</a>
        </li>
      </ul>

      <div class="tab-content">

      <div class="tab-pane active" id="1">


      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="memo-con">

        <div class="memo-header">
          
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

          <img src="../../assets/img/ex.png" class="img-responsive">

          </div>

          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">

          <b><div style="padding-top:15px"><?php echo" MEMO "; ?></div></b>

          
            <?php echo"Title : ". $title;
                  echo"<br><br>";
                  echo"From : ".$from;
                  echo"<br><br>";
                  echo"To : ".$content;

              ?>
          

        

          </div>

        </div>

        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="memo-con">

        <div class="memo-header">
          
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

          <img src="../../assets/img/ex.png" class="img-responsive">

          </div>

          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">

          <b><div style="padding-top:15px">Employee Name</div></b>


          </div>

        </div>

        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="memo-con">

        <div class="memo-header">
          
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

          <img src="../../assets/img/ex.png" class="img-responsive">

          </div>

          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">

          <b><div style="padding-top:15px">Employee Name</div></b>

          </div>

          

        </div>

        <div class="memo-content">
            
          

          </div>

        </div>
      </div>


      </div>

      <div class="tab-pane" id="2">

      </div>

      <div class="tab-pane" id="3">

      </div>

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

  </body>
</html>
