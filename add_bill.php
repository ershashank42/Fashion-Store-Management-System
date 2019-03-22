<?php
    session_start();
    $con = mysqli_connect("localhost","root","","fashion_store");
    $b_date = $_POST['b_date'];
    $cust_id = $_POST['cust_id'];
    $inv_id = $_POST['inv_id'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $emp_id = $_POST['emp_id'];
    $query = "insert into bill(b_date,cust_id,inv_id,price,qty,emp_id) values ('$b_date',$cust_id,$inv_id,$price,$qty,$emp_id)";
    $result = mysqli_query($con,$query);

    if($result){
      echo "bill added successfully";
    }
    else{
      echo "bill already exist";
    }

?>
