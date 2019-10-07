<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
$link = mysqli_connect("localhost", "root");
mysqli_set_charset($link,'utf8');
$sql = "use recyclebank";
$result = mysqli_query($link,$sql);	
//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลัก
if($_GET["SID"]==''){ 
    echo "<script type='text/javascript'>"; 
    echo "alert('Error Contact Admin !!');"; 
    echo "window.location = 'stationary_show.php'; "; 
    echo "</script>"; 
}

//รับค่าไอดีที่จะแก้ไข
$SID = mysqli_real_escape_string($link,$_GET['SID']);

//2. query ข้อมูลจากตาราง: 
$sql = "SELECT * FROM stationary WHERE SID='$SID' ";
$result = mysqli_query($link, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
session_start();
//สร้างแถบเมนู
require("navbar_officer.php");
?>

<form action="stationary_update.php" method="post" name="updates" id="updates">
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2" align="center" bgcolor="#D6D5D6"><b>แก้ไขข้อมูลเครื่องเขียน</b></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">ID :</td>
      <td bgcolor="#EBEBEB">
      
      <p><input type="text" name="SID" value="<?php echo $SID; ?>" disabled='disabled' />
<input type="hidden" name="SID" value="<?php echo $SID; ?>" />
      
      
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">ชื่อเครื่องเขียน :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="Sname" type="text" id="Sname" value="<?=$Sname;?>" size="30" required="required"  /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">กลุ่มเครื่องเขียน :</td>
      <td bgcolor="#EBEBEB"><select name="Sgroup" id="Sgroup">
                                <option value="<?=$Sgroup;?>"><?=$Sgroup;?></option>
								<option value="01/05/2019+">01/05/2019+</option>
							</select>
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">ราคาเครื่องเขียน :</td>
      <td bgcolor="#EBEBEB"><input type="text" name="Spirce" id="Spirce" value="<?=$Spirce;?>" required="required"/></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;
        <input type="button" value=" ยกเลิก " onclick="window.location='stationary_show.php' " /> <!-- ถ้าไม่แก้ไขให้กลับไปหน้าแสดงรายการ -->
        &nbsp;
        <input type="submit" name="Update" id="Update" value="Update" /></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
  </table>
</form>