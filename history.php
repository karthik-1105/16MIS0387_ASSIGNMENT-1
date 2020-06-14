<!DOCTYPE html>
<html>
<head>
<title>history of users visited</title>
<style>

table {
border-collapse: collapse;
width: 100%;
color: white;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #5F9EA0;
color: #800000;
}
tr:nth-child(even) {background-color: black}
</style>
</head>
<body>
	<b><h2><div align="right">
    <a href="logout.php">Logout</a>
   </div></h2></b>

 <h1><b> <div align="center" style="color:silver;"><p>HISTORY OF USERS VISITED</p></div></b></h1>
   <br />
<table>
<tr>
<th>NO OF USERS</th>
<th>USER_ID</th>
<th>USERNAME</th>
<th>DATE AND TIME</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "id14078738_root", "Password@000", "id14078738_navigus");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT login_details_id, user_id, last_activity,user_email FROM login_details";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["login_details_id"]. "</td><td>" . $row["user_id"] . "</td><td>"
. $row["user_email"]. "</td><td>"
. $row["last_activity"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
 <style>
body {
	 background-image: url("https://i.pinimg.com/originals/a0/74/a8/a074a8a62cf3c17b39c70aa1270ef4eb.jpg");
  background-color: red;
}

</style>
</body>
</html>