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
                <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Bulletin</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Schedule</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> New Hires</a></li>
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
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">

              <img class="profile-user-img img-responsive img-circle" src="<?php echo"data:image/png;base64,".base64_encode($image); ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo$fullname;?></h3>

              <p class="text-muted text-center"><?php echo$position;?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
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

              <a href="#" class="btn btn-primary btn-block"><i class="fa fa-pencil"></i><b> Edit Account</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Sent you a message - 3 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>

                  <form class="form-horizontal">
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-9">
                        <input class="form-control input-sm" placeholder="Response">
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Posted 5 photos - 5 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="../../dist/img/photo2.png" alt="Photo">
                          <br>
                          <img class="img-responsive" src="../../dist/img/photo3.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-responsive" src="../../dist/img/photo4.jpg" alt="Photo">
                          <br>
                          <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>


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
