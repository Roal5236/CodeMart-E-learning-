<style>
	body {
		/*background: linear-gradient(45deg,purple,blue);*/
		background:#e6e6e6;
		color: white;
		margin: 0px;

	}
	p {
		margin: 1px;
	}
	.cat11 {
		width:250px;
		background-color: white;
		color: #333;
		font-family: sans-serif;
		padding: 0px;
		margin: 10px;
		transition: .15s;
		width: auto;
		overflow: hidden;
		float: left;
		border: 1px solid #e8e8e8;
		border-radius: 10px;
	}
	.cat11 p {
		padding:0px 10px 5px 10px;
	}
	.cat11 p.cat11_img {
		padding: 0;
		margin: 0;
	}

	.cat11:hover {
		border:1px solid #bbbbbb;
		/*background-color: #eff5ff;*/
		box-shadow: 0 3px 5px 5px #cccccc;
		z-index: 10;
	}
	.cat11 a {

		font-family: sans-serif;
		text-decoration: none;
		color: #333;
	}
	.cat {
		background-color: #f8f8f8;
		color: #333;
		font-family: sans-serif;
		padding: 10px;
		margin: 10px;
		border: 1px solid #ffffff;
		transition: .2s;
		width: auto;
		overflow: hidden;
		float: left;
	}
	.cat:hover {
		border:1px solid #ffffff;
		background-color: white;
		box-shadow: 0 3px 5px 5px #c1c1c1;

	}

video{
	width:250px;
	height:250px;
}


</style>
<body>
	<?php


	$dbconnect=mysqli_connect("localhost","root","","codemart");

	switch ($_GET['diff']) {
			case '0':
				$sql="SELECT * from codemart WHERE LessonNumber<=1006";
				break;

			case '1':
				$sql="SELECT * from codemart WHERE LessonNumber>1006 AND LessonNumber<=1012";
				break;

			case '2':
				$sql="SELECT * from codemart WHERE LessonNumber>1012";
				break;
			
			default:
				$sql="SELECT * from codemart";
				break;
		}	
	
	

	if($query=mysqli_query($dbconnect, $sql)) 
	{
		$rs=mysqli_fetch_assoc($query);
	}

	if(mysqli_num_rows($query)==0) {
		echo "Sorry, we have no items currently in stock";
	} 
	else {
		?>
		<div style="margin-left:5%;">
		<?php 

		do {

			?>

			<div class="cat11" style="margin-top: 75px;width:250px;height:350px;" >

			<a href="lesson.php?no=<?php echo $rs['LessonNumber'];?>&attempt=no">
				<p class="cat11_img">
					<VIDEO>
						<source src="<?php echo $rs['VideoURL']?>" type="video/mp4">
					</VIDEO>
				</p>
				<br>
				<p>Lesson: <?php 
					$kk=(int)$rs['LessonNumber'];
				echo $kk-1000; ?></p>

				<p><?php echo $rs['LessonName']; ?></p>
				
			</a>
			</div>
		<?php
		} while ($rs=mysqli_fetch_assoc($query));
		?>
		</div>
	<?php
	}
	?>

</body>