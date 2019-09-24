<?php
$user_name=$_POST['Username'];
$pswd=$_POST['password'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teampro";

// Create connection

$con=mysqli_connect("localhost","root","","teampro");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql="SELECT * FROM users WHERE uname='".$user_name."' AND password1='".$pswd."'";
  $query=mysqli_query($con,$sql);  
    $numrows=mysqli_num_rows($query);  

  if($numrows!=0)  
  {  
  while($row=mysqli_fetch_assoc($query))  
  {  
    session_start();  
    $_SESSION['sess_user']=$user_name;  
  $dbusername=$row['uname'];  
  $dbpassword=$row['password1'];  
  }  

  if($user_name == $dbusername && $pswd == $dbpassword)  
  {  
  

  /* Redirect browser */  
  header("Location: home.php");  
  }  
  } else {  
 header("Location: index.php");  
  }  

 






    //while($row = $result->fetch_assoc()) {
     //   echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    //}
//} else {
  //  echo "0 results";
//}
//$conn->close();

/*
if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
     
    header("Location: member.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    } */



?>