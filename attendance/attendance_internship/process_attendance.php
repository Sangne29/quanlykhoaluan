<?php


// Kết nối đến cơ sở dữ liệu
$conn = new mysqli('sql205.infinityfree.com', 'if0_35532636', 'B7wFOPkv3kYY5KJ', 'if0_35532636_quanlykhoaluan');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$mssv = $_POST['student_id'];
$teacher_name = $_POST['teacher_support'];

// Truy vấn để lấy thông tin sinh viên từ bảng user
$query_user = "SELECT * FROM user WHERE username = '$mssv'";
$result_user = $conn->query($query_user);

if ($result_user->num_rows > 0) {
    // Lấy thông tin sinh viên từ bảng user
    $row_user = $result_user->fetch_assoc();
    $full_name = $row_user['fullname'];
    $student_id = $row_user['username'];
    $address = $row_user['address'];
    $phone = $row_user['phone'];
    $email = $row_user['email'];
    $datetime = date('Y-m-d H:i:s');

    // Thêm dữ liệu vào bảng attendance
    $query_attendance = "INSERT INTO attendance_internship (mssv, student_fullname, teacher_name, address ,phone, email, date_attendance) VALUES ('$student_id', '$full_name','$teacher_name', '$address', '$phone', '$email', '$datetime')";
    
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
