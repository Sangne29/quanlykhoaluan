<?php
if(isset($_POST['CAPNHAT']))
{

	$id = $_REQUEST['id'];
	$registertopic = loadModel('registertopic');
	$row = $registertopic->registertopic_rowid($id);
	
	$data = array(
		'GuidePoints'=>$_POST['GuidePoints'],
		'Commnet'=>$_POST['Commnet'],	
	);
	$registertopic->registertopic_update($data,$id);
	set_flash('thongbao',' Cập nhật điểm hướng dẫn thành công.');
	redirect('index.php?option=registertopic&cat=insertPoint');
}
if(isset($_POST['CAPNHAT1']))
{

	$id = $_REQUEST['id'];
	$registertopic = loadModel('registertopic');
	$row = $registertopic->registertopic_rowid($id);
	
	$data = array(
		'PointProcess'=>$_POST['PointProcess'],
		'Commentcounter'=>$_POST['Commentcounter'],	
	);
	$registertopic->registertopic_update($data,$id);
	set_flash('thongbao',' Cập nhật điểm phản biện thành công.');
	redirect('index.php?option=registertopic&cat=RegisterArgument');
}


if(isset($_POST['UPDATETEACHER']))
{

	$id = $_REQUEST['id'];
	$registertopic = loadModel('registertopic');
	$row = $registertopic->registertopic_rowid($id);
	
	$data = array(
		'SupervisingTeacherID'=>$_POST['SupervisingTeacherID'],	
	);
	$registertopic->registertopic_update($data,$id);
	set_flash('thongbao',' Cập nhật thành công.');
	redirect('index.php?option=registertopic&cat=RegisterArgument');
}
?>