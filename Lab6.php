<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Lab6</title>
<style type="text/css">
.auto-style1 {
	color: #0000FF;
	font-weight: bold;
}
.auto-style2 {
	text-align: right;
}
.auto-style4 {
	color: #FF0000;
	font-weight: bold;
}
.auto-style5 {
	color: #FF0000;
}
.auto-style6 {
	color: #FF9900;
	font-weight: bold;
}
.auto-style7 {
	vertical-align: top;
}
.auto-style8 {
	color: #0000FF;
}
</style>

<script type="text/javascript">
	function Validation(){
		var noERROR = true;
	
		var blood = document.getElementById("txtBlood");
		if ((blood.value != "A") && (blood.value != "B") && (blood.value != "AB") && (blood.value != "O")){
			alert("Blood is incorrect");
			noERROR = false;
			}
			
		var HouseNO1 = document.getElementById("txtHouseNO1");	
		var HouseNO2 = document.getElementById("txtHouseNO2");	
		if (HouseNO1.value.trim() == ""){
			alert("กรุณากรอกเลขที่บ้าน ตามทะเบียนบ้าน");
					
			}
		if (HouseNO2.value.trim() == ""){
			alert("กรุณากรอกเลขที่บ้าน ที่ติดต่อได้");
			noERROR = false;
			}
		
		var dis1 = document.getElementById("dis1");	
		var dis2 = document.getElementById("dis2");	
		if (dis1.value.trim() == ""){
			alert("กรุณากรอกตำบล ตามทะเบียนบ้าน");
			noERROR = false;
			}
		if (dis2.value.trim() == ""){
			alert("กรุณากรอกตำบล ที่ติดต่อได้");
			noERROR = false;
			}
		
		var diss1 = document.getElementById("diss1");	
		var diss2 = document.getElementById("diss2");	
		if (diss1.value.trim() == ""){
			alert("กรุณากรอกอำเภอ ตามทะเบียนบ้าน");
			noERROR = false;
			}
		if (diss2.value.trim() == ""){
			alert("กรุณากรอกอำเภอ ที่ติดต่อได้");
			noERROR = false;
			}

		var pro1 = document.getElementById("pro1");	
		var pro2 = document.getElementById("pro2");	
		if (pro1.value.trim() == ""){
			alert("กรุณากรอกจังหวัด ตามทะเบียนบ้าน");
			noERROR = false;
			}
		if (pro2.value.trim() == ""){
			alert("กรุณากรอกจังหวัด ที่ติดต่อได้");
			noERROR = false;
			}

		var post1 = document.getElementById("post1");	
		var post2 = document.getElementById("post2");	
		if(post1.value.trim().length != 5){
			alert("รหัสไปรษณีย์ ตามทะเบียนบ้าน ไม่ถูกต้อง");
			noERROR = false;
			}
		if(post2.value.trim().length != 5){
			alert("รหัสไปรษณีย์ ที่ติดต่อได้ ไม่ถูกต้อง");
			noERROR = false;
			}
		
		var tnum = document.getElementById("tnum");	
		if(tnum.value.trim().length != 10){
			alert("เบอร์โทรศัพท์ ตามทะเบียนบ้าน ไม่ถูกต้อง");
			noERROR = false;
			}
		if(noERROR == true){
			var frm = document.getElementById("form1");	
			frm.submit();
		}
	}
</script>
</head>

<body>

<form id="form1" action="process.php" method="post">

<p class="auto-style1">ส่วนที่ 1 : ข้อมูลบุคลากร</p>
	<hr /><br/>
<table style="width: 100%">
	<tr>
		<td style="width: 213px" class="auto-style2">ชื่อ-สกุล :</td>
		<td> 
		<input name="fullname" id="fullname" type="text" value="นาย สิทธิชัย โกศลกิตติพร" style="width: 158px" /> </td>
	</tr>
	<tr>
		<td style="height: 23px; width: 213px" class="auto-style2">ตำแหน่ง :</td>
		<td> <input name="career" id="career" type="text" value="นักศึกษา" /> </td>
	</tr>
	<tr>
		<td style="width: 213px; height: 24px;" class="auto-style2">เลขที่บัตรประจำตัวประชาชน :</td>
		<td> <input name="idcard" id="idcard" type="text" value="1100805197341" /> </td>
	</tr>
	<tr>
		<td style="width: 213px; height: 24px;" class="auto-style2">วันเกิด :</td>
		<td> <input name="birthdate" id="birthdate" type="text" value="13/01/2541" /> </td>
	</tr>
	<tr>
		<td style="width: 213px; height: 22px;" class="auto-style2">หมู่โลหิต :</td>
		<td style="height: 22px">
			<input name="txtBlood" style="height: 24px" type="text" id="txtBlood" />
			<span class="auto-style4">*(กรุณาระบุหมู่โลหิต)</span></td>
	</tr>
	<tr>
		<td style="width: 213px" class="auto-style2">ประเภทบุคลากร :</td>
		<td> <input type="hidden" name="pertype" id="pertype" value="นักศึกษามหาวิทยาลัย" />นักศึกษามหาวิทยาลัย </td>
	</tr>
	<tr>
		<td width: 213px" class="auto-style2">หน่วยงานที่สังกัต :</td>
		<td> <input type="hidden" name="pertype2" id="pertype2" value="มหาวิทยาลัยแม่โจ้-แพร่ เฉลิมพระเกียรติ" />มหาวิทยาลัยแม่โจ้-แพร่ เฉลิมพระเกียรติ </td>
	</tr>
</table>

<p>&nbsp;</p>
<p><span class="auto-style1">ส่วนที่ 2 : ที่อยู่</span>
<span class="auto-style4">***(ท่านสามารถแก้ไขข้อมูลที่อยู่ได้ 
หากข้อมูลไม่ตรงกับปัจจุบัน)</span></p>
<hr/><br/>
<table style="width: 100%">
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="auto-style6">&nbsp;&nbsp; ที่อยู่ (ตามทะเบียนบ้าน)</span></td>
		<td class="auto-style6">ที่อยู่ปัจจุบัน(ที่สามารถติดต่อได้)</td>
	</tr>
</table>
<table style="width: 100%">
	<tr>
		<td class="auto-style2">บ้านเลขที่ :&nbsp; </td>
		<td style="width: 317px">
		<input name="Text3" type="text" id="txtHouseNO1" style="height: 22px" /><span class="auto-style5">*</span></td>
		<td class="auto-style2">บ้านเลขที่ :</td>
		<td><input name="Text5" type="text" id="txtHouseNO2" /><span class="auto-style5">*</span></td>
	</tr>
	<tr>
		<td class="auto-style2">หมู่ :</td>
		<td style="width: 317px"><input name="Text4" type="text" /></td>
		<td class="auto-style2">หมู่ :</td>
		<td><input name="Text6" type="text" /></td>
	</tr>
	<tr>
		<td class="auto-style2" style="height: 26px">ตรอก-ซอย :</td>
		<td style="height: 26px; width: 317px;"><input name="Text7" type="text" /></td>
		<td class="auto-style2" style="height: 26px">ตรอก-ซอย :</td>
		<td style="height: 26px"><input name="Text14" type="text" /></td>
	</tr>
	<tr>
		<td class="auto-style2">ถนน :</td>
		<td style="width: 317px"><input name="Text8" type="text" /></td>
		<td class="auto-style2">ถนน :</td>
		<td><input name="Text15" type="text" /></td>
	</tr>
	<tr>
		<td class="auto-style2" style="height: 26px">ตำบล :</td>
		<td style="height: 26px; width: 317px;"><input name="Text9" type="text" id="dis1" /><span class="auto-style5">*</span></td>
		<td class="auto-style2" style="height: 26px">ตำบล :</td>
		<td style="height: 26px"><input name="Text16" type="text" id="dis2" /><span class="auto-style5">*</span></td>
	</tr>
	<tr>
		<td class="auto-style2">อำเภอ :</td>
		<td style="width: 317px"><input name="Text10" type="text" id="diss1" /><span class="auto-style5">*</span></td>
		<td class="auto-style2">อำเภอ :</td>
		<td><input name="Text17" type="text" id="diss2" /><span class="auto-style5">*</span></td>
	</tr>
	<tr>
		<td class="auto-style2">จังหวัด :</td>
		<td style="width: 317px">
		<input name="Text11" type="text" id="pro1" /><span class="auto-style5">*</span></td>
		<td class="auto-style2">จังหวัด :</td>
		<td><input name="Text18" type="text" id="pro2" /><span class="auto-style5">*</span></td>
	</tr>
	<tr>
		<td class="auto-style2">รหัสไปรษณีย์ :</td>
		<td style="width: 317px"><input name="Text12" type="text" id="post1" /><span class="auto-style5">*</span></td>
		<td class="auto-style2">รหัสไปรษณีย์ :</td>
		<td><input name="Text19" type="text" id="post2" /><span class="auto-style5">*</span></td>
	</tr>
	<tr>
		<td class="auto-style2">โทรศัพท์ :</td>
		<td style="width: 317px"><input name="Text13" type="text" id="tnum" /><span class="auto-style5">*</span></td>
		<td class="auto-style2">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
</table>

<p>&nbsp;</p>
<p><span class="auto-style1">ส่วนที่ 3 : ความประสงค์ขอมีบัตรประจำตัว</span></p>
<hr/>
<br />
<table style="width: 100%">
	<tr>
		<td class="auto-style7" style="height: 23px; width: 43px">กรณี :</td>
		<td style="height: 23px"><br />
	<input name="Radio2" type="radio" value="V1" checked="checked" /><span class="auto-style1">1. ขอมีบัตรครั้งแรก<br />
		</span><b><br class="auto-style8" />
		</b><span class="auto-style1">2. ขอมีบัตรใหม่ เนื่องจาก</span><input name="Radio1" type="radio" checked="checked" value="3" /><span class="auto-style8">บัตรหมดอายุ</span><br />
			<input name="Radio1" type="radio" value="1" /><span class="auto-style8">บัตรหายหรือถูกทำลาย 
			**(กรณีบัตรหายให้แนบหลักฐานการแจ้งความ)</span><br />
			<input name="Radio1" type="radio" value="2" /><span class="auto-style8">บัตรหมดอายุ 
			หมายเลขของบัตรเดิม (ถ้าทราบ)</span>&nbsp;
			<input name="Text20" type="text" /></td>
	</tr>
	<tr>
		<td class="auto-style7" style="height: 23px; width: 43px"></td>
		<td style="height: 23px">3. <span class="auto-style1">ขอเปลี่ยนบัตร เนื่องจาก</span>
			<input name="Radio3" type="radio" checked="checked" value="3" /><span class="auto-style8">เปลี่ยนชื่อตัว</span><br />
			<input name="Radio3" type="radio" value="1" /><span class="auto-style8">เปลี่ยนชื่อสกุล</span><br />
			<input name="Radio3" type="radio" value="2" /><span class="auto-style8">เปลี่ยนชื่อตัวและชื่อสกุล</span><br />
			<span class="auto-style6">และ/หรือ<br />
			</span><input name="Checkbox1" type="checkbox" /><span class="auto-style8">เปลี่ยนตำแหน่ง/เลื่อนตำแหน่ง</span><br />
			<input name="Checkbox2" type="checkbox" /><span class="auto-style8">อื่นๆ</span><input name="Text21" style="width: 171px" type="text" /><span class="auto-style5">*</span></td>
	</tr>
	</table>

<p>&nbsp;</p>
<p><span class="auto-style1">ส่วนที่ 4 : หลักฐานในการขอบัตรประจำตัวฯ</span></p>
<hr/>
<table style="width: 100%">
	<tr>
		<td style="width: 293px">แนบหลักฐาน :</td>
		<td>
	<input name="Radio4" type="radio" value="V1" /> <span class="auto-style8">แนบรูปถ่าย 
		1 นิ้ว 1 ใบ
			</span>
			<br />
			<input name="Checkbox3" type="checkbox" /> <span class="auto-style8">หลักฐานอื่นๆ (ถ้ามี)</span></td>
	</tr>
</table>

<br/><hr/>

	<table style="width: 100%">
		<tr>
			<td class="auto-style2" style="height: 28px; width: 530px">
			<input name="btnSubmit" type="button" value="พิมพ์ใบคำขอ (PDF)" onclick="Validation();" /></td>
			<td style="height: 28px"></td>
			<td style="height: 28px">
			<input name="Button2" type="reset" value="กลับสู่หน้าแรก" /></td>
		</tr>
	</table>
	
</form>

</body>

</html>
