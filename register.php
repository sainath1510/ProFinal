<?php



 
  
    $user_name = $_POST['Username'];
    $pswd= $_POST['password'];
    $email=$_POST['email'];
    $mobile=$_POST['mbn'];
    $rollno=$_POST['rollno'];
    $year=$_POST['year'];
    $branch=$_POST['branch'];
    $con=mysqli_connect("localhost","root","","teampro");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    $query=mysqli_query($con,"SELECT * FROM users WHERE uname='".$user_name."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO users VALUES('$user_name','$pswd','$email','$mobile','$rollno','$year','$branch')";  
  
    $result=mysqli_query($con,$sql);  
        if($result){  
            header("Location: login.php");
            
    } else {  
        
      echo "invalid";
         
      
    }  
  
    } else {  
        die(header("location:index.php?loginFailed=true&reason=username")); 
    }  
  

?>