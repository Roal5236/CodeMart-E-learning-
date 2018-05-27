<?php
$insert_sql_usrd='';
$inser_sql_lgn='';
$dbconnect = mysqli_connect("localhost", "root", "", "codemart");

echo $_POST['username'];

$login_sql="SELECT username FROM login WHERE username='".$_POST['username']."'";
$login_query=mysqli_query($dbconnect, $login_sql);

		if(mysqli_num_rows($login_query)!=0) 
		{
			header("location:login1.php?login=fail");

		}

else
{
	echo "BYE";
$insert_sql="INSERT INTO `login` (`userID`, `username`, `password`, `FirstName`, `LastName`, `Sex`, `Email`) VALUES (
	NULL, 
	'".mysql_real_escape_string($_POST['username'])."',
	'".mysql_real_escape_string($_POST['password'])."',
	'".mysql_real_escape_string($_POST['fname'])."',
	'".mysql_real_escape_string($_POST['lname'])."',
	'".mysql_real_escape_string($_POST['sex'])."',
	'".mysql_real_escape_string($_POST['email'])."'
	);";

	$insert_qry=mysqli_multi_query($dbconnect,$insert_sql);
	header("location:category.php?login=yes&username=".$_POST['username']);
}

?>