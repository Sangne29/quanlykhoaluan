<?php
$evaluation = loadModel('evaluation');
if(isset($_POST['CAPNHAT']))
{

	$id = $_REQUEST['id'];
	$registertopic = loadModel('registertopic');
	$row = $registertopic->registertopic_rowid($id);
	
	$data = array(
		'GuidePoints'=>$_POST['GuidePoints'],
		'GuidePoints2'=>$_POST['GuidePoints2'],
		'Commnet'=>$_POST['Commnet'],	
	);
	$registertopic->registertopic_update($data,$id);

	$evaluation->updateBase($id);

	set_flash('thongbao',' Cập nhật điểm hướng dẫn thành công.');
	redirect('index.php?option=registertopic&cat=insertPoint');
}
if(isset($_POST['CAPNHAT1']))
{

	$id = $_REQUEST['id'];
	$registertopic = loadModel('registertopic');
	$row = $registertopic->registertopic_rowid($id);

	$data = array(
		// 'PointProcess'=>$_POST['PointProcess'],
		// 'PointProcess2'=>$_POST['PointProcess2'],
		'Commentcounter'=>$_POST['Commentcounter'],	
	);

	if(isset($_POST['PointProcess'])) $data['PointProcess'] = $_POST['PointProcess'];

	if(isset($_POST['PointProcess2'])) $data['PointProcess2'] = $_POST['PointProcess2'];

	
	$registertopic->registertopic_update($data,$id);

	$evaluation->updateBase($id);


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
		'SupervisingTeacherID2'=>$_POST['SupervisingTeacherID2'],	

	);
	$registertopic->registertopic_update($data,$id);
	set_flash('thongbao',' Cập nhật thành công.');
	redirect('index.php?option=registertopic&cat=RegisterArgument');
}
?>