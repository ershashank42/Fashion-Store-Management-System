<?php
  $con = mysqli_connect("localhost","root","","fashion_store");
  $query = "Select b_date,sum(price) from bill group by b_date";
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
    background: url(picture14.jpg);
    background-size: cover;
    font-family: sans-serif;
}

</style>
  </head>
<body>
  <h1>All sales Data</h1>
  <table id="customers" align="center">
    <tr>
      <th>Date</th>
      <th>Total Sales</th>
    </tr>
    <?php
      for($i=0;$i<$num;$i++)
      {
        $row = mysqli_fetch_array($result);
        ?>
          <tr>
            <td><?php echo $row['b_date']; ?></td>
            <td><?php echo $row['sum(price)']; ?></td>
          </tr>
        <?php
      }
    ?>
  </table>
</body>
</html>
