<?php
    require("navbar_0.html");
    require("connection.php");
    //1. เชื่อมต่อ database:
  	$sql = "SELECT * FROM garbage ORDER BY GID asc" or die("Error:" . mysqli_error());
  	$result = mysqli_query($link,$sql);
?>

<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ตาราง</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  	<script src="js/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>	

    <style>
      th,td{
        text-align: center;
      }
    </style>


  </head>
  <body>
        <h1 class="mt-2 text-center"><u>ตารางขยะ</u></h1>
        <table class="mt-2 table table-striped table-borderless table-sm">
          <thead class="thead-dark">
              <tr>
                <th width="75">ลำดับ</th>
                <th width="200">ประเภท</th>
                <th width="200">รายการ</th>
                <th width="50">ราคา/kg</th>
              </tr>
          </thead>
          <tbody>

            <?php
                      if (mysqli_num_rows($result)>0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          //echo "<td>".$i."</td>";
                          echo "<td>".$row['GID']."</td>";
                          echo "<td>".$row['Gtype']."</td>";
                          echo "<td>".$row['Gname']."</td>";
                          echo "<td>".$row['Gpirce']."</td>";
                          echo "</tr>";
                          //$i++;
                        }
                      }else {
                        echo "empty data";
                      }
            ?>
          </tbody>
        </table>
  </body>
</html>
