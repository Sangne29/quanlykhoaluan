
<div class="col-md-2 " style="height:700px; background: #484CA3" >
  <ul class="list-unstyled ul-left-menu">
    <li class="border-bottom py-2 row">
      <div class="input-group px-3">
        <p style="color: #ffffff;  font-size: 25px;">Menu Quản lí</p>
      </div>
    </li>
    <li class="py-2 border-bottom row"><a class="pl-3" style="color: #ffffff" href="index.php"> Home </a></li>
      <!-- <li class="py-2 border-bottom row"><a class="pl-3" style="color: #ffffff" href="index.php?option=topic"> Quản lý loại bài viết</a></li> -->
      <!-- <li class="py-2 border-bottom row"><a class="pl-3" style="color: #ffffff" href="index.php?option=Post"> Quản lý bài viết</a></li> -->
      <?php if(isset($_SESSION['Access']) && $_SESSION['Access'] == 0) {
        ?>
        <li id="user" class="py-2 border-bottom row "><a class="px-3  " style="color: #ffffff" href="index.php?option=user"><i class="fas fa-file-user"></i> Quản lý người dùng</a></li>
      <?php  }?>
      <?php if(isset($_SESSION['Access']) && $_SESSION['Access'] == 7) {
        ?>
        <li id="registertopic" class="py-2 border-bottom row "><a class="px-3 " style="color: #ffffff" href="index.php?option=registertopic"> Xem danh sách đăng ký đề tài</a></li>
        <li id="thesistopic" class="py-2 border-bottom row "><a class="px-3" style="color: #ffffff" href="index.php?option=registertopic&cat=RegisterArgument" >Quản lý đề tài phản biện</a></li>
        <li id="registertopic" class="py-2 border-bottom row "><a class="px-3 " style="color: #ffffff" href="index.php?option=registertopic&cat=insertPoint"> Quản lý đề tài hướng dẫn</a></li>
        <li id="thesistopic" class="py-2 border-bottom row "><a class="px-3 " style="color: #ffffff" href="index.php?option=thesistopic"> Quản lý đề tài</a></li>
        <li id="attendance" class="py-2 border-bottom row "><a class="px-3 " style="color: #ffffff" href="index.php?option=attendance"> Điểm danh sinh viên</a></li>
        <li id="evaluation" class="py-2 border-bottom row "><a class="px-3 " style="color: #ffffff" href="index.php?option=evaluation"> Đánh giá sinh viên</a></li>
        <li id="evaluation" class="py-2 border-bottom row "><a class="px-3 " style="color: #ffffff" href="index.php?option=pointL"> Chấm điểm Abet</a></li>

      <?php  }?>
      <?php if(isset($_SESSION['Access']) && $_SESSION['Access'] == 8) {
        ?>
        <li id="registertopic" class="py-2 border-bottom row "><a class="px-3 " style="color: #ffffff" href="index.php?option=registertopic"> Xem danh sách đăng ký đề tài</a></li>
        <li id="thesistopic" class="py-2 border-bottom row "><a class="px-3 " style="color: #ffffff" href="index.php?option=registertopic&cat=RegisterArgument"> Quản lý và phân công phản biện</a></li>
        <li id="registertopic" class="py-2 border-bottom row "><a class="px-3 " style="color: #ffffff" href="index.php?option=registertopic&cat=insertPoint"> Quản lý đề tài hướng dẫn</a></li>
        <li id="thesistopic" class="py-2 border-bottom row "><a class="px-3 " style="color: #ffffff" href="index.php?option=thesistopic"> Quản lý đề tài</a></li>
        <li id="thesistopic" class="py-2 border-bottom row "><a class="px-3 " style="color: #ffffff" href="index.php?option=thesistopic&cat=Allthesistopic"> Xem tất cả & duyệt đề tài</a></li>
        <li id="attendance" class="py-2 border-bottom row "><a class="px-3" style="color: #ffffff" href="index.php?option=attendance"> Điểm danh sinh viên khóa luận</a></li>
        <li id="attendance" class="py-2 border-bottom row "><a class="px-3" style="color: #ffffff" href="index.php?option=attendance-internship"> Điểm danh sinh viên thực tập</a></li>
        <li id="evaluation" class="py-2 border-bottom row "><a class="px-3 " style="color: #ffffff" href="index.php?option=evaluation"> Đánh giá sinh viên</a></li>
        <li id="evaluation" class="py-2 border-bottom row "><a class="px-3 " style="color: #ffffff" href="index.php?option=pointL"> Chấm điểm Abet</a></li>
        <?php  }?>  
    </ul>
  </div>


