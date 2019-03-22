<?php
  $con = mysqli_connect("localhost","root","","fashion_store");
  $query = "Select * from customer";
  $result = mysqli_query($con,$query);
  $num = mysqli_num_rows($result);
?>

<html>
<title>brands</title>
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
    color: white;
}

#customers tr:nth-child(even){background-color: transparent;}

#customers tr:hover {background-color: transparent;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: transparent;
    color: white;
}

h1{
    margin: 0;
    padding: 30 10 30px;
    text-align: center;
    font-size: px;
    color: white;
}

body{
    margin: 0;
    padding: 0;
    background: url(picture12.jpg);
    background-size: cover;
    font-family: sans-serif;
}
</style>
  </head>
<body>
  <h1>All Customers Data</h1>
  <table id="customers" align="center">
    <tr>
      <th>Customer ID</th>
      <th>Name</th>
      <th>Contact</th>
    </tr>
    <?php
      for($i=0;$i<$num;$i++)
      {
        $row = mysqli_fetch_array($result);
        ?>
          <tr>
            <td><?php echo $row['cust_id']; ?></td>
            <td><?php echo $row['c_name']; ?></td>
            <td><?php echo $row['c_phone']; ?></td>
          </tr>
        <?php
      }
    ?>
  </table>
</body>
</html>
