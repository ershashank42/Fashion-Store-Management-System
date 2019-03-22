<?php
    session_start();
    $con = mysqli_connect("localhost","root","","fashion_store");
    $cust_id = $_POST['a'];
    $c_name = $_POST['b'];
    $c_phone = $_POST['c'];
    $query = "insert into customer values ($cust_id,'$c_name',$c_phone)";
    $result = mysqli_query($con,$query);

    if($result){
      echo "customer added successfully";
    }
    else{
      echo "Not a new customer";
    }
?>
