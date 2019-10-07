<?php
    require("connection.php");
    $sql = "SELECT * FROM stationary ORDER BY SID asc" or die("Error:" . mysqli_error()); 
  	$result = mysqli_query($link,$sql);	
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Show Data</title>


    <style>
      th,td{
        text-align: center;
      }
    </style>


  </head>
  <body>
        <table border="2">
          <tr>
            <td width="75">ลำดับ</td>
            <td width="200">เครื่องเขียน</td>
            <td width="100">ราคา</td>
            <td width="100">จำนวนคงเหลือ</td>
          </tr>
          <?php
                      if (mysqli_num_rows($result)>0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>".$row['SID']."</td>";
                          echo "<td>".$row['Sname']."</td>";
                          echo "<td>".$row['Spirce']."</td>";
                          echo "<td>".$row['Samount']."</td>";
                          echo "</tr>";
                        }
                      }else {
                        echo "empty data";
                      }
           ?>
        </table>
  </body>
</html>
