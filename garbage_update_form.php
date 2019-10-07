<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
$link = mysqli_connect("localhost", "root");
mysqli_set_charset($link,'utf8');
$sql = "use recyclebank";
$result = mysqli_query($link,$sql);	
//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลัก
if($_GET["GID"]==''){ 
    echo "<script type='text/javascript'>"; 
    echo "alert('Error Contact Admin !!');"; 
    echo "window.location = 'garbage_show.php'; "; 
    echo "</script>"; 
}

//รับค่าไอดีที่จะแก้ไข
$GID = mysqli_real_escape_string($link,$_GET['GID']);

//2. query ข้อมูลจากตาราง: 
$sql = "SELECT * FROM garbage WHERE GID='$GID' ";
$result = mysqli_query($link, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
session_start();
//สร้างแถบเมนู
require("navbar_officer.php");
?>

<form action="garbage_update.php" method="post" name="updates" id="updates">
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2" align="center" bgcolor="#D6D5D6"><b>แก้ไขข้อมูลขยะ</b></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">ID :</td>
      <td bgcolor="#EBEBEB">
      
      <p><input type="text" name="GID" value="<?php echo $GID; ?>" disabled='disabled' />
<input type="hidden" name="GID" value="<?php echo $GID; ?>" /> 
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">ประเภทขยะ :</td>
      <td bgcolor="#EBEBEB"><select name="Gtype" id="Gtype">
                                <option value="<?=$Gtype;?>"><?=$Gtype;?></option>
                                <option value="พลาสติก">พลาสติก</option>
								<option value="กระดาษ">กระดาษ</option>
								<option value="แก้ว">แก้ว</option>
								<option value="โลหะ">โลหะ</option>
							</select>
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">ชื่อขยะ :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="Gname" type="text" id="Gname" value="<?=$Gname;?>" size="30" required="required"  /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">กลุ่มขยะ :</td>
      <td bgcolor="#EBEBEB"><select name="Ggroup" id="Ggroup">
                                <option value="<?=$Ggroup;?>"><?=$Ggroup;?></option>
                                <option value="01/05/2019-30/06/2019">01/05/2019-30/06/2019</option>
								<option value="01/07/2019+">01/07/2019+</option>
							</select>
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">ราคาขยะ :</td>
      <td bgcolor="#EBEBEB"><input type="text" name="Gpirce" id="Gpirce" value="<?=$Gpirce;?>" required="required"/></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;
        <input type="button" value=" ยกเลิก " onclick="window.location='garbage_show.php' " /> <!-- ถ้าไม่แก้ไขให้กลับไปหน้าแสดงรายการ -->
        &nbsp;
        <input type="submit" name="Update" id="Update" value="Update" /></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
  </table>
</form>