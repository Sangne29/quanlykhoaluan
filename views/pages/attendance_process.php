
<?php
date_default_timezone_set("asia/Ho_Chi_Minh");
require_once('views/header.php');  
require_once ('config.php');
require_once ('system/load.php');
require_once ('system/core.php');

$servername = "sql205.infinityfree.com";
$database = "quanlykhoaluan";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    echo "Connected failfail";;
}
echo "Connected successfully";

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$stt = "";
$pass = $_SESSION['create_attendance_password'];
$date_attendance = date("d-m-Y");
$student_fullname = $_SESSION['customer_fullname'];
$mssv = $_SESSION['customer_username'];
$gender = $_SESSION['customer_gender'];
$address = $_SESSION['customer_address'];
$phone = $_SESSION['customer_phone'];
$email = $_SESSION['customer_email'];

//Lấy giá trị POST từ form vừa submit
    if(isset($_POST['save'])){
		$attendance_password = $_POST['attendance_password'];
	}
    echo $attendance_password;
    echo $_SESSION['create_attendance_password'];
//insert
if ($attendance_password == $pass){
    $query = "INSERT INTO attendance (date_attendance, student_fullname, mssv, gender, address, phone, email)
        VALUES ('$date_attendance', '$student_fullname', '$mssv', '$gender', '$address', '$phone', '$email')";
    mysqli_query($conn, $query);
    set_flash('thongbao','Điểm danh thành công.');
}else{
    set_flash('thongbaoloi','Bạn đã nhập sai mật khẩu.');
}
redirect('index.php?option=attendance');

// ?>