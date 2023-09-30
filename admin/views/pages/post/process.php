<?php
$post = loadModel('post');
if(isset($_POST['THEM']))
{
	$slug=str_slug($_POST['name']);
	$data = array(
			'id'=>$_POST['catid'],
			'title'=>$_POST['name'],
			'slug'=>$slug,
			'detail'=>$_POST['detail'],
			'topid'=>$_POST['aaa'],		
			'created_at'=>date('y-m-d h:i:s'),
			'created_by'=>$_SESSION['user_id'],
			//'img'=>$_POST[''],
			'status'=>$_POST['status'],
				);
	//upload file
	if($post->post_exits_slug($slug)==true)
			{
			$file_name=$_FILES['img']['name'];
			$nameimg=$slug.'.'.get_duoi($file_name);
			$file_tmp=$_FILES['img']['tmp_name'];
			move_uploaded_file($file_tmp, '../public/img/post/'.$nameimg);
			$data['img']=$nameimg;
			//print_r($data);
			$post->post_insert($data);
			set_flash('thongbao',' Lưu thành công');

			}
	else
	{
		set_flash('thongbao',' Tên đã tồn tại');
	}
		redirect('index.php?option=post');	
}

//close  'THEM'
//
//
if(isset($_POST['CAPNHAT']))
{

	$id=$_POST['id'];
	$row=$post->post_rowid($id);
	$slug=str_slug($_POST['name']);
	$data = array(
			'title'=>$_POST['name'],
			'slug'=>$slug,
			'detail'=>$_POST['detail'],
			'topid'=>$_POST['aaa'],		
			'updated_at'=>date('y-m-d h:i:s'),
			'updated_by'=>$_SESSION['user_id'],
			//'img'=>$_POST[''],
			'status'=>$_POST['status'],
				);
	if($post->post_exits_slug($slug,$id)==true)
			{
				if(strlen($_FILES['img']['name'])!=0)
				{
					if(file_exists('../public/img/post/'.$row['img']))
						{
							unlink('../public/img/post/'.$row['img']);
						}
							$file_name=$_FILES['img']['name'];
							$nameimg=$slug.'.'.get_duoi($file_name);
							$file_tmp=$_FILES['img']['tmp_name'];
							move_uploaded_file($file_tmp, '../public/img/post/'.$nameimg);
							$data['img']=$nameimg;
							//print_r($data);
				}			
			$post->post_update($data,$id);
			set_flash('thongbao',' Cập Nhật thành công');
			}
	else
	{
		set_flash('thongbao',' tên đã tồn tại');
	}
		redirect('index.php?option=post');	
}

 ?>
