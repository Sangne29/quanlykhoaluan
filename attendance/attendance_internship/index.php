<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Điểm Danh Sinh Viên</title>
    <link rel="stylesheet" href="../public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link href="../public/plugins/summernote/summernote-bs4.min.css" rel="stylesheet" />
    <script src="../public/js/new/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<script src="../public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../public/plugins/summernote/summernote-bs4.min.js"></script>
<style>
  
  .student_info {
    height: 20px;
  }
  .footer {
    display: flex;
    justify-content: center;
  }
  .formAttendance{
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  h1{
    display: flex;
    justify-content: center;
    background: #484CA3;
    color: white
  }
  img{
    padding-left: 157px;
  }
  h3{
    display: flex;
    justify-content: center;
  }
  body {
  width: 400px;
  height: 100%;
  margin: auto;
  border: solid;
  padding: 50px;
  border-color: #484CA3;
}

</style>


<body>
    <img alt="Image" height="45" width="90" src="https://lms.iuh.edu.vn/pluginfile.php/1/theme_academi/logo/1676936055/Logo_IUH.png">
    <h1>Điểm Danh Sinh Viên</h1>
    <h3>Báo cáo thực tập doanh nghiệp</h3>
    <form action="process_attendance.php" method="post" class="formAttendance">
      <div style="width: 100%;display: flex; justify-content: space-between; padding: 10px">
        <label for="student_id">Mã số sinh viên:</label>
        <input type="text" class="student_info" name="student_id" required>
      </div>
   
      <div  style="width: 100%;display: flex; justify-content: space-between; padding: 10px">
      <label for="student_fullname">Họ Tên:</label>
        <input type="text" class="student_info" id="student_fullname" name="student_fullname" required>

      </div>
        
       <div  style="width: 100%;display: flex; justify-content: space-between; padding: 10px">
       <label for="teacher_support">Giáo viên hướng dẫn:</label>
        <input type="text" class="student_info" id="teacher_support" name="teacher_support" required>

       </div>

       <!-- <div style="width: 100%;display: flex; justify-content: space-between; padding: 10px">
        <label for="word_file">Nộp file báo cáo(Word):</label>
        <input type="file" id="file_report" name="file_report" accept=".doc, .docx">
      </div> -->
      <button style="height:40px; margin: auto;background: #484CA3; color: white; 	border-radius: 0.25rem;" type="submit">Điểm Danh</button>
    </form>
    <div class="footer">
      <p>Diểm danh ngày</p> &nbsp
      <p id="attendance"></p>
    </div>
    <script>
const d = new Date();
document.getElementById("attendance").innerHTML = d.getDate() + "/" + d.getMonth() + "/" + d.getFullYear() ;
</script>
</body>
</html>
