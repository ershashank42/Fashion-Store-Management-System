<?php
    session_start();
    $con = mysqli_connect("localhost","root","","fashion_store");
    $eid = $_POST['e_id'];
    $ename = $_POST['e_name'];
    $ephone = $_POST['e_phone'];
    $eadd = $_POST['e_add'];
    $gender = $_POST['gender'];
    $pos = $_POST['position'];
    $salary = $_POST['salary'];
    $query = "insert into employee values ($eid,'$ename',$ephone,'$eadd','$gender','$pos',$salary)";
    $result = mysqli_query($con,$query);

    if($result){
      echo "employee added successfully";
    }
    else{
      echo "employee already exist";
    }

?>
