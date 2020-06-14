<?php  
 $connect = mysqli_connect("localhost", "id14078738_root", "Password@000", "id14078738_navigus");  
 session_start();  
 if(isset($_SESSION["user_email"]))  
 {  
      header("location:entry.php");  
 }  
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["user_id"]) || empty($_POST["user_name"]) || empty($_POST["user_email"]) || empty($_POST["user_password"]) || empty($_POST["user_type"]) || empty($_POST["user_image"]))
      {  
           echo '<script>alert("All Fields are required")</script>';  
      }  
      else  
      {  

           $user_id = mysqli_real_escape_string($connect, $_POST["user_id"]); 
           $user_name = mysqli_real_escape_string($connect, $_POST["user_name"]); 

           $user_email = mysqli_real_escape_string($connect, $_POST["user_email"]);  
           $user_password = mysqli_real_escape_string($connect, $_POST["user_password"]);  
           $user_password = password_hash($user_password, PASSWORD_DEFAULT);  

           $user_type = mysqli_real_escape_string($connect, $_POST["user_type"]); 
           $user_image = mysqli_real_escape_string($connect, $_POST["user_image"]); 

           $query = "INSERT INTO user_details(user_id, user_name, user_email, user_password, user_type, user_image) VALUES('$user_id', '$user_name','$user_email', '$user_password','$user_type', '$user_image')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }  
      }  
 }  
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>NAVIGUS ASSIGNMENT</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                               <br />  
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                <h2 align="center">Login</h2>  
                <br />  
                
                <?php       
                }  
                else  
                {  
                ?>  
                <b><H2><u><h3 align="center" style="color:grey;">WELOME REGISTER HERE TO LOGIN</h3> </u> </H2></b>
                <br />  
                <form method="post"> 

                      <label style="color:red;">Enter Id</label>  
                     <input type="text" name="user_id" class="form-control" style="color:black;" />  
                     <br /> 
                     
                      <label style="color:red;">Enter Name</label>  
                     <input type="text" name="user_name" class="form-control" style="color:black;" />  
                     <br /> 

                     <label style="color:red;">Enter User Email</label>  
                     <input type="text" name="user_email" class="form-control" style="color:black;"/>  
                     <br />  

                     <label style="color:red;">Enter Password</label>  
                     <input type="text" name="user_password" class="form-control" style="color:black;"/>  
                     <br />  
                     

                      <label style="color:red;">Enter User Type(eg. type 'master' or 'user')</label>  
                     <input type="text" name="user_type" class="form-control" style="color:black;" />  
                     <br /> 

                      <label style="color:red;">Enter user Image Name  (eg. '1.png' or '2.png'...'10.png')</label>  
                     <input type="text" name="user_image" class="form-control" style="color:black;"/>  
                     <br /> 
                     <input type="submit" name="register" value="Register" class="btn btn-info" />  
                     <h2><u><p align="center"><a href="index.php?action=login" style="color:gold;">Login</a></p></u></h2>  
                </form>  
                <?php  
                }  
                ?>  
           </div>  
           <style>
body {
     background-color: #002727;
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: lightblue;
  color: white;
}

</style>
      </body>  
 </html>  