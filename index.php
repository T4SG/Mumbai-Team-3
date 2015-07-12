<!DOCTYPE html>
<html lang="en">
<!--<?php
session_start();
//include('header.php');
//include('data_con.php');
?>-->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HHF</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
    <!--START OF SLIDER-->
	 
    <!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<style type="text/css">a#vlb{display:none}</style>
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
     
<!--END OF SLIDER-->

<!-- START OF JS FOR MAP -->

	    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
        
    <script>
function initialize() {
  var myLatlng2 = new google.maps.LatLng(15.085748, 18.910782);
  
  var myLatlng = new google.maps.LatLng(-4.172052, 123.815644);
  var myLatlng1 = new google.maps.LatLng(18.561122,-72.344810);/*haiti*/
  var myLatlng3 = new google.maps.LatLng(39.541770, -119.485645);
  var myLatlng4 = new google.maps.LatLng(19.435742, -99.186871);/*mexico*/
  var myLatlng5 = new google.maps.LatLng(3.767743, -73.173612);/*columbia*/
  var myLatlng6 = new google.maps.LatLng(-10.947476, -75.957213);/*peru*/
  var myLatlng7 = new google.maps.LatLng(-26.942269, -70.353456);/*chile*/
  var myLatlng8 = new google.maps.LatLng(15.826139, 101.226432);/*thailand*/
  var myLatlng9 = new google.maps.LatLng(12.364022, 123.764332);/*philli*/
  var mapOptions = {
    zoom: 2,
    center: myLatlng2
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng1,
      map: map,
      title: 'Haiti'
  });
  
  
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Indonesia'
  });
  
  var marker = new google.maps.Marker({
      position: myLatlng3,
      map: map,
      title: 'USA'
  });
  
  var marker = new google.maps.Marker({
      position: myLatlng4,
      map: map,
      title: 'Mexico'
  });
  
  var marker = new google.maps.Marker({
      position: myLatlng5,
      map: map,
      title: 'Colombia'
  });
  
  var marker = new google.maps.Marker({
      position: myLatlng6,
      map: map,
      title: 'Peru'
  });
  
  var marker = new google.maps.Marker({
      position: myLatlng7,
      map: map,
      title: 'Chile'
  });
  
  var marker = new google.maps.Marker({
      position: myLatlng8,
      map: map,
      title: 'Thailand'
  });
  
  var marker = new google.maps.Marker({
      position: myLatlng9,
      map: map,
      title: 'Philippines'
  });
  
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

<!-- END OF JS FOR MAP -->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Happy Hearts Fund</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                    
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="https://en.wikipedia.org/wiki/2008_Afghanistan_blizzard" target="_blank">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> Afghanistan blizzard
                                    <span class="pull-right text-muted small">2008</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="https://en.wikipedia.org/wiki/2004_Indian_Ocean_earthquake_and_tsunami" target="_blank">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> Indian Ocean Tsunami
                                    <span class="pull-right text-muted small">2004</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Login
                       
                    </a>
                    
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="index.html"> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"> General Metrics </a>
                            
                        </li>
                         <li>
                            <a href="#"> Academic Performance And Attendance </a>
                            
                        </li>
                        <li>
                            <a href="#"> Materials And Technoogies </a>
                            
                        </li>
                        <li>
                            <a href="#"> Economic Impact </a>
                            
                        </li>
                        <li>
                            <a href="#"> Long-Term Impact </a>
                            
                        </li>
                        <li>
                            <a href="#"> Regional Overview </a>
                            
                        </li>
                        
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="http://static1.squarespace.com/static/536249cde4b0586b1fcb8778/538a149de4b0474839381362/538a1921e4b0a4356c05f491/1435500810646/World-Bank-Logo.png" style="width:75px;height:75px;">
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">9</div>
                                    <div>Countrys!</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">47</div>
                                    <div>Regions!</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">118</div>
                                    <div>Schools!</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">10</div>
                                    <div>Years!</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- /.row -->
            
            <!-- START OF SLIDER CODE-->
            
              <!-- Start WOWSlider.com BODY section -->
	<div id="wowslider-container1">
	<div class="ws_images">
<a href="#"><img src="data1/images/petra1.jpg" alt="" title="" id="wows0"/>Thousands of kids educated</a>
<a href="#"><img src="data1/images/petra2.jpg" alt="" title="" id="wows1"/>Millions of lives impacted</a>
<a href="#"><img src="data1/images/petra3.jpg" alt="" title="" id="wows2"/>regergergerggergergreg</a>
<a href="#"><img src="data1/images/petra4.jpg" alt="" title="" id="wows3"/>regergergerggergergreg</a>
<a href="#"><img src="data1/images/petra5.jpg" alt="" title="" id="wows4"/>regergergerggergergreg</a>
</div>
<div class="ws_bullets"><div>
<a href="#wows0" title=""><img src="data1/tooltips/chrysanthemum.jpg" alt="Chrysanthemum"/>1</a>
<a href="#wows1" title=""><img src="data1/tooltips/desert.jpg" alt="Desert"/>2</a>
<a href="#wows2" title=""><img src="data1/tooltips/jellyfish.jpg" alt="Jellyfish"/>3</a>
<a href="#wows3" title=""><img src="data1/tooltips/jellyfish.jpg" alt="Jellyfish"/>3</a>
<a href="#wows4" title=""><img src="data1/tooltips/jellyfish.jpg" alt="Jellyfish"/>3</a>
</div></div>
<a style="display:none" href="http://wowslider.com">jQuery Image Slider Vertical by WOWSlider.com v1.7</a>
	</div>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
           
            
            <!-- END OF SLIDER CODE-->
            
        <?php

// include ("database_connection.php");
 include ("data_con.php");
               $tabs=array();
    $sql="SELECT distinct year FROM school";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    $tabs[]=$row['year'];
}
            for($i=0;$i<count($tabs);$i++){
                echo("$tabs[$i]");
                echo('<br>');
            }    

                 $sql="select count(*) from school where year='2007' ";
        $result=$conn->query($sql);
        $row3 = mysqli_fetch_assoc($result); //fetch first row
        $total=$row3['count(*)'];
        //echo("2007");
        //echo($total);

         $sql="select count(*) from school where year='2008' ";
        $result=$conn->query($sql);
        $row3 = mysqli_fetch_assoc($result); //fetch first row
        $total1=$row3['count(*)'];
        //echo("2008");
        //echo($total1);

         $sql="select count(*) from school where year='2009' ";
        $result=$conn->query($sql);
        $row3 = mysqli_fetch_assoc($result); //fetch first row
        $total2=$row3['count(*)'];
        //echo("2009");
        //echo($total2);

         $sql="select count(*) from school where year='2010' ";
        $result=$conn->query($sql);
        $row3 = mysqli_fetch_assoc($result); //fetch first row
        $total3=$row3['count(*)'];
        //echo("2010");
        //echo($total3);

         $sql="select count(*) from school where year='2011' ";
        $result=$conn->query($sql);
        $row3 = mysqli_fetch_assoc($result); //fetch first row
        $total4=$row3['count(*)'];
        //echo("2011");
        //echo($total4);

        $sql="select count(*) from school where year='2012' ";
        $result=$conn->query($sql);
        $row3 = mysqli_fetch_assoc($result); //fetch first row
        $total5=$row3['count(*)'];
        //echo("2012");
        //echo($total5);

        $sql="select count(*) from school where year='2013' ";
        $result=$conn->query($sql);
        $row3 = mysqli_fetch_assoc($result); //fetch first row
        $total6=$row3['count(*)'];
        //echo("2013");
        //echo($total6);

        $sql="select count(*) from school where year='2014' ";
        $result=$conn->query($sql);
        $row3 = mysqli_fetch_assoc($result); //fetch first row
        $total7=$row3['count(*)'];
        //echo("2014");
        //echo($total7);
        
        $sql="select count(*) from school where year='2015' ";
        $result=$conn->query($sql);
        $row3 = mysqli_fetch_assoc($result); //fetch first row
        $total8=$row3['count(*)'];
        //echo("2015");
        //echo($total8);

                
?>
                    
                      
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Year</th>
                                            
                                                    <th>Number of schools</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2007</td>
                                                    <td><?php echo "$total"?></td>                                                    
                                                </tr>
                                                <tr>
                                                    <td>2008</td>
                                                    <td><?php echo "$total1"?></td>                                                    
                                                </tr>
                                                <tr>
                                                    <td>2009</td>
                                                    <td><?php echo "$total2"?></td>                                                    
                                                </tr>
                                                <tr>
                                                    <td>2010</td>
                                                    <td><?php echo "$total3"?></td>                                                    
                                                </tr>
                                                <tr>
                                                    <td>2011</td>
                                                    <td><?php echo "$total4"?></td>                                                    
                                                </tr>
                                                <tr>
                                                    <td>2012</td>
                                                    <td><?php echo "$total5"?></td>                                                    
                                                </tr>
                                                <tr>
                                                    <td>2013</td>
                                                    <td><?php echo "$total6"?></td>                                                    
                                                </tr>
                                                <tr>
                                                    <td>2014</td>
                                                    <td><?php echo "$total7"?></td>                                                    
                                                </tr>
                                                <tr>
                                                    <td>2015</td>
                                                    <td><?php echo "$total8"?></td>                                                    
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                 </div>
             </div>
         </div>
     </div>
     
     <div id="map-canvas"></div>
     
     
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script >
    $(function() {
Morris.Bar({
        element: 'morris-bar-chart',
        data: [
            {
            y: '2007',
            a:<?php echo "$total"?>
        }, {
            y: '2008',
            a: <?php echo "$total1"?>
        }, {
            y: '2009',
            a: <?php echo "$total2"?>
            
        }, {
            y: '2010',
            a: <?php echo "$total3"?>
            
        }, {
            y: '2011',
            a: <?php echo "$total4"?>
            
        }, {
            y: '2012',
            a: <?php echo "$total5"?>
           
        }, {
            y: '2013',
            a: <?php echo "$total6"?>
           
        }, {
            y: '2014',
            a: <?php echo "$total7"?>
           
        }, {
            y: '2015',
            a: <?php echo "$total8"?>
           
        }],
        xkey: 'y',
        ykeys: 'a',
        labels: 'Series A',
        hideHover: 'auto',
        resize: true
    });
});



    </script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>


</body>

</html>
