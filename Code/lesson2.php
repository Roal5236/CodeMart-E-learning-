<html>
<head>
	<title>CodeMART</title>
	<link rel="stylesheet" type="text/css" href="cm.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script> 
function slide() {
 	$("#explain").slideDown("slow");}
}
</script>

</head>

<?php

$dbconnect = mysqli_connect("localhost", "root", "", "codemart");

$no=$_GET['no'];
$sql="SELECT * from codemart_c WHERE LessonNumber=".$no;

if($query=mysqli_query($dbconnect, $sql)) 
	{
		$rs=mysqli_fetch_assoc($query);
	}

if(mysqli_num_rows($query)==0)
	{
		echo "Sorry, we have no Courses currently Available";
	} 

?>


<body style="margin:0px;padding:0px;background-color: #e6e6e6;overflow-x: hidden;font-family: sans-serif;">

<div style="background-color:#f6f6f6;width:260px;position:fixed;height:100%;margin:0px;z-index: 2;box-shadow: 10px 60px 50px #888888 ">

<div style="box-shadow:0px 1px 20px #888888 ; ">
	<img src="logo.jpg" style="width:88%; height:auto;margin-top:3px;margin-left:2%;padding:10px;background-color: white;">
</div>
	
	<hr size="17%">


	<hr size="17%" style=" margin-top:300px;">

	<div style="box-shadow:0px 1px 20px grey ;padding:10px">
		<p style="margin-bottom:50px;"><a href="category2.php?diff=0" style="padding-right:70px;">BEGINNER</a></p>

		<p style="margin-bottom:50px;"><a href="category2.php?diff=1">INTERMEDIATE</a></p>

		<p style="margin-bottom:50px;"><a href="category2.php?diff=2" style="padding-right:100px;">EXPERT</a></p>

	</div>
	
</div>



<div style="width:100%;height:60px;background-color:white; box-shadow: 10px 0px 50px #000000;position: relative;z-index: 1;margin-left:140px;">
	
	<h1 style="color:#000000;font-size:35px;text-align:center;font-family:sans-serif;padding-top:10px;margin:0px;"><?php echo $rs['LessonNumber'];echo ": ";echo $rs['LessonName']; ?></h1>

</div>



<div style="margin-left:260px;">

	<div style="background-color:#08A1A1;height:600px;padding:30px;margin-top:0px;">

	<video style="width:99.5%;height:98%;margin-bottom:0px;background-color:black " poster="back.png" controls="auto" >
		<source src="<?php echo $rs['VideoURL'];?>" type="video/mp4">
	</video>
		
	</div>

	<div style="background-color:white;padding:50px;">
		<h1 style="font-size:60px;font-family:sans-serif;margin-left:10%;color:#1CCCE3">QUIZ</h1>

		<p style="font-size:25px;margin-left:10%"><?php echo $rs['Questions']; ?> </p>

		<form style="margin-top:50px;margin-left:10%" name="f1" action="checking2.php" method="post">
		  <input type="radio" name="op" value="<?php echo $rs['Option1']; ?>"><p style="font-size:20px;display: inline;"> <?php echo $rs['Option1']; ?></p> <br>
		  <input type="radio" name="op" value="<?php echo $rs['Option2']; ?>"><p style="font-size:20px;display: inline;"><?php echo $rs['Option2']; ?></p><br>
		  <input type="radio" name="op" value="<?php echo $rs['Option3']; ?>"><p style="font-size:20px;display: inline;"><?php echo $rs['Option3']; ?></p><br>
		  <input type="radio" name="op" value="<?php echo $rs['Option4']; ?>"><p style="font-size:20px;display: inline;
		  "><?php echo $rs['Option4']; ?></p> 
		  <input type="hidden" name="not" value="<?php echo $_GET['no'] ?>">

		  <input type="submit" name="submit" value="submit" style="margin-left:80%;padding:20px;font-size:25px;background-color:#1CCCE3;color: white; border-style:none;border-radius:10px;border:1px solid #d6d6d6;">
		</form> 
		
		</div>
	</div>

	<?php
	 if ($_GET['attempt']=="yes") 
	{
		echo "<script language='javascript'>alert('Wrong Answer!');
		slide();</script>"; 


	?>
	<div id="explain">
		<h1 style="font-size:60px;font-family:sans-serif;margin-left:10%;color:#1CCCE3;">EXPLAINATION</h1>

		<p style="margin:50px;background-color:white;padding:30px;font-size:20px;height:250px;border:1px solid white;border-radius:10px"><?php echo $rs['Explanations']; ?></p>
	</div>

<?php
echo "<script language='javascript'>document.body.scrollTop = document.body.scrollHeight;</script>"; 
}
?>
</div>

</body>
</html>