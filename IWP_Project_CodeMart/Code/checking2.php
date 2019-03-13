<?php

$dbconnect = mysqli_connect("localhost", "root", "", "codemart");

if(isset($_POST['op']))
{

	$sql="SELECT * FROM codemart_c WHERE right_ans='".$_POST['op']."'";
	$query=mysqli_query($dbconnect, $sql);

		if(mysqli_num_rows($query)!=0) 
		{
			$no=(int)$_POST['not'];
			$no+=1;
			echo $_POST['op'];
			header("location:lesson2.php?no=".$no."&attempt=no");
		}

		else
		{
			$no=(int)$_POST['not'];
			echo $_POST['op'];
			header("location:lesson2.php?no=".$no."&attempt=yes");
		}
}

?>