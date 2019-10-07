<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
$link = mysqli_connect("localhost", "root");
mysqli_set_charset($link,'utf8');
$sql = "use recyclebank";
$result = mysqli_query($link,$sql);

//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลักและไม่แก้ไขข้อมูล
if($_POST["MID"]==''){
    echo "<script type='text/javascript'>"; 
    echo "alert('Error Contact Admin !!');"; 
    echo "window.location = 'member_show.php'; "; 
    echo "</script>"; 
}

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	$MID = $_POST["MID"];
	$Mname = $_POST["Mname"]; 
	$Mdate = $_POST["Mdate"];
	$Mposition = $_POST["Mposition"];
    $Mbranch = $_POST["Mbranch"];
    $MstuID = $_POST["MstuID"];
    $Myear = $_POST["Myear"];
    $MphoneN = $_POST["MphoneN"];
    $Memail = $_POST["Memail"];
    $Mbalance = $_POST["Mbalance"];

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
	$sql = "UPDATE member SET 
			Mname='$Mname' , 
			Mdate='$Mdate' , 
			Mposition='$Mposition' ,
			Mbranch='$Mbranch' ,
            MstuID='$MstuID' ,
            Myear='$Myear'  ,
            MphoneN='$MphoneN' ,
            Memail='$Memail' ,
            Mbalance='$Mbalance'

			WHERE MID='$MID' ";

$result = mysqli_query($link, $sql) or die ("Error in query: $sql " . mysqli_error());


//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'member_show.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
        echo "window.location = 'member_show.php'; ";
	echo "</script>";
    }

mysqli_close($link); //ปิดการเชื่อมต่อ database     
?>