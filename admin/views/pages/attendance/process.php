<?php
session_start();
function set_flash($name,$value)
{
	$_SESSION[$name]=$value;

}
date_default_timezone_set("asia/Ho_Chi_Minh");
$servername = "sql205.infinityfree.com";
$database = "if0_35532636_quanlykhoaluan";
$username = "if0_35532636";
$password = "B7wFOPkv3kYY5KJ";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

// XUẤT FILE ----------------------------------------------------------------------------------------------------------------
require 'vendor/autoload.php';


//Import thư viện phpspreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

if(isset($_POST['export_btn']))
{
    $ext = $_POST['export_file_type'];
    $filename = "diem-danh-sinh-vien-ngay_".date("d-m-y")."_".date("h")."h".date("i");

    $date_attendance = $_POST['export_file_with_date_attendance'];
    $query = ("SELECT * FROM attendance WHERE date_attendance = '$date_attendance'");
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
            //Khởi tạo đối tượng mới và xử lý
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            $sheet->setCellValue('A1', 'STT');
            $sheet->setCellValue('B1', 'Ngày điểm danh');
            $sheet->setCellValue('C1', 'Họ và tên');
            $sheet->setCellValue('D1', 'Mã số sinh viên');
            $sheet->setCellValue('F1', 'Địa chỉ');
            $sheet->setCellValue('G1', 'Số điện thoại');
            $sheet->setCellValue('H1', 'Email');
            $sheet->setCellValue('E1', 'Giáo viên hướng dẫn');

            //Chọn sheet - sheet bắt đầu từ 0
            $rowCount = 2;
            $i = 0;
            foreach ($query_run as $data ) 
            {
                $sheet->setCellValue('A'.$rowCount, ++$i); 
                $sheet->setCellValue('B'.$rowCount, $data['date_attendance']);
                $sheet->setCellValue('C'.$rowCount, $data['student_fullname']);
                $sheet->setCellValue('D'.$rowCount, $data['mssv']);
                $sheet->setCellValue('F'.$rowCount, $data['address']);
                $sheet->setCellValue('G'.$rowCount, $data['phone']);
                $sheet->setCellValue('H'.$rowCount, $data['email']);
                $sheet->setCellValue('H'.$rowCount, $data['teacher_name']);
                $rowCount++;
            }

            if($ext == 'xlsx')
            {
                $writer = new Xlsx($spreadsheet);
                $final_filename = $filename.'.xlsx';
            }       
            elseif($ext == 'xls')
            {
                $writer = new Xls($spreadsheet);
                $final_filename = $filename.'.xls';
            }
            elseif($ext == 'csv')
            {
                $writer = new csv($spreadsheet);
                $final_filename = $filename.'.csv';
            }


            //$writer->save($final_filename);
            header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="'. urlencode($final_filename).'"');
            $writer->save('php://output');

    }
    else
    {
        set_flash('thongbaoloi','Không tìm thấy danh sách sinh viên tại ngày: '.$date_attendance);
        header("Location: https://https://iuhgraduation.000webhostapp.com/attendance/attendance_thesis_report/");
    }
}
// XUẤT FILE ----------------------------------------------------------------------------------------------------------------




// TẠO MẬT KHẨU VÀ THỜI GIAN ĐIỂM DANH---------------------------------------------------------------------------------------

//Đặt mật khẩu cho sinh viên điểm danh trong N phút
if(isset($_POST['create_attendance_password']))
{
    $pass = $_POST['create_attendance_password'];
    //Thời gian session tồn tại
    $attendance_time = $_POST['attendance_time'];
    //Lấy thời gian hệ thống hiện tại
    $start = $_POST['start']; 
    //Thời gian hủy session (phút)
    $expire = $start + $attendance_time * 60;

	$query1="UPDATE attendancecondition SET pass = $pass, attendance_time = $attendance_time, start = $start, expire = $expire WHERE ID=1";
	$query_run1 = mysqli_query($conn, $query1);
	set_flash('thongbao',' Lưu thành công');
    header("Location: https://iuhgraduation.000webhostapp.com/attendance/attendance_thesis_report/");
}

	// echo $_SESSION['create_attendance_password'];

	// echo $_SESSION['start'];

	// echo $_SESSION['expire'];

	// echo $_SESSION['expire'] - time();
?>
