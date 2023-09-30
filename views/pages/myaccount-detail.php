<?php
require_once ('config.php');
require_once ('system/load.php');
require_once ('system/core.php');
require_once ('system/Database.php');
$user = loadModel('User');
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
		redirect('index.php?option=myaccount');
		
	}
	if($error=='')
	{
	$data = array(
        'fullname'=>$_POST['fullname'],
        'username'=>$_POST['username'],
        'password'=>sha1($_POST['password1']),
        'email'=>$_POST['email'],
        'gender'=>$_POST['gender'],
        'address'=>$_POST['address'],
        'phone'=>$_POST['phone'],
	);}
	if($user->user_exits_slug($username,$id)==true)
	{		
		$user->user_update($data,$id);
		set_flash('thongbao',' Cập Nhật thành công');
	}
	else
	{
		set_flash('thongbao',' tên đã tồn tại');
	}
	redirect('index.php?option=myaccount');	
}
//slose isset :D
?>