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
  $email = $rows['email_address'];
  $address = $rows['address'];
  $contact = $rows['contact'];
  $bday = $rows['birthday'];
  $fullname = $fname." ".$lname;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
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
      height:80px;
      width:85%;
      background-color: #fff;
      margin-top:20px;
    }
    .bulletin-header{
      height:40px;
      width:100%;
      background-color: #3bb4d5;
      color:#fff;
      font-size:18px;
      padding-top: 10px;
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

        

        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>News</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li >
              <a href="#"><i class="fa fa-circle-o"></i> Announcements
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li ><a href="index.php"><i class="fa fa-circle-o"></i> Bulletin</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Schedule</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> New Hires</a></li>
                 <li><a href="timeline.php"><i class="fa fa-circle-o"></i> Timeline</a></li>
              
              </ul>
            </li>
            
          </ul>
        </li>

        <li class="treeview">
          <a href="members">
            <i class="fa fa-group "></i> <span>Ranking</span>
            
          </a>
          
        </li>
        <li class="treeview">
          <a href="employees">
            <i class="fa fa-hand-scissors-o"></i> <span>Icebreaker/Games</span>
            
          </a>
          
        </li>

        <li class="treeview">
          <a href="facilities">
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

        <li class="treeview active">
          <a href="settings">
            <i class="glyphicon glyphicon-cog"></i> <span>Account</span>
            
          </a>
          
        </li>

        <li class="treeview hidden-on-lg-sm">
          <a href="#">
            <i class=" glyphicon glyphicon-log-out"></i> <span>Logout</span>
            
          </a>
          
        </li>
        
      </ul>
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="padding-top:50px">


<section class="content-header" style="background:#fff;height:50px;text-align:left;border-bottom:2px solid #e7e7e7;font-size:17px;">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><i class="glyphicon glyphicon-cog"></i>Account Settings</b> 
</section>

<!-- Main Content -->
<section class="content">

      <div class="row">
        <div class="col-md-12">

          <!-- Profile Image -->
          <div class="box box-primary">
          

              <img class="profile-user-img img-responsive img-circle" src="<?php echo"data:image/png;base64,".base64_encode($image); ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo$fullname;?></h3>

              <p class="text-muted text-center"><?php echo$position;?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <strong><i class="fa fa-phone margin-r-5"></i> Contact Number</strong>

              <p class="text-muted">
                <?php echo$contact; ?>
              </p>

                </li>
                <li class="list-group-item">
                  <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted"><?php echo$address;?></p>
                </li>
                <li class="list-group-item">
                   <strong><i class="fa fa-send margin-r-5"></i> Email</strong>

              <p class="text-muted"><?php echo$email;?></p>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block " data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil" ></i><b> Edit Account</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          
       
        <!-- /.col -->
       
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- Modal -->
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Change Display Photo</h4>
                  </div>
                  <div class="modal-body">
                    <img src="<?php echo"data:image/png;base64,".base64_encode($image); ?>" width="90%">
                    <input type="file" name="changeDp" required>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="change" value="Save changes">
                  </div>
                </div>
              </div>
            </div>  

<div style="width:95%;margin-top:20px;">


<div class="container" style="width:95%">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                  
                
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
