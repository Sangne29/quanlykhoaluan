<?php
$topic = loadModel('topic');
if(isset($_POST['THEM']))
{
	$slug=str_slug($_POST['name']);
	$data = array(
			'slug'=>$slug,
			'name'=>$_POST['name'],
			'parentid'=>0,
			'orders'=>1,
			'created_at'=>date('y-m-d h:i:s'),
			'created_by'=>$_SESSION['user_id'],
			'status'=>$_POST['status'],
				);
	//upload file
	if($topic->topic_exits_slug($slug)==true)
			{
			$topic->topic_insert($data);
			set_flash('thongbao',' Lưu thành công');
			}
	else
	{
		set_flash('thongbao',' Tên đã tồn tại');
	}
		redirect('index.php?option=topic');	
}

if(isset($_POST['CAPNHAT']))
{

	$id=$_POST['id'];
	$row=$topic->topic_rowid($id);
	$slug=str_slug($_POST['name']);
	$data = array(
			'slug'=>$slug,
			'name'=>$_POST['name'],
			'parentid'=>0,
			'orders'=>1,
			'updated_at'=>date('y-m-d h:i:s'),
			'updated_by'=>$_SESSION['user_id'],
			'status'=>1,
				);
	if($topic->topic_exits_slug($slug,$id)==true)
			{		
			$topic->topic_update($data,$id);
			set_flash('thongbao',' Cập Nhật thành công');
			}
	else
	{
		set_flash('thongbao',' tên đã tồn tại');
	}
		redirect('index.php?option=topic');	
}

 ?>
