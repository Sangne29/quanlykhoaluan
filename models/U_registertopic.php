<?php

class u_registertopic extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = $this->TableName('registertopic');
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