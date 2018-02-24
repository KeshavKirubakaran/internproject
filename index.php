<?php
 if (session_status() == PHP_SESSION_ACTIVE) {
  session_destroy();
}
   include("init.php");
   session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {  
$umail = $_POST["usermail"];  
$session['username'] = $umail;
$user_pass =  $_POST["password"];  

$sql_query = "select firstname from registerdata WHERE mail like '$umail' and password like '$user_pass';";

$result = mysqli_query($con,$sql_query);
if(mysqli_num_rows($result)>0)
{
$row = mysqli_fetch_assoc($result);
$firstname = $row['firstname'];

header('location:table.php');
}
else
  {
    ?>
        <script type="text/javascript">
      alert('USERNAME AND PASSWORD IS NOT VALID');
      </script>

      <?php
      header('location:Login.php');
  }
}
  
?>
<!DOCTYPE HTML>
<html>
  <head>
  	<title>LOGIN PAGE</title>
  	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css" />
  <link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="jquery-1.7.min.js"></script><style type="text/css">

    .jumbotron {
      background: rgba(0,0,0,0.8); color:white;

    }
    ::-webkit-input-placeholder { /* WebKit browsers */
    color:    red;
     opacity: 0.5 !important;
}
  </style>
  </head>
  <body >
  	<!--<div class="jumbotron text-center">
  	   <h1 style="color:cyan;">LOGIN</h1></div>
  	<div class="container">
  		<div class="row">
           <div class="col-sm-5"></div>
           <div class="col-sm-7">
  	             <form action="http://www.google.com/">
  		            <label>USERID:</label><br><input type="text" value="userid"/><br>
  		            <label>PASSWORD:</label><br><input type="password" value="pass"/><br>
  		            <input type="submit" name="SUBMIT">
  	             </form>
            </div>
        </div>-->
       <div class="col-4"></div><br><br>
  <div class="container jumbotron col-sm-4 col-sm-offset-4  ">
    <h2 style="color: #FFFFFF;text-align:center " ><b>LOGIN</b></h2>
    <form class="form-horizontal" method="POST" id="main">
           <div class="form-group">
           <label class="control-label col-sm-4 " for="first">Email</label>
           <div class="col-sm-6">
              <input type="text" class="form-control" name="usermail" id="usermail" placeholder="Email">
           </div>

           </div>
           <div class="form-group">
             <label class="control-label col-sm-4 " for="last">Password</label>
             <div class="col-sm-6">
             <input type="password" class="form-control" name="password" id="password" placeholder="*********"  ></div>
           </div>
            <center>
            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-4">
           <button type="submit" class="btn btn-info">LOGIN</button></div></div>

           <a href="register.php">Register???</a>
         </center>

        </form>
  </div>
  <div class="col-4"><br><br><br><br><br><br><br><br><br></div>
  </body>
</html>