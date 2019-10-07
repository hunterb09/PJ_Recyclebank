<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
$link = mysqli_connect("localhost", "root");
mysqli_set_charset($link,'utf8');
$sql = "use recyclebank";
$result = mysqli_query($link,$sql);	
//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลัก
if($_GET["MID"]==''){ 
    echo "<script type='text/javascript'>"; 
    echo "alert('Error Contact Admin !!');"; 
    echo "window.location = 'member_show.php'; "; 
    echo "</script>"; 
}

//รับค่าไอดีที่จะแก้ไข
$MID = mysqli_real_escape_string($link,$_GET['MID']);

//2. query ข้อมูลจากตาราง: 
$sql = "SELECT * FROM member WHERE MID='$MID' ";
$result = mysqli_query($link, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
session_start();
//สร้างแถบเมนู
require("navbar_officer.php");
?>

<form action="member_update.php" method="post" name="updates" id="updates">
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2" align="center" bgcolor="#D6D5D6"><b>แก้ไขข้อมูลสมาชิก</b></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">ID :</td>
      <td bgcolor="#EBEBEB">
      
      <p><input type="text" name="MID" value="<?php echo $MID; ?>" disabled='disabled' />
<input type="hidden" name="MID" value="<?php echo $MID; ?>" /> 
      </td>
    </tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">ชื่อ :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="Mname" type="text" id="Mname" value="<?=$Mname;?>" size="30" required="required"  /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">วัน/เดือน/ปี เกิด :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="Mdate" type="date" id="Mdate" value="<?=$Mdate;?>" size="30"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">ตำแหน่ง :</td>
      <td width="583" bgcolor="#EBEBEB"><input name="Mposition" type="text" id="Mposition" value="<?=$Mposition;?>" size="30"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">สาขาวิชา :</td>
      <td bgcolor="#EBEBEB"><select name="Mbranch" id="Mbranch">
                                <option value="<?=$Mbranch;?>"><?=$Mbranch;?></option>
                                <option value=""></option>
								<option value="การตลาด">การตลาด</option>
								<option value="ระบบสารสนเทศทางธุรกิจ">ระบบสารสนเทศทางธุรกิจ(BIS)</option>
								<option value="วิทยาศาสตร์และเทคโนโลยีคอมพิวเตอร์">วิทยาศาสตร์และเทคโนโลยีคอมพิวเตอร์(CSnT)</option>
								<option value="เกษตรป่าไม้">เกษตรป่าไม้</option>
								<option value="การบัญชี">การบัญชี</option>
								<option value="การจัดการชุมชน">การจัดการชุมชน</option>
								<option value="พัฒนาการท่องเที่ยว">พัฒนาการท่องเที่ยว</option>
								<option value="เศรษฐศาสตร์ประยุกต์เพื่อการพัฒนาชุมชน">เศรษฐศาสตร์ประยุกต์เพื่อการพัฒนาชุมชน</option>
								<option value="รัฐศาสตร์">รัฐศาสตร์</option>
								<option value="เทคโนโลยีชีวภาพทางอุตสาหกรรมเกษตร">เทคโนโลยีชีวภาพทางอุตสาหกรรมเกษตร</option>
								<option value="ชีววิทยาประยุกต์">ชีววิทยาประยุกต์</option>
								<option value="เทคโนโลยีการอาหาร">เทคโนโลยีการอาหาร</option>
								<option value="เทคโนโลยีการผลิตพืช">เทคโนโลยีการผลิตพืช</option>
								<option value="เทคโนโลยีการผลิตสัตว์">เทคโนโลยีการผลิตสัตว์</option>
								<option value="เทคโนโลยีอุตสาหกรรมป่าไม้">เทคโนโลยีอุตสาหกรรมป่าไม้</option>
                            </select>
        </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">รหัสนักศึกษา:</td>
      <td width="583" bgcolor="#EBEBEB"><input name="MstuID" type="text" id="MstuID" value="<?=$MstuID;?>" size="30"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">ชั้นปี :</td>
      <td bgcolor="#EBEBEB"><select name="Myear" id="Myear">
                                <option value="<?=$Myear;?>"><?=$Myear;?></option>
                                <option value=""></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="4+">4+</option>
							</select>
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">หมายเลขโทรศัพท์ :</td>
      <td bgcolor="#EBEBEB"><input type="text" name="MphoneN" id="MphoneN" value="<?=$MphoneN;?>"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">อีเมล์ :</td>
      <td bgcolor="#EBEBEB"><input type="text" name="Memail" id="Memail" value="<?=$Memail;?>"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">จำนวนเงินปัจจุบัน :</td>
      <td bgcolor="#EBEBEB">
      
      <p><input type="text" name="Mbalance" value="<?php echo $Mbalance; ?>" disabled='disabled' />
<input type="hidden" name="Mbalance" value="<?php echo $Mbalance; ?>" /> 
      </td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;
        <input type="button" value=" ยกเลิก " onclick="window.location='member_show.php' " /> <!-- ถ้าไม่แก้ไขให้กลับไปหน้าแสดงรายการ -->
        &nbsp;
        <input type="submit" name="Update" id="Update" value="Update" /></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
  </table>
</form>