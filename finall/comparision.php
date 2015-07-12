<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HHF</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

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
<script>
function ValidateForm()
{
    var school_id1 = document.form1.school_id;
    var report1 = document.form1.report; 
    var school_name1 = document.form1.school_name;
    var school_address1 = document.form1.school_address;
    var region1 = document.form1.region;
    var country1 = document.form1.country;
    var number_of_girls1 = document.form1.number_of_girls;
    var number_of_boys1 = document.form1.number_of_boys;
    var number_of_teachers1= document.form1.number_of_teachers;
    var literacy_rate1 = document.form1.literacy_rate;
    var computer_literacy1 = document.form1.computer_literacy;
    var average_attendance1 = document.form1.average_attendance;
    var books1 = document.form1.books;
    var computers1 = document.form1.computers;
    var smartphones1 = document.form1.smartphones;
    var students1 = document.form1.students;
    var literacy_rate_before1 = document.form1.literacy_rate_before;
    var primary1 = document.form1.primary;
    var secondary1 = document.form1.secondary;
    var dropouts1 = document.form1.dropouts;
    var area1 = document.form1.area;

if(school_id1.value == "")
{
alert("Please enter school id ");
school_id1.focus();
return false;
}
if(report1.value == "")
{
alert("Please enter report ");
report1.focus();
return false;
}
if(school_name1.value == "")
{
alert("Please enter school name ");
school_name1.focus();
return false;
}
if(school_address1.value == "")
{
alert("Please enter school address ");
school_address1.focus();
return false;
}
if(region1.value == "")
{
alert("Please enter region ");
region1.focus();
return false;
}
if(number_of_boys1.value == "")
{
alert("Please enter number of boys ");
number_of_boys1.focus();
return false;
}
if(number_of_girls1.value == "")
{
alert("Please enter number of girls ");
number_of_girls1.focus();
return false;
}

if(number_of_teachers1.value == "")
{
alert("Please enter number of teachers ");
number_of_teachers1.focus();
return false;
}
if(literacy_rate1.value == "")
{
alert("Please enter literacy rate ");
literacy_rate1.focus();
return false;
}
if(computer_literacy1.value == "")
{
alert("Please enter computer literacy ");
computer_literacy1.focus();
return false;
}
if(books1.value == "")
{
alert("Please enter books ");
books1.focus();
return false;
}
if(computers1.value == "")
{
alert("Please enter number of computers ");
computers1.focus();
return false;
}
if(smartphones1.value == "")
{
alert("Please enter number of smartphones ");
smartphones1.focus();
return false;
}
if(students1.value == "")
{
alert("Please enter number of students ");
students1.focus();
return false;
}
if(literacy_rate_before1.value == "")
{
alert("Please enter literacy rate before impact ");
literacy_rate_before1.focus();
return false;
}
if(primary1.value == "")
{
alert("Please enter number of primary students");
primary1.focus();
return false;
}
if(secondary1.value == "")
{
alert("Please enter number of secondary students ");
secondary1.focus();
return false;
}
if(dropouts1.value == "")
{
alert("Please enter dropouts ");
dropouts1.focus();
return false;
}
if(area1.value == "")
{
alert("Please enter area ");
area1.focus();
return false;
}







return true;
}

</script>

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
                <a class="navbar-brand" href="index.html">  Happy Hearts Fund</a>
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
                                        <strong>KM School</strong>
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
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Liko School</strong>
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
                                        <strong>Mary School</strong>
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
                            <a class="text-center" >
                                <strong>Ongoing Construction</strong>
                                
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
                            <a href="https://en.wikipedia.org/wiki/April_2015_Nepal_earthquake" target="_blank">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>Nepal Earthquake
                                    <span class="pull-right text-muted small">2015</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="https://en.wikipedia.org/wiki/2008_Afghanistan_blizzard" target="_blank">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>Afghanistan blizzard
                                    <span class="pull-right text-muted small">2008</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="https://en.wikipedia.org/wiki/2004_Indian_Ocean_earthquake_and_tsunami">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>Indian Ocean Tsunami
                                    <span class="pull-right text-muted small">2004</span>
                                </div>
                            </a>
                        </li>
                        
                        
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" >
                                <strong>Recent Calamities</strong>
                               
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="Schools_form.html"> Enter Data
                       
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
                            <a href="index.php"> Measuring Impact</a>
                        </li>
                        <li>
                            <a href="generalmetrics.php"> General Metrics </a>
                            
                        </li>
                         <li>
                            <a href="academic.php"> Academic Performance And Attendance </a>
                            
                        </li>
                        <li>
                            <a href="materials.php"> Materials And Technoogies </a>
                            
                        </li>
                        <li>
                            <a href="economic.php"> Economic Impact </a>
                            
                        </li>
                        <li>
                            <a href="impact.php"> Long-Term Impact </a>
                            
                        </li>
                        <li>
                            <a href="regional.php"> Regional Overview </a>
                            
                        </li>
                        <li>
                            <a href="#"> Comparision </a>
                            
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
                    <h1 class="page-header">Comparision</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Comparing HHF Schools With Top 2 Schools</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div id="testing" style="height:300px;">
                
            </div>
        </div>
    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script>
        $('document').ready(function() {
            alert('Hello');
            Morris.Bar({
                element: 'testing',
                data: [{
                    y: 'Students',
                    a: 100,
                    b: 90,
                    c: 110
                }, {
                    y: 'Teachers',
                    a: 75,
                    b: 85,
                    c: 80
                }, {
                    y: 'Budget',
                    a: 20,
                    b: 40,
                    c: 30
                }, {
                    y: 'Literacy',
                    a: 75,
                    b: 65,
                    c:90
                }, {
                    y: 'Fees',
                    a: 50,
                    b: 40,
                    c: 70
                }],
                xkey: 'y',
                ykeys: ['a', 'b', 'c'],
                labels: ['HHF', 'ABC','XYZ'],
                hideHover: 'auto',
                resize: true
            });
        });
    </script>
</body>

</html>
