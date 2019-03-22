<?php
    session_start();
    $con = mysqli_connect("localhost","root","","fashion_store");
    $br_id = $_POST['br_id'];
    $sup_id = $_POST['sup_id'];
    $br_name = $_POST['br_name'];
    $sup_name = $_POST['sup_name'];
    $query = "insert into brands values ($br_id,$sup_id,'$br_name','$sup_name')";
    $result = mysqli_query($con,$query);

    if($result){
      echo "brand added successfully";
    }
    else{
      echo "brand already exist";
    }

?>
