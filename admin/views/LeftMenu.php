
<div class="col-md-2 bg-white" style="height:700px;">
  <ul class="list-unstyled ul-left-menu">
    <li class="border-bottom py-2 row">
      <div class="input-group px-3">
        <input type="text" class="form-control" placeholder="Search...">
        <div class="input-group-append">
          <button class="btn bg-white border" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </li>

    <!-- <li class="py-2 border-bottom row"><a class="pl-3" href="index.php"><i class="fas fa-drum-steelpan"></i> Home </a></li> -->
     <!--  <li class="py-2 border-bottom row"><a class="pl-3" href="index.php?option=topic"><i class="fas fa-drum-steelpan"></i> Quản lý loại bài viết</a></li>
      <li class="py-2 border-bottom row"><a class="pl-3" href="index.php?option=Post"><i class="fas fa-drum-steelpan"></i> Quản lý bài viết</a></li> -->
      <?php if(isset($_SESSION['Access']) && $_SESSION['Access'] == 0) {
        ?>
        <li id="user" class="py-2 border-bottom row "><a class="pl-3 " href="index.php?option=user"><i class="fas fa-file-user"></i> Quản lý người dùng</a></li>
      <?php  }?>
      <?php if(isset($_SESSION['Access']) && $_SESSION['Access'] == 7) {
        ?>
        <li id="registertopic" class="py-2 border-bottom row "><a class="pl-3 " href="index.php?option=registertopic"><i class="fas fa-ballot-check"></i>  Xem danh sách đăng ký đề tài</a></li>
        <li id="thesistopic" class="py-2 border-bottom row "><a class="pl-3 " href="index.php?option=registertopic&cat=RegisterArgument"><i class="fas fa-drum-steelpan"></i> Quản lý đề tài phản biện</a></li>
        <li id="registertopic" class="py-2 border-bottom row "><a class="pl-3 " href="index.php?option=registertopic&cat=insertPoint"><i class="fas fa-file-contract"></i> Quản lý đề tài hướng dẫn</a></li>
        <li id="thesistopic" class="py-2 border-bottom row "><a class="pl-3 " href="index.php?option=thesistopic"><i class="fas fa-drum-steelpan"></i> Quản lý đề tài</a></li>
        <li id="attendance" class="py-2 border-bottom row "><a class="pl-3 " href="index.php?option=attendance"><i class="fas fa-drum-steelpan"></i> Điểm danh sinh viên</a></li>

      <?php  }?>
      <?php if(isset($_SESSION['Access']) && $_SESSION['Access'] == 8) {
        ?>
        <li id="registertopic" class="py-2 border-bottom row "><a class="pl-3 " href="index.php?option=registertopic"><i class="fas fa-ballot-check"></i> Xem danh sách đăng ký đề tài</a></li>
        <li id="thesistopic" class="py-2 border-bottom row "><a class="pl-3 " href="index.php?option=registertopic&cat=RegisterArgument"><i class="fas fa-drum-steelpan"></i> Quản lý và phân công phản biện</a></li>
        <li id="registertopic" class="py-2 border-bottom row "><a class="pl-3 " href="index.php?option=registertopic&cat=insertPoint"><i class="fas fa-file-contract"></i> Quản lý đề tài hướng dẫn</a></li>
        <li id="thesistopic" class="py-2 border-bottom row "><a class="pl-3 " href="index.php?option=thesistopic"><i class="fas fa-drum-steelpan"></i> Quản lý đề tài</a></li>
        <li id="thesistopic" class="py-2 border-bottom row "><a class="pl-3 " href="index.php?option=thesistopic&cat=Allthesistopic"> <i class="fas fa-thumbs-up"></i> Xem tất cả & duyệt đề tài</a></li>
        <li id="attendance" class="py-2 border-bottom row "><a class="pl-3 " href="index.php?option=attendance"><i class="fas fa-drum-steelpan"></i> Điểm danh sinh viên</a></li>
      <?php  }?>  
    </ul>
  </div>
