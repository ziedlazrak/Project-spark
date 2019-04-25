<?php
// Initialize the session
include "../core/usersC.php";
$bdd = new PDO('mysql:host=localhost;dbname=try', 'root', '');

 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../views/login.php");
    exit;   
}

      setcookie ("currentusername",$_SESSION["nom"],time()+ (10 * 365 * 24 * 60 * 60));

      $users2=new usersC();
     $name1=$users2->select1();
     $name2=$users2->select2();
     $name3=$users2->select3();
     $name4=$users2->select4();

     $act1=$users2->selectact1();
     $act2=$users2->selectact2();
     $act3=$users2->selectact3();
     $act4=$users2->selectact4();

     $date1=$users2->selectdate1();
     $date2=$users2->selectdate2();
     $date3=$users2->selectdate3();
     $date4=$users2->selectdate4();

     foreach ($name1 as $row) {
      $username=$row["username"];
     }

     foreach ($name2 as $row) {
      $username2=$row["username"];
     }

     foreach ($name3 as $row) {
      $username3=$row["username"];
     }

     foreach ($name4 as $row) {
      $username4=$row["username"];
     }


     foreach ($act1 as $row) {
      $act11=$row["activity"];
     }

     foreach ($act2 as $row) {
      $act12=$row["activity"];
     }

     foreach ($act3 as $row) {
      $act13=$row["activity"];
     }

     foreach ($act4 as $row) {
      $act14=$row["activity"];
     }


     foreach ($date1 as $row) {
      $date11=$row["created_at"];
     }

     foreach ($date2 as $row) {
      $date12=$row["created_at"];
     }

     foreach ($date3 as $row) {
      $date13=$row["created_at"];
     }

     foreach ($date4 as $row) {
      $date14=$row["created_at"];
     }


     $stat1=$users2->selectstat1();
     $stat2=$users2->selectstat2();
     $stat3=$users2->selectstat3();
     $stat4=$users2->selectstat4();
     $stat5=$users2->selectstat5();
     $stat6=$users2->selectstat6();
     $stat7=$users2->selectstat7();
     $stat8=$users2->selectstat8();
     $stat9=$users2->selectstat9();
     $stat10=$users2->selectstat10();
     $stat11=$users2->selectstat11();

     foreach ($stat1 as $row) {
      $statt1=$row["STUFF"];
     }
     foreach ($stat2 as $row) {
      $statt2=$row["STUFF"];
     }
     foreach ($stat3 as $row) {
      $statt3=$row["STUFF"];
     }
     foreach ($stat4 as $row) {
      $statt4=$row["STUFF"];
     }
     foreach ($stat5 as $row) {
      $statt5=$row["STUFF"];
     }
     foreach ($stat6 as $row) {
      $statt6=$row["STUFF"];
     }
     foreach ($stat7 as $row) {
      $statt7=$row["STUFF"];
     }
     foreach ($stat8 as $row) {
      $statt8=$row["STUFF"];
     }
     foreach ($stat9 as $row) {
      $statt9=$row["STUFF"];
     }
     foreach ($stat10 as $row) {
      $statt10=$row["STUFF"];
     }
     foreach ($stat11 as $row) {
      $statt11=$row["STUFF"];
     }

     $me=$_SESSION["id"];
     $numnot=$users2->numbernotif($me);

    foreach ($numnot as $row) {
      $numbernotif=$row["NUM"];
     }     














?>

<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>ADM<span>IN</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme"><?php echo $numbernotif ?></span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have <?php echo $numbernotif ?> new messages</p>
              </li>
              <li>

                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="../views/logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><img src="<?php echo '../views/images/' . $_SESSION["picture"] ?>" width="80" height="80" alt="" class="img-circle"></a></p>
          <h5 class="centered"><b><?php echo ($_SESSION["nom"]); ?></b></h5>
          <h4><b><?php echo htmlspecialchars($_SESSION["email"]); ?></b></h4>
          <li class="mt">
            <a class="active" href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Accueil</span>
              </a>
          </li>




          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Evenements</span>
              </a>
            <ul class="sub">
              <li><a href="evenement.html">Competitions</a></li>
              <li><a href="sorties.html">Sorties</a></li>
              <li><a href="promo.html">Promotions</a></li>
            </ul>
          </li>
                  <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span> Parametre</span>
              </a>
            <ul class="sub">
              <li><a href="reset-password.php">Changer votre mot de passe</a></li>
            </ul>
          </li>


          <li class="sub-menu">
            <a href="abonnement.html">
              <i class="fa fa-desktop"></i>
              <span>Abonnements</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="cours.php">
              <i class="fa fa-desktop"></i>
              <span>Cours</span>
              </a>
          </li>


          <li class="sub-menu">
            <a href="coach.html">
              <i class="fa fa-desktop"></i>
              <span>Coach</span>
              </a>
          </li>


          <li class="sub-menu">
            <a href="produit.html">
              <i class="fa fa-desktop"></i>
              <span>Produit</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="reservation.html">
              <i class="fa fa-desktop"></i>
              <span>Reservation</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="Commandes.html">
              <i class="fa fa-desktop"></i>
              <span>Commandes</span>
              </a>
          </li>



          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.php"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>USER VISITS</h3>
            </div>
            <div class="custom-bar-chart">
              <ul class="y-axis">
                <li><span>10.000</span></li>
                <li><span>8.000</span></li>
                <li><span>6.000</span></li>
                <li><span>4.000</span></li>
                <li><span>2.000</span></li>
                <li><span>0</span></li>
              </ul>
              <div class="bar">
                <div class="title">JAN</div>
                <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
              </div>
              <div class="bar ">
                <div class="title">FEB</div>
                <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
              </div>
              <div class="bar ">
                <div class="title">MAR</div>
                <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
              </div>
              <div class="bar ">
                <div class="title">APR</div>
                <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
              </div>
              <div class="bar">
                <div class="title">MAY</div>
                <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
              </div>
              <div class="bar ">
                <div class="title">JUN</div>
                <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
              </div>
              <div class="bar">
                <div class="title">JUL</div>
                <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
              </div>
            </div>
            <!--custom chart end-->
            <div class="row mt">
              <!-- SERVER STATUS PANELS -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <h5>SERVER LOAD</h5>
                  </div>
                  <canvas id="serverstatus01" height="120" width="120"></canvas>
                  <script>
                    var doughnutData = [{
                        value: 70,
                        color: "#FF6B6B"
                      },
                      {
                        value: 30,
                        color: "#fdfdfd"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                  </script>
                  <div class="row">
                    <div class="col-sm-6 col-xs-6 goleft">
                      <p>Usage<br/>Increase:</p>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                      <h2>21%</h2>
                    </div>
                  </div>
                </div>
                <!-- /grey-panel -->
              </div>
              <!-- /col-md-4-->
              <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>DROPBOX STATICS</h5>
                  </div>
                  <canvas id="serverstatus02" height="120" width="120"></canvas>
                  <script>
                    var doughnutData = [{
                        value: 60,
                        color: "#f45622"
                      },
                      {
                        value: 40,
                        color: "#f53e54"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                  </script>
                  <p>April 17, 2014</p>
                  <footer>
                    <div class="pull-left">
                      <h5><i class="fa fa-hdd-o"></i> 17 GB</h5>
                    </div>
                    <div class="pull-right">
                      <h5>60% Used</h5>
                    </div>
                  </footer>
                </div>
                <!--  /darkblue panel -->
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <!-- REVENUE PANEL -->
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <h5>REVENUE</h5>
                  </div>
                  <div class="chart mt">
                    <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
                  </div>
                  <p class="mt"><b>$ 17,980</b><br/>Month Income</p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
            <div class="row">
              <!-- WEATHER PANEL -->
              <div class="col-md-4 mb">
                <div class="weather pn">
                  <i class="fa fa-cloud fa-4x"></i>
                  <h2>13º C</h2>
                  <h4>MORNAG</h4>
                </div>
              </div>
              <!-- /col-md-4-->
              <!-- DIRECT MESSAGE PANEL -->
              <div class="col-md-8 mb">
                <div class="message-p pn">
                  <div class="message-header">
                    <h5>DIRECT MESSAGE</h5>
                  </div>
                  <div class="row">
                    <div class="col-md-3 centered hidden-sm hidden-xs">
                      <img src="img/ui-danro.jpg" class="img-circle" width="65">
                    </div>
                    <div class="col-md-9">
                      <p>
                        <name>Dan Rogers</name>
                        sent you a message.
                      </p>
                      <p class="small">3 hours ago</p>
                      <p class="message">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                      <form class="form-inline" role="form">
                        <div class="form-group">
                          <input type="text" class="form-control" id="exampleInputText" placeholder="Reply Dan">
                        </div>
                        <button type="submit" class="btn btn-default">Send</button>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Message Panel-->
              </div>
              <!-- /col-md-8  -->
            </div>
            <div class="row">
              <!-- TWITTER PANEL -->
              <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="product-panel-2 pn">
                  <div class="badge badge-hot">HOT</div>
                  <img src="img/product.jpg" width="200" alt="">
                  <h5 class="mt">Flat Pack Heritage</h5>
                  <h6>TOTAL SALES: 1388</h6>
                  <button class="btn btn-small btn-theme04">FULL REPORT</button>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 mb">
                <!-- WHITE PANEL - TOP USER -->
                <div class="white-panel pn">
                  <div class="white-header">
                    <h5>TOP USER</h5>
                  </div>
                  <p><img src="img/ui-zac.jpg" class="img-circle" width="50"></p>
                  <p><b>Zac Snider</b></p>
                  <div class="row">
                    <div class="col-md-6">
                      <p class="small mt">MEMBER SINCE</p>
                      <p>2012</p>
                    </div>
                    <div class="col-md-6">
                      <p class="small mt">TOTAL SPEND</p>
                      <p>$ 47,60</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>DISK SPACE</h5>
                  </div>
                  <canvas id="serverstatus03" height="120" width="120"></canvas>
                  <script>
                    var doughnutData = [{
                        value: 60,
                        color: "#2b2b2b"
                      },
                      {
                        value: 40,
                        color: "#fffffd"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus03").getContext("2d")).Doughnut(doughnutData);
                  </script>
                  <h3>60% USED</h3>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->

            <!-- /row -->
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg-3 ds">
            <!--COMPLETED ACTIONS DONUTS CHART-->
            <div class="donut-main">
              <h4>COMPLETED ACTIONS & PROGRESS</h4>
              <canvas id="newchart" height="130" width="130"></canvas>
              <script>
                var doughnutData = [{
                    value: 70,
                    color: "#f45622"
                  },
                  {
                    value: 30,
                    color: "#fdfdfd"
                  }
                ];
                var myDoughnut = new Chart(document.getElementById("newchart").getContext("2d")).Doughnut(doughnutData);
              </script>
            </div>
            <!--NEW EARNING STATS -->
            <div class="panel terques-chart">
              <div class="panel-body">
                <div class="chart">
                  <div class="centered">
                    <span>TODAY EARNINGS</span>
                    <strong>$ 890,00 | 15%</strong>
                  </div>
                  <br>
                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[<?php echo $statt1 ?>,<?php echo $statt2 ?>,<?php echo $statt3 ?>,<?php echo $statt4 ?>,<?php echo $statt5 ?>,<?php echo $statt6 ?>,<?php echo $statt7 ?>,<?php echo $statt8 ?>,<?php echo $statt9 ?>,<?php echo $statt10 ?>,<?php echo $statt11 ?>]"></div>
                </div>
              </div>
            </div>
            <!--new earning end-->
            <!-- RECENT ACTIVITIES SECTION -->
            <h4 class="centered mt">RECENT ACTIVITY</h4>
            <!-- First Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted><?php echo $date11 ?></muted>
                  <br/>
                  <a href="#"><?php echo $username ?></a> <?php echo $act11 ?><br/>
                </p>
              </div>
            </div>
            <!-- Second Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted><?php echo $date12 ?></muted>
                  <br/>
                  <a href="#"><?php echo $username2 ?></a> <?php echo $act12 ?> <br/>
                </p>
              </div>
            </div>
            <!-- Third Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted><?php echo $date13 ?></muted>
                  <br/>
                  <a href="#"><?php echo $username3 ?></a> <?php echo $act13 ?><br/>
                </p>
              </div>
            </div>
            <!-- Fourth Activity -->
            <div class="desc">
              <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
              </div>
              <div class="details">
                <p>
                  <muted><?php echo $date14 ?></muted>
                  <br/>
                  <a href="#"><?php echo $username4 ?></a> <?php echo $act14 ?><br/>
                </p>
              </div>
            </div>
<br>
<br>
<br>
<br>
<br>
<br>


            <!-- CALENDAR-->
            <div id="calendar" class="mb">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>
            </div>
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->





  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: "Bonjour <?php echo ($_SESSION["nom"]); ?> !",
        // (string | mandatory) the text inside the notification
        text: 'Nous utilisons des cookies pour nous permettre de mieux comprendre comment le site est utilisé. En continuant à utiliser ce site, vous acceptez cette politique.',
        // (string | optional) the image to display on the left
        image: "<?php echo '../views/images/' . $_SESSION["picture"] ?>",
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
