<?php
    session_start();
    $con = mysqli_connect("localhost","root","","fashion_store");
    $inv_id = $_POST['inv_id'];
    $item_name = $_POST['item_name'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $ty = $_POST['ty'];
    $purchase_id = $_POST['purchase_id'];
    $query = "insert into inventory values ($inv_id,'$item_name',$qty,$price,'$ty',$purchase_id)";
    $result = mysqli_query($con,$query);

    if($result){
      echo "inventory added successfully";
    }
    else{
      echo "can't add";
    }

?>
