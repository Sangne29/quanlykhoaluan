<?php

class u_registertopic extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = $this->TableName('registertopic');
		$this->evaluation = $this->TableName('evaluation_student');

	}
	
	function registertopic_list_u($page=true)
	{
		if($page==true)
		{
			$sql="SELECT * FROM $this->table 
			WHERE status!='0'
			";
		}
		else 
		{
			$sql="SELECT * FROM $this->table 
			WHERE status='0'
			";
		}
		return $this->QueryAll($sql);
	}
	function registertopic_list_user($id)
	{
		
			$sql="SELECT * FROM $this->table 
			WHERE status!='0' AND StudentID = '$id'
			";
		
		return $this->QueryAll($sql);
	}
	function registertopic_list1()
	{

		$sql="SELECT * FROM $this->table 
		WHERE status!='0' order by number ASC
		";
		return $this->QueryAll($sql);
	}
	function all()
	{
		$sql="SELECT * FROM latnt_registertopic";
		return $this->QueryCount($sql);
	}
	function registertopic_rowid($id)
	{
		$sql="SELECT * FROM $this->table 
		WHERE ID='$id'";
		return $this->QueryOne($sql);
	}
	function registertopic_with_pointL($id){
			$sql="SELECT * FROM $this->table 
			LEFT JOIN `pointL`ON `pointL`.`registertopicId` = $this->table.`ID`
			WHERE $this->table.ID='$id'
		";
		return $this->QueryOne($sql);
	}
	function list_registertopic11($ma)
	{
		$sql="SELECT * FROM $this->table 
		WHERE ID='$ma'";
		return $this->QueryAll($sql);
	}

	function registertopic_update($data)
	{

		$strset='';
		foreach ($data as $f => $v)
		{
			$strset.=$f."='$v', ";
		}
		$strset=rtrim(rtrim($strset),',');
		$sql="UPDATE $this->table SET $strset WHERE ID = " . $_SESSION['idTicket'];
		$this->QueryNoResult($sql);
	}
	function registertopic_delete($id)
	{
		$sql="DELETE  FROM $this->table 
		WHERE id='$id'";
		$this->QueryNoResult($sql);
	}
	function last_inserted(){
		return $this->QueryOne("SELECT ID from $this->table ORDER BY ID DESC LIMIT 1")['ID'];
	}
	function registertopic_insert($data)
	{
		$strf='';
		$strv='';
		foreach ($data as $f => $v)
		{
			$strf.=$f.', ';
			$strv.="'".$v."',";
		}
		$strf=rtrim(rtrim($strf),',');
		$strv=rtrim(rtrim($strv),',');
		$sql="INSERT INTO $this->table ($strf) VALUES ($strv)";
		$this->QueryNoResult($sql);
		$count_student_id = $this->QueryCount("SELECT id from $this->evaluation where $this->evaluation.StudentID = ".$data['StudentID']);
		$registertopicID = $this->QueryOne("SELECT ID FROM $this->table ORDER BY ID DESC LIMIT 1")['ID'];
		// /// insert into evaluation_student table
		if( $count_student_id == 0){
			$data2 = array(
				'StudentID' => $data['StudentID'] , 
				'ThesisTopicID' => $data['ThesisTopicID'],
				'registertopicID' => $registertopicID,
			);
			$strf2='';
			$strv2='';
			foreach ($data2 as $f2 => $v2)
			{
				$strf2.=$f2.', ';
				$strv2.="'".$v2."',";
			}
			$strf2=rtrim(rtrim($strf2),',');
			$strv2=rtrim(rtrim($strv2),',');
			$sql2 = "INSERT INTO $this->evaluation ($strf2) VALUES ($strv2)";
			$this->QueryNoResult($sql2);
		}
		
		///
		// set_flash('thongbao',' Đăng ký thành công cc'.$studentgroupID);

		set_flash('thongbao',' Đăng ký thành công');
		redirect('index.php?option=registeredtopic_detail');
	}

	function registertopic_exits_slug($slug,$id=null)
	{
		if($id==null)
		{
			$sql="SELECT * FROM $this->table 
			WHERE slug='$slug'";
		}
		else
		{
			$sql="SELECT * FROM $this->table 
			WHERE slug='$slug' and id!='$id'";
		}

		if($this->queryCount($sql)!=0)
		{
			return FALSE;
		}
		return TRUE;
	}
//close class
}

?>