<?php
    session_start();
    $con = mysqli_connect("localhost","root","","fashion_store");
    $date = $_POST['date'];
    $query = "insert into sales(amount,date) values (0,$date)";
    $result = mysqli_query($con,$query);
    if($result){
      echo "sales added successfully";
    }
    else{
      echo "sales already exist";
    }

?>
