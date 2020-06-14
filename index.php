<?php
//index.php
include('database_connection.php');

if(!isset($_SESSION["type"]))
{
 header("location: login.php");
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>KARTHIK NAVIGUS ASSINGMENT</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
body {
  background-color: #E9967A;
   background-image: url("https://i.imgur.com/nkw62sT.jpg");
}


</style>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">KARTHIK NAVIGUS ASSIGNMENT-1</h2>
   <br />
   <h3><div align="right">
    <a href="logout.php">Logout</a>
   </div></h3>
   <h2><b><u><div align="right">
    <a href="history.php">HISTORY</a>
   </div></b></u></h2>
    <b> <div align="right" style="color:blue;"><p>click the above link to view history of users visited</p></div></b>
   <br />
   <?php
   if($_SESSION["type"] =="user")
   {
    echo '<div align="center"><h2>Hi... Welcome User</h2></div>';
   }
   else
   {
   ?>
   <div class="panel panel-default">
    <h1><b><div class="panel-heading">Online User Details</div></h1></b>
    <div id="user_login_status" class="panel-body">

    </div>
   </div>
   <?php
   }
   ?>
  </div>






 </body>
</html>







<script>
$(document).ready(function(){
<?php
if($_SESSION["type"] == "user")
{
?>
function update_user_activity()
{
 var action = 'update_time';
 $.ajax({
  url:"action.php",
  method:"POST",
  data:{action:action},
  success:function(data)
  {

  }
 });
}
setInterval(function(){ 
 update_user_activity();
}, 3000);


<?php
}
else
{
?>
fetch_user_login_data();
setInterval(function(){
 fetch_user_login_data();
}, 3000);
function fetch_user_login_data()
{
 var action = "fetch_data";
 $.ajax({
  url:"action.php",
  method:"POST",
  data:{action:action},
  success:function(data)
  {
   $('#user_login_status').html(data);
  }
 });
}
<?php
}
?>
});


</script>