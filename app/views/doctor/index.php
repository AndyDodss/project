
<?php
session_start();
if(!isset($_SESSION['username']))
{
    
    header("location:../../controllers/loginControllers.php");
    die();
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../test-samer/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../../../test-samer/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../../../test-samer/assets/css/style.css" rel="stylesheet">
    <link href="../../../test-samer/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Dcotor Home</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                   
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="../../../test-samer/assets/img/ui-zac.jpg"></span>
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
                                    <span class="photo"><img alt="avatar" src="../../../test-samer/assets/img/ui-divya.jpg"></span>
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
                                    <span class="photo"><img alt="avatar" src="../../../test-samer/assets/img/ui-danro.jpg"></span>
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
                                    <span class="photo"><img alt="avatar" src="../../../test-samer/assets/img/ui-sherman.jpg"></span>
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
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="?page=editProfile">My Profile</a></li>
                    <li><a class="logout" href="../../controllers/logoutController.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	 <p class="centered"><a href="profile.html"><img src="../../../test-samer/assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	 <h5 class="centered">Marcel Newman</h5>
              	  	
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Home</span>
                      </a>
                  </li>
                   <li class="mt">
                      <a href="?page=exist">
                          <i class="fa fa-dashboard"></i>
                          <span>Availble Medicne</span>
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
          <section class="wrapper site-min-height">
          	
              <section  id='page'>
                  
                  <?php
                    if (@$_GET['page']) {
                        $url = $_GET['page'] . ".php";
                        if (is_file($url)) {
                            include $url;
                        } else {
                            echo 'requested file is not found !';
                        }
                    } else {
                        include_once "../../controllers/doctor/appoimentController.php";
                        echo'                       <h1 Style="text-align:center";>Reserving page</h1>

                            <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" />
                       
                        <div Style="text-align:center";>        
                    <section class="table-box">
                        <table border="3" class="table" Style="text-align:center">
			<thead>
				<tr>
					
					<th>Day</th>
					<th>Time</th>
                                        <th>Num Patient served</th>
					<th>Num patient can served</th>
                                        
				</tr>
			</thead>
                         ';
                             for($i=0;$i< count($data);$i++){ 
                          echo"
                        <tbody>
                                   <td>{$data[$i]['Day']}</td>
                                    <td>{$data[$i]['appoint']}</td>
                                    <td>{$data[$i]['patientnum']}</td>                                   
                                     <td>{$data[$i]['patientlimit']}</td>                                   
                                    </tr>
                             ";}
                  echo' <form action="../../controllers/doctor/appoimentController.php" method="post" >';
                                     echo '
                         <form action="../../controllers/doctor/appoimentController.php" method="post" >
    <tr>
                    <td><input type="text" name="Day"></td>
                                    <td><input type="text" name="appoint"></td>
                                    <td><input type="text" name="patientnum"></td>                                   
                                     <td><input type="text" name="patientlimit">
                                     <input type="submit" name="submit" value="add"></td>                                       
                                                                                </tr>
                        </body>
</table>'   ;
                                     echo '</form>';           
                    
                    }
                    
                    echo' <h2 Style="text-align:center";>Person Reserving</h1>

    <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" />
                       
                        <div Style="text-align:center";>        
                    <section class="table-box">
                        <table border="3" class="table" Style="text-align:center">
			<thead>
				<tr>
					
					
					<th>Day</th>
                                        <th>Patient Name</th>
                                        <th>appoinment</th>
					
                                        
				</tr>
			</thead>
                         ';
                             for($i=0;$i< count($patient);$i++){ 
                          echo"
                        <tbody>
                                   <td>{$patient[$i]['Day']}</td>
                                    <td>{$patient[$i]['username']}</td>
                                    <td>{$patient[$i]['appoint']}</td>                                   
                                                                       
                                    </tr>
                            
                

                        </body>
</table>
                             ";}           
                    
                    
                    
                    
                    
                    
                    
                    ?>
              </section>
         
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
    <!--  <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

   
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>