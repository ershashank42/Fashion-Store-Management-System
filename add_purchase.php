<?php
    session_start();
    $con = mysqli_connect("localhost","root","","fashion_store");
    $purch_id = $_POST['purch_id'];
    $qty = $_POST['qty'];
    $purch_amt = $_POST['amt'];
    $bill_type = $_POST['bill_type'];
    $supplier_id = $_POST['supplier_id'];
    $employee = $_POST['employee'];
    $query = "insert into purchase (purch_id,qty,purch_amt,bill_type,supplier_id,employee) values ($purch_id,$qty,$purch_amt,'$bill_type',$supplier_id,$employee)";
    $result = mysqli_query($con,$query);

    if($result){
      echo "purchase added successfully";
    }
    else{
      echo "can't add";
    }

?>
