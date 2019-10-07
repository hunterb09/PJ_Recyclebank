<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
$link = mysqli_connect("localhost", "root");
mysqli_set_charset($link,'utf8');
$sql = "use recyclebank";
$result = mysqli_query($link,$sql);	
//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลัก
if($_GET["OID"]==''){ 
    echo "<script type='text/javascript'>"; 
    echo "alert('Error Contact Admin !!');"; 
    echo "window.location = 'officer_show.php'; "; 
    echo "</script>"; 
}

//รับค่าไอดีที่จะแก้ไข
$OID = mysqli_real_escape_string($link,$_GET['OID']);

//2. query ข้อมูลจากตาราง: 
$sql = "SELECT * FROM officer WHERE OID='$OID' ";
$result = mysqli_query($link, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
session_start();
//สร้างแถบเมนู
require("navbar_officer.php");
?>

<form action="officer_update.php" method="post" name="updates" id="updates">
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2" align="center" bgcolor="#D6D5D6"><b>แก้ไขข้อมูลเจ้าหน้าที่</b></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">ลำดับ :</td>
      <td bgcolor="#EBEBEB">
      
      <p><input type="text" name="OID" value="<?php echo $OID; ?>" disabled='disabled' />
<input type="hidden" name="OID" value="<?php echo $OID; ?>" /> 
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">ไอดี :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="ID" type="text" id="ID" value="<?=$ID;?>" size="30" required="required"  /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">พาสเวิร์ด :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="Opassword" type="text" id="Opassword" value="<?=$Opassword;?>" size="30" required="required"  /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">ชื่อ :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="Oname" type="text" id="Oname" value="<?=$Oname;?>" size="30" required="required"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">สเตตัส:</td>
      <td width="583" bgcolor="#EBEBEB">
                            <input type="radio" name="Ostatus" onclick="check(this.value)" value="admin">admin
							<input type="radio" name="Ostatus" onclick="check(this.value)" value="officer" checked="checked">officer</td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;
        <input type="button" value=" ยกเลิก " onclick="window.location='officer_show.php' " /> <!-- ถ้าไม่แก้ไขให้กลับไปหน้าแสดงรายการ -->
        &nbsp;
        <input type="submit" name="Update" id="Update" value="Update" /></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
  </table>
</form>