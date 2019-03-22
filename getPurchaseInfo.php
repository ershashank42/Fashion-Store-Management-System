<?php
  $con = mysqli_connect("localhost","root","","fashion_store");
  $query = "Select * from purchase order by date";
  $result = mysqli_query($con,$query);
  $num = mysqli_num_rows($result);
?>

<html>
<title>purchase info</title>
<head>
  <style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
    color: black;
}

#customers tr:nth-child(even){background-color: transparent;}

#customers tr:hover {background-color: transparent;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: transparent;
    color: black;
}

h1{
    margin: 0;
    padding: 30 10 30px;
    text-align: center;
    font-size: px;
    color: black;
}

body{
    margin: 0;
    padding: 0;
    background: url(picture13.jpg);
    background-size: 1200px 700px;
    font-family: sans-serif;
}

</style>
  </head>
<body>
  <h1>All Purchase Data</h1>
  <table id="customers" align="center">
    <tr>
      <th>Purchase ID</th>
      <th>Quantity</th>
      <th>Purchase Amount</th>
      <th>Date Time</th>
      <th>Bill Type</th>
      <th>Supplier ID</th>
      <th>Employee ID</th>
    </tr>
    <?php
      for($i=0;$i<$num;$i++)
      {
        $row = mysqli_fetch_array($result);
        ?>
          <tr>
            <td><?php echo $row['purch_id']; ?></td>
            <td><?php echo $row['qty']; ?></td>
            <td><?php echo $row['purch_amt']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['bill_type']; ?></td>
            <td><?php echo $row['sup_id']; ?></td>
            <td><?php echo $row['emp_id']; ?></td>
          </tr>
        <?php
      }
    ?>
  </table>
</body>
</html>
