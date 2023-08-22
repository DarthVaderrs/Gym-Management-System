<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JUOCMS</title>
</head>

<body>
<?php

	$Name=$_POST['txtName'];
	$Address=$_POST['txtAddress'];
	$City=$_POST['collage'];
	$building=$_POST['Building'];
	$office=$_POST['OfficeNo'];
	
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];
	$Gender=$_POST['rdGender'];
	$FDate= date('y/m/d');;
	
	$UserName=$_POST['txtUserName'];
	$Pwd=$_POST['txtpassword'];
	
	
	
	// check the login name from UAS and validate it using first and last name 
	
	
	
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("juocms", $con);
	// Specify the query to Insert Record
	$sql = "insert into customer_registration(CustomerName,LastName,Collage,Building,Officeno,Email,Mobile,Gender,Registrationdate,UserName) values('".$Name."','".$Address."','".$City."','".$building."','".$office."','".$Email."',".$Mobile.",'".$Gender."','".$FDate."','".$UserName."','".$Pwd."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'Customer/index.php\';</script>';

?>
</body>
</html>
