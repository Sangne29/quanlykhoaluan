<?php
$user = loadModel('user');
if(isset($_POST['THEM']))
{
	$error='';
	$username = $_POST['username'];
	if($user->user_exits_username1($username)==FALSE)
	{ 
		$error='<div class="alert alert-danger"> Username available </div>';
		set_flash('thongbaoloi','Tên người dùng đã tồn tại.');
		redirect('index.php?option=user&cat=insert');
	}
	if($_POST['password']!=$_POST['password1'])
	{ 
		$error='<div class="alert alert-danger"> Password incorrect </div>';
		set_flash('thongbaoloi','Nhập lại mật khẩu không khớp');
		redirect('index.php?option=user&cat=insert');
		
	}
	if($error=='')
	{
		$mydata=array(
			'fullname'=>$_POST['fullname'],
			'username'=>$_POST['username'],
			'password'=>sha1($_POST['password1']),
			'email'=>$_POST['email'],
			'gender'=>$_POST['gender'],
			'address'=>$_POST['address'],
			'phone'=>$_POST['phone'],
			'access'=>$_POST['access'],
			'status'=>$_POST['status'],	
		);
		print_r($mydata);
		echo $mydata;
		$user->user_insert($mydata);
		set_flash('thongbao',' Thêm người dùng mới thành công.');
		redirect('index.php?option=user');
	}

//slose isset :D
}


if(isset($_POST['CAPNHAT']))
{	
	$error=='';
	$id=$_POST['id'];
	$row=$user->user_rowid($id);
	$username=$_POST['username'];
	if($_POST['password']!=$_POST['password1'])
	{ 
		$error='<div class="alert alert-danger"> Password incorrect </div>';
		set_flash('thongbaoloi','Nhập lại mật khẩu không khớp');
		redirect('index.php?option=user');
		
	}
	if(empty($_POST['password']) && empty($_POST['password1']))
	{ 
		$error='false';
	}
	if($error=='false'){
	$data = array(
		'fullname'=>$_POST['fullname'],
		'username'=>$_POST['username'],
		'email'=>$_POST['email'],
		'gender'=>$_POST['gender'],
		'access'=>$_POST['access'],
		'phone'=>$_POST['phone'],
		'status'=>1,
		'address'=>$_POST['address'],);
	}else if($error==''){
	$data = array(
		'fullname'=>$_POST['fullname'],
		'username'=>$_POST['username'],
		'password'=>sha1($_POST['password1']),
		'email'=>$_POST['email'],
		'gender'=>$_POST['gender'],
		'access'=>$_POST['access'],
		'phone'=>$_POST['phone'],
		'status'=>1,
		'address'=>$_POST['address'],);
	}
	if($user->user_exits_slug($username,$id)==true)
	{		
		$user->user_update($data,$id);
		set_flash('thongbao',' Cập nhật thành công');
		redirect('index.php');
	}
	else
	{   $list=$user->list_user();
		set_flash('thongbaoloi',' Tên người dùng đã tồn tại');
	}
	if(isset($_SESSION['Access']) && $_SESSION['Access'] == 0) {
	redirect('index.php?option=user');
	}

//slose isset :D
}

if(isset($_POST['CAPNHAT_QUYEN']))
{

	$id=$_POST['id'];
	$row=$user->user_rowid($id);
	$username=$_POST['username'];
	$data = array(
		'fullname'=>$_POST['userfullname'],
		'username'=>$_POST['username'],
		'email'=>$_POST['email'],
		'phone'=>$_POST['phone'],
		'ad_access'=>$_POST['access_product'],
		'updated_at'=>date('y-m-d h:i:s'),
		'updated_by'=>$_SESSION['id'],
		'status'=>1,
	);
	if($user->user_exits_slug($username,$id)==true)
	{		
		$user->user_update($data,$id);
		set_flash('thongbao',' Cập Nhật thành công');
	}
	else
	{
		set_flash('thongbao',' Tên đã tồn tại');
	}
	redirect('index.php?option=user&cat=account_admin');	

//slose isset :D
}


if(isset($_POST['THEMADMIN']))
{
	$error='';
	if($user->user_exits_username1($_POST['username'])==FALSE)
	{ 
		$error='<div class="alert alert-danger"> Username available </div>';
		set_flash('thongbao','Username available');
		redirect('index.php?option=user&cat=insert');
	}
	if($_POST['password1']!=$_POST['password2'])
	{ 
		$error='<div class="alert alert-danger"> Password incorrect </div>';
		set_flash('thongbao','Password incorrect');
		redirect('index.php?option=user');
	}
	if($error=='')
	{
		$mydata=array(
			'username'=>$_POST['username'],
			'fullname'=>$_POST['userfullname'],
			'password'=>sha1($_POST['password1']),
			'email'=>$_POST['email'],
			'phone'=>$_POST['phone'],
			'gender'=>$_POST['gender'],
			'img'=>null,
			'access'=>1,
			'ad_access'=>$_POST['access_product'],
			'created_at'=>date('y-m-d h:i:s'),
			'created_by'=>0,
			'status'=>1,	
		);
		$user->user_insert($mydata);
	//redirect('login.php');
		set_flash('thongbao',' Đăng Ký Thành Công');
		redirect('index.php?option=user&cat=account_admin');
	}

//slose isset :D
}

?>
