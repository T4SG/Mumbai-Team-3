<?php
session_start();
ob_start();

if(isset($_SESSION['username']))
	header("Location: home_1.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php //include('header.php'); ?>


	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Login Form</title>

</head>


<?php

include ('database_connection.php');
if (isset($_POST['formsubmitted'])) {
    // Initialize a session:
	session_start();
    $error = array();//this aaray will store all error messages
    $name=$_POST['username'];

    if (empty($_POST['password'])) {
    	$error[] = 'Please Enter Your Password ';
    } else {
    	$Password = $_POST['password'];
    }

    $salt="100";
    $result = mysqli_query($dbc,"SELECT * FROM login WHERE username ='$name'");

  if (!$result) { // add this check.
  	die('Invalid query: ' . mysql_error());
  }
  while ($row = mysqli_fetch_array($result)) 
  {
  	$salt = $row['salt'];  
  }

  $Password.=$salt;
  $Password=md5($Password);


       if (empty($error))//if the array is empty , it means no error found
       { 



       	$query_check_credentials = "SELECT * FROM login WHERE (username='$name' AND password='$Password')";



       	$result_check_credentials = mysqli_query($dbc, $query_check_credentials);
        if(!$result_check_credentials){//If the QUery Failed 
        	echo 'Query Failed ';
        }

        if (@mysqli_num_rows($result_check_credentials) == 1)//if Query is successfull 
        { // A match was made.




            $_SESSION = mysqli_fetch_array($result_check_credentials, MYSQLI_ASSOC);//Assign the result of this query to SESSION Global Variable


            header("Location: home_1.php");

        }else
        { 

        	$msg_error= 'Either Your Account is inactive or Name/Password is Incorrect';
        }

    }  else {



    	echo '<br><br><div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button> <ol>';
    	foreach ($error as $key => $values) {

    		echo '	<li>'.$values.'</li>';



    	}
    	echo '</ol></div>';

    }


    if(isset($msg_error)){

    	echo '<br><br><div class="lert alert-dismissable alert-danger">
    	<button type="button" class="close" data-dismiss="alert">×</button>'.$msg_error.' </div>';
    }
    /// var_dump($error);
    mysqli_close($dbc);

} // End of the main Submit conditional.



?>
<body>


	<div class="row">

		<div class="col-md-3"></div>
		<div class="col-md-6">
			<br>
			<br>

			<form action="login.php" method="post" class="form-horizontal">
				<fieldset>
					<legend><center><u><b>Log In</b></u></legend></center>
					<br>
					<div class="form-group">
						<label for="inputEmail" class="col-lg-2 control-label">Username</label>
						<div class="col-lg-8">
							<div class="input-group">
								<input type="text" class="form-control" id="username" name="username" size="235" placeholder="Enter Username" required>
								<span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span></div>
							</div>
						</div>

						<div class="form-group">
							<label for="inputPassword" class="col-lg-2 control-label">Password</label>
							<div class="col-lg-8">
								<div class="input-group">
									<input type="password" class="form-control" id="Password" name="Password" size="25" placeholder="Enter Password">
									<span class="input-group-addon"><span class="glyphicon glyphicon-certificate"></span></span></div>

								</div>
							</div>
							<center>
								<br>
								<button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span>&nbspReset</button>&nbsp&nbsp&nbsp
								<input type="hidden" name="formsubmitted" value="TRUE" />
								<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbspLogin</button></center>
								<br>
								<br>
							</div>

						</fieldset>
					</form>

					<div class="col-md-3"></div>
				</div>

				<?php include('footer.php'); ?>

			</body>
			</html>
