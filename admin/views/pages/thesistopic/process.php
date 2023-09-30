<?php
$thesistopic = loadModel('thesistopic');
$user = loadModel('user');
$userLoginId = $_SESSION['user_id'];
$rowUserLoginId=$user->user_rowid($userLoginId);

if(isset($_POST['THEM']))
{
	$InstructorsAdd =$user->user_rowid($_POST['InstructorsID']);
	$slug=str_slug($_POST['Name']);
	$data = array(
		'Name'=>$_POST['Name'],
		'Instructors'=>$InstructorsAdd['fullname'],
		'InstructorsID'=> $_POST['InstructorsID'],
		'Subject'=>$_POST['Subject'],
		'Description'=> $_POST['Description'],
		'Requirement'=> $_POST['Requirement'],
		'SkillKnowledge'=> $_POST['SkillKnowledge'],
		'ThesisTopicType'=>$_POST['ThesisTopicTypeID'] == 1 ? "Đại học (KLTN)" : "",
		'ThesisTopicTypeID'=> $_POST['ThesisTopicTypeID'],
		'Status'=> 2,
		'SubjectID'=> 0
	);
	if($thesistopic->thesistopic_exits_slug($slug)==true)
	{
		$thesistopic->thesistopic_insert($data);
		set_flash('thongbao',' Lưu thành công');
	}
	else
	{
		set_flash('thongbao',' Tên đã tồn tại');
	}
	redirect('index.php?option=thesistopic');	
}

//close  'THEM'

if(isset($_POST['CAPNHAT']))
{
	$InstructorsAdd=$user->user_rowid($_POST['InstructorsID']);

	$id=$_POST['id'];
	$row=$thesistopic->thesistopic_rowid($id);
	$slug=str_slug($_POST['Name']);
	$data = array(
		'Name'=>$_POST['Name'],
		'Instructors'=>$InstructorsAdd['fullname'],
		'InstructorsID'=> $_POST['InstructorsID'],
		'Subject'=>$_POST['Subject'],
		'ThesisTopicType'=>$_POST['ThesisTopicTypeID'] == 1 ? "Đại học (KLTN)" : "",
		'Description'=> $_POST['Description'],
		'Requirement'=> $_POST['Requirement'],
		'SkillKnowledge'=> $_POST['SkillKnowledge'],
		'ThesisTopicTypeID'=> $_POST['ThesisTopicTypeID'],
	);
	if($thesistopic->thesistopic_exits_slug($slug,$id)==true)
	{			
		$thesistopic->thesistopic_update($data,$id);
		set_flash('thongbao',' Cập nhật thành công');
	}
	else
	{
		set_flash('thongbao',' Tên đã tồn tại');
	}
	redirect('index.php?option=thesistopic');
}

?>
