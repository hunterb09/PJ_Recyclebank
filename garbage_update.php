<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
$link = mysqli_connect("localhost", "root");
mysqli_set_charset($link,'utf8');
$sql = "use recyclebank";
$result = mysqli_query($link,$sql);

//ตรวจสอบถ้าว่างให้เด้งไปหน้าหลักและไม่แก้ไขข้อมูล
if($_POST["GID"]==''){
    echo "<script type='text/javascript'>"; 
    echo "alert('Error Contact Admin !!');"; 
    echo "window.location = 'garbage_show.php'; "; 
    echo "</script>"; 
}

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
	$GID = $_POST["GID"];
	$Gtype = $_POST["Gtype"]; 
	$Gname = $_POST["Gname"];
	$Ggroup = $_POST["Ggroup"];
	$Gpirce = $_POST["Gpirce"];

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
	
	$sql = "UPDATE garbage SET 
			Gtype='$Gtype' , 
			Gname='$Gname' , 
			Ggroup='$Ggroup' ,
			Gpirce='$Gpirce' 
			WHERE GID='$GID' ";

$result = mysqli_query($link, $sql) or die ("Error in query: $sql " . mysqli_error());


//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Update Succesfuly');";
	echo "window.location = 'garbage_show.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Update again');";
        echo "window.location = 'garbage_show.php'; ";
	echo "</script>";
    }

mysqli_close($link); //ปิดการเชื่อมต่อ database     
?>