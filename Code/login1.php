<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Registration Page</title>
      
      <style type="text/css">
        body {
          background-image: url("back14.jpg");
          font-family: sans-serif;
        }

        #mainDiv
        {
            width:60%;margin-left: auto;margin-right: auto;margin-top:7%;box-shadow:0px 0px 10px 5px grey;padding:0px;
        }

        #secDiv
        {
          background-color: #ffffff;width:46%; padding:40px;float: left;
        }

        #loginButton
        {
          background-color:#4286f4;color:white;padding:5px;font-weight: bold;padding-left:75px;padding-right: 75px;text-decoration:none;
        }

        input
        {
        background-color: white;
        color:black;
        width:50%;
        height:30px;
        background: transparent;
        border: none;
        border-bottom: 1px solid #000000;
        }

        a
        {
          text-decoration:none;
        }

        #button
        {
          border:1px solid white;
          border-radius:30px;
          background-color:  #ff9933;color:white;
          font-weight: bold;
          padding: 5px 25px 5px 25px;
        }
      </style>
  
</head>

<body>

<?php

  include("nav.html");

  ?>

<div id="mainDiv">

<div id="secDiv">
<center>

  <h1 style="font-size: 35px;color:red">SIGN UP</h1>
    <form action="Register.php" method="post">

        <p>
          <input type="text" name="username" placeholder="Username" required >
        <?php

        if($_GET['login']=="fail")
        {
          echo "Username Already Taken";
        }

        ?>

        </p>

        <p>  <input type="text" name="password" required placeholder="Password"  ></p>

        <p>  <input type="text" name="fname" placeholder="First Name" required>  </p>

        <p>  <input type="text" name="lname" placeholder="Last Name" required>     </p>


        <input  type="radio" name="sex" value="male" checked="male" style="height:20px;width:10%">Male

        <input type="radio" name="sex" value="female" style="height:20px;width:10%">Female

        <p><input type="text" name="email" placeholder="Email" required  >    </p>

        <p>  <input id="button" type="submit" value="SUBMIT">  </p>  
    </form>

      <p><a id="button" href="login.php" id="loginButton">LOGIN</a></p>
    </center>
</div>

  <img src="Images/back15.jpg" style="width:46.7%;height:537px;padding:0px;">

</div>

</body>
</html>
