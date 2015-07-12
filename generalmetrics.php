<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<style>
.dropdown-menu
{
    width:260px ;

}
.size1
{
    width:260px;
}
</style>

<style type="text/css">
.header-cont {
    width:960px;
    position:fixed;
    top:60px;
	padding-left:36px;
}
.header {
    height:130px;
    background:#F0F0F0;
    border:1px solid #CCC;
    width:960px;
    margin:0px auto;
}
.content {
    width:960px;
    background: #fff;
    border: 1px solid #CCC;
    height: 2000px;
    margin: 70px auto;
}
.content #1{
	width:960px;
}
</style>
   
    
<script>
	function graph1()
	{
		document.getElementById('1').style.display = "block";
		document.getElementById('2').style.display = "none";
		document.getElementById('3').style.display = "none";	
	}
	function graph2()
	{
		document.getElementById('1').style.display = "none";
		document.getElementById('2').style.display = "block";
		document.getElementById('3').style.display = "none";	
	}
	function graph3()
	{
		document.getElementById('1').style.display = "none";
		document.getElementById('2').style.display = "none";
		document.getElementById('3').style.display = "block";	
	}
</script>

<script type="text/javascript" src="../js/jscharts.js"></script>

<script src="..\js\pie.js"></script>


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
                            <a href="index.php"> Dashboard</a>
                        </li>
                        <li>
                            <a href="generalmetrics.php"> General Metrics </a>
                            
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
                    <h1 class="page-header">General Metrics</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
         	
            
            <div class="bs-example" >
    <ul class="nav nav-pills" style="width:100%;">
        <div class="row">
            <div class="col-md-3">
        <li class="dropdown">
           <button class="size1" class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"> Country <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Indonesia</a></li>
                <li><a href="#">Haiti</a></li>
                <li><a href="#">Thailand</a></li>
            <!--    <li class="divider"></li>  -->
                
            </ul>
        </li>
    </div>
    <div class="col-md-3">
        <li class="dropdown">
            <button class="size1" class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Region <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Delmas</a></li>
                <li><a href="#">Phang Nga</a></li>
                <li><a href="#">Indonesia</a></li>
            <!--    <li class="divider"></li>  -->
               
            </ul>
        </li>
    </div>
    <div class="col-md-3">
        <li class="dropdown">
           <button class="size1" class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"> School <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Cempaka Putih</a></li>
                <li><a href="#">Tegal Maja</a></li>
                <li><a href="#">Institution Scholane</a></li>
            <!--    <li class="divider"></li>  -->
                <li><a href="#">Chao Thai Mai</a></li>
            </ul>
        </li>
    </div>
    <div class="col-md-3">
        <li class="dropdown">
           <button class="size1" class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"> Categories <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#" onclick="graph1()">No of Boys & Girls</a></li>
                <li><a href="#" onclick="graph2()">No of Total Students</a></li>
                <li><a href="#" onclick="graph3()">No of Square Metres</a></li>
            </ul>
        </li>
    </div>
</div>
    </ul>
   </div> 
<!--    <div class="content">-->
    
    <div id="1">
        <div class="row">
    <div class="col-md-7">
        
	<div id="graph">Loading graph...
    	
    </div>

<script type="text/javascript">
	var myChart = new JSChart('graph', 'line');
	myChart.setDataArray([[2, 10],[4, 20],[6, 30],[8, 45],[10, 50]], 'blue');
	myChart.setDataArray([[2, 12],[4, 25],[6, 30],[8, 50],[10, 60]], 'green');
	
	myChart.setAxisPaddingBottom(40);
	myChart.setTextPaddingBottom(10);
	myChart.setAxisValuesNumberY(11);
	myChart.setIntervalStartY(0);
	myChart.setIntervalEndY(100);
	myChart.setLabelX([2,'2007']);
	myChart.setLabelX([4,'2008']);
	myChart.setLabelX([6,'2009']);
	myChart.setLabelX([8,'2010']);
	myChart.setLabelX([10,'2011']);
	myChart.setAxisValuesNumberX(5);
	myChart.setShowXValues(false);
	myChart.setTitleColor('#454545');
	myChart.setAxisValuesColor('#454545');
	myChart.setLineColor('#A4D314', 'green');
	myChart.setLineColor('#BBBBBB', 'gray');
	
	myChart.setTooltip([2]);
	
	myChart.setTooltip([4]);
	
	myChart.setTooltip([6]);
	
	myChart.setTooltip([8]);
	
	myChart.setTooltip([10]);
	myChart.setFlagColor('#9D16FC');
	myChart.setFlagRadius(4);
	myChart.setBackgroundImage('chart_bg.jpg');
	myChart.setSize(616, 321);
	myChart.draw();
</script>


</div>

    <div class="col-md-5">
        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="row-lg-4" >
                                    <div class="table-responsive" style="height:270px;">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Number of Boys</th>
                                                    <th>Number of Girls</th>
                                                    <th>Total Students</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include ("data_con.php");
                                                $boys=array();
                                                    $girls=array();
                                                $tabs=array();
                                                    $sql="SELECT distinct year FROM school";
                                                    $result = $conn->query($sql);
                                                    while($row = $result->fetch_assoc()) {
                                                    $tabs[]=$row['year'];    
                                                }
                                                sort($tabs);
                                                    
                                                        for($i=0;$i<count($tabs);$i++){
                                                            $yr=$tabs[$i];
                                                            $boys[$i]=0;
                                                            $girls[$i]=0;
                                                        $sql="select * from school where year='$yr' ";
                                                        //echo($sql);
                                                        $result=$conn->query($sql);
                                                        while($row = $result->fetch_assoc()) {
                                                    $boys[$i]=$boys[$i]+$row['no_of_boys'];
                                                        $girls[$i]=$girls[$i]+$row['no_of_girls'];    
                                                }
                                                        
                                                
                                                    }

                                                for($i=0;$i<count($tabs);$i++){
                                                echo('<tr>');
                                                    echo("<td>$boys[$i]</td>");
                                                    echo("<td>$girls[$i]</td>");
                                                    $total=$boys[$i]+$girls[$i];
                                                    echo("<td>$total</td>");
        
                                                echo('</tr>');
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            
              The BLUE Line gives the number of boys on yearly basis. <br>
                 The GREEN Line gives the number of girls on yearly basis. <br><br><br>
         </div>          
         <!-- /.col-lg-4 (nested) -->
<div id="2">

       
<div id="graph1">Loading graph...</div>

<script type="text/javascript">
    var myData = new Array([2005, 22], [2006, 36], [2007, 37], [2008, 45], [2009, 50], [2010, 55], [2011, 61], [2012, 61], [2013, 62], [2014, 66], [2015, 73]);
    var myChart = new JSChart('graph1', 'line');
    myChart.setDataArray(myData);
    myChart.setTitle('No of students');
    myChart.setTitleColor('#8E8E8E');
    myChart.setTitleFontSize(11);
    myChart.setAxisNameX('');
    myChart.setAxisNameY('');
    myChart.setAxisColor('#C4C4C4');
    myChart.setAxisValuesColor('#343434');
    myChart.setAxisPaddingLeft(100);
    myChart.setAxisPaddingRight(120);
    myChart.setAxisPaddingTop(50);
    myChart.setAxisPaddingBottom(40);
    myChart.setAxisValuesNumberX(6);
    myChart.setGraphExtend(true);
    myChart.setGridColor('#c2c2c2');
    myChart.setLineWidth(6);
    myChart.setLineColor('#9F0505');
    myChart.setSize(616, 321);
    myChart.setBackgroundImage('chart_bg.jpg');
    myChart.draw();
</script>
</div>
</div>
<div id="3" >
    <div id="morris-bar-chart"></div>
   

</div>
    
    
  <!--  </div>-->
   
            
            
       
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/try.js"></script>

<script type="text/javascript" src="../js/jscharts.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
    
  

</body>

</html>
