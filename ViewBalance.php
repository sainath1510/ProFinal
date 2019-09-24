
<html>
    <head>
        <title>Recharge</title>
    </head>
    <body>
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <input type="number" name="cardNo" placeholder="Enter your Card Number">
            <input type="submit" name="viewBal" value="View Balance">
      
        </form>
       
        
    </body>
</html>

<?php
    
    $x=0;
    if(isset($_POST['cardNo'])){
    $card_num=(int )$_POST['cardNo'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="teampro";//databasename
    $conn = new mysqli($servername, $username, $password,$db);
    
    $query="select balance from Balance where card_num=".(int)$card_num;
    $rows=$conn->query($query);
    
    if ($rows->num_rows ==1) {
    
        while($row = $rows->fetch_assoc()) {
         global $x;
         $x= $row['balance'];
         echo "<p><strong>The Balance is: ".$x." </strong></p>";
            
        }
    } else {
        echo "0 results";
    }
}
?>