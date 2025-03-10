<?php
session_start();
$connection = mysqli_connect("localhost","root","","photography");
include('includes/header.php');
?>
       
        
<!DOCTYPE html>
<html>
<head>
        <style type="text/css">

.wrapper{
    height: 900px;
    width: 1200px;
    margin:50px auto;
    background-color: white; 
    color:black;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
}

table{
  border-collapse: collapse;
  box-shadow:  0 10px 20px 0 rgba(0,0,0,0.3);
  border-radius: 2px;
  margin: auto;
}

th,td{
  border: 2px groove black;
  padding: 12px 60px;
  text-align: center;
  color: black;
}

th{
  text-transform: capitalize;
  font-weight: 500;
}

h1{
  padding-top: 100px;
  font-size: 28px;
  color: black;
  text-align: center;
  letter-spacing: 1px;
}

.button{
  color:black;
  background:white;
  border-radius: 2px;
  border: 2px solid white;
  font-size: 15px;
  border-color: #04AA6D;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
  position: absolute;
  bottom: 8%;
  left: 50%;
  transform: translateX(-50%);
}

.button1{
  color:black;
  background:white;
  border-radius: 2px;
  border: 2px solid white;
  font-size: 15px;
  border-color: #0F52BA;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
  position: absolute;
  bottom: 2%;
  left: 50%;
  transform: translateX(-50%);
}


.button:hover{
  background-color: #04AA6D;
  border-color: white;
  color: white;
}

.button1:hover{
  background-color: #0F52BA;
  border-color: white;
  color: white;
}

.table-responsive{
    padding:60px 10px ;
    font-size: 41px;
    display: flex;
}

@media screen and (max-width: 768px) {
    .wrapper {
        width: 90%; /* Adjust width for smaller screens */
    }
}

@media screen and (max-width: 480px) {
    .wrapper {
        width: 95%; /* Further adjust width for even smaller screens */
    }
}

</style>

<title>View Profile</title>
<br>
</head>
<body>
        <div class="wrapper">

<?php

@include 'connection.php';

$q = mysqli_query($connection,"SELECT * FROM booking WHERE name='$_SESSION[name]' = '$row[name]';");


?>
<h1>MY PROFILE</h1>

<?php

    $row=mysqli_fetch_assoc($q);

   echo "<div style='text-align: center'>
   <img class='img-circle profile-img' height=150 width=150 src='img_avatar2.png'>
   </div>";

?>


        <div class="table-responsive">
<?php
     
    echo"<table>";
        echo"<tr>";
            echo "<td>";
                echo "<b> User Name : </b>";
            echo "</td>";
             echo "<td>";
             echo $row['name'];
             echo "</td>";
        echo"</tr>";

        echo"<tr>";
             echo "<td>";
             echo "<b> Email : </b>";
             echo "</td>";
        echo "<td>";
             echo $row['email'];
             echo "</td>";
        echo"</tr>";

        echo"<tr>";
        echo "<td>";
             echo  "<b> Service: </b>";
             echo "</td>";
        echo "<td>";
             echo $row['service'];
             echo "</td>";
        echo"</tr>";

        echo"<tr>";
        echo "<td>";
             echo "<b>Service Type : </b>";
             echo "</td>";
        echo "<td>";
             echo $row['service_type'];
             echo "</td>";
        echo"</tr>";

        echo"<tr>";
        echo "<td>";
             echo  "<b>Booking date : </b>";
             echo "</td>";
        echo "<td>";
             echo $row['booking_date'];
             echo "</td>";
        echo"</tr>";


        echo"<tr>";
        echo "<td>";
             echo  "<b> Booking Status: </b>";
             echo "</td>";
        echo "<td>";
             echo $row['status'];
             echo "</td>";
        echo"</tr>";


    echo"</table>";

?>
</div>
</body>
</html>
        
