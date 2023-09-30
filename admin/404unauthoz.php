<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width" />
	<link href="../Public/css/all.min.css" rel="stylesheet" />
	<link href="../Public/css/bo2otstrap.min.css" rel="stylesheet" />
	<link href="../Public/css/fStyle.css" rel="stylesheet" />
	<!-- css datable -->
	<link rel="stylesheet" href="../public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="../public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link href="../Public/plugins/summernote/summernote-bs4.min.css" rel="stylesheet" />
	<script src="../Public/js/new/jquery-3.4.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>Quản lý đề tài</title>
</head>
<script src="../public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../Public/plugins/summernote/summernote-bs4.min.js"></script>

<body style="background-color:#F2F2F2;">
	<section class="container-fluid ">
		<div class="row">
			<!-- Image and text -->
			<nav class="navbar navbar-light py-0  w-100 border-bottom bg-light">
				<div class="p-1">  <img  width="120" src="https://lms.iuh.edu.vn/pluginfile.php/1/theme_academi/logo/1676936055/Logo_IUH.png" alt="Alternate Text" /></div>
				<ul class="list-unstyled m-0">
					<li class="nav-item dropdown ">
						<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">??
						<i class="fas fa-user"></i>
					</a>
					<div class="dropdown-menu" style="position: absolute;top: 40px;left: -90px;" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="logout.php"> Đăng xuất</a>
						<?php $id= $_SESSION['user_id']; ?>
						<a class="dropdown-item" href="index.php?option=user&cat=update&id=<?php echo $id; ?>">Thông tin</a>
					</div>
				</li>
			</ul>
		</nav>
	</div>
</section>


<section>
	<div class="main-content container-fluid">
		<div class="row">
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

					<li class="py-2 border-bottom row"><a class="pl-3" href="index.php"><i class="fas fa-drum-steelpan"></i> Home </a></li>
     <!--  <li class="py-2 border-bottom row"><a class="pl-3" href="index.php?option=topic"><i class="fas fa-drum-steelpan"></i> Quản lý loại bài viết</a></li>
     	<li class="py-2 border-bottom row"><a class="pl-3" href="index.php?option=Post"><i class="fas fa-drum-steelpan"></i> Quản lý bài viết</a></li> -->
     	<li id="registertopic" class="py-2 border-bottom row "><a class="pl-3 " href="index.php?option=registertopic"><i class="fas fa-ballot-check"></i> Xem Danh Sách Đăng Ký</a></li>
     	<li id="registertopic" class="py-2 border-bottom row "><a class="pl-3 " href="index.php?option=thesistopic&cat=insertPoint"><i class="fas fa-file-contract"></i> Nhập điểm</a></li>
     	<li id="thesistopic" class="py-2 border-bottom row "><a class="pl-3 " href="index.php?option=thesistopic"><i class="fas fa-drum-steelpan"></i> Cập nhật đề tài</a></li>
     	<li id="thesistopic" class="py-2 border-bottom row "><a class="pl-3 " href="index.php?option=thesistopic&cat=Allthesistopic"> <i class="fas fa-thumbs-up"></i> Tất cả đề tài & duyệt</a></li>
     	<li id="User" class="py-2 border-bottom row "><a class="pl-3 " href="index.php?option=User"><i class="fas fa-file-user"></i> Quản lý người dùng</a></li>
     </ul>
 </div>

 <div class="container card ">
 	<div class="card-body col-md-12">
 		<div class="col-md-8 alert alert-danger alert-dismissible">

 			<h5><i class="icon fas fa-ban"></i> Thông báo!</h5>
 			Bạn không có quyền truy cập!
 		</div>
 	</div>
 </div>
</div>
</div>
</section>
</body>
<script>
	$(document).ready(function () {
		$('#myTable1').DataTable({
			"paging": true,
			"lengthChange": true,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
		});
	});
</script>
