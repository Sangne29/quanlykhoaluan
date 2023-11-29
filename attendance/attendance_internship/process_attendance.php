<?php


// Kết nối đến cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'quanlykhoaluan');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$mssv = $_POST['student_id'];
$file_report = $_FILES['file_report'];

// Truy vấn để lấy thông tin sinh viên từ bảng user
$query_user = "SELECT * FROM user WHERE username = '$mssv'";
$result_user = $conn->query($query_user);

if ($result_user->num_rows > 0) {
    // Lấy thông tin sinh viên từ bảng user
    $row_user = $result_user->fetch_assoc();
    $full_name = $row_user['fullname'];
    $student_id = $row_user['username'];
    $gender = $row_user['gender'];
    $address = $row_user['address'];
    $phone = $row_user['phone'];
    $email = $row_user['email'];
    $datetime = date('Y-m-d H:i:s');
    // Đọc nội dung của tệp và chuẩn bị cho việc chèn vào cơ sở dữ liệu
    $file_report_content = addslashes(file_get_contents($file_report['tmp_name']));
    $file_report_type = $file_report['type'];
   
    // Thêm dữ liệu vào bảng attendance
    $query_attendance = "INSERT INTO attendance_internship (mssv, student_fullname, gender, address ,phone, email, date_attendance, file_report) VALUES ('$student_id', '$full_name','$gender', '$address', '$phone', '$email', '$datetime', '$file_report_type')";
    
    if ($conn->query($query_attendance) === TRUE) {
        header("Location: attendance_success.html");
        echo "<script>window.history.replaceState(null, null, window.location.href);</script>";
        exit();
    } else {
        echo "Lỗi: " . $query_attendance . "<br>" . $conn->error;
    }
} else {
    echo "Không tìm thấy sinh viên có mã số $student_id trong hệ thống.";
}

// Đóng kết nối
$conn->close();
?>


<
