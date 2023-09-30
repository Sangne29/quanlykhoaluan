<?php
class u_thesistopic extends Database 
{
	function __construct()
	{
		parent::__construct();
		$this->table = $this->tablename('thesistopic');
	}
	function thesistopic_parentid($parentid=0)
	{
		$sql="SELECT * FROM $this->table WHERE status='1' AND parentid='$parentid' ORDER BY orders ASC";
		return $this->QueryAll($sql);
	}
	function all()
	{
		$sql="SELECT * FROM $this->table";
		return $this->QueryCount($sql);
	}
	function thesistopic_name($id)
	{
		$sql="SELECT *FROM $this->table WHERE id='$id'";
		$row=$this->QueryOne($sql);
		if($row!==null)
		{
			return $row['name'];
		}
		return "Unthesistopic";
	}
	function thesistopic_list_Order_PID($pid) {
		$sql = "SELECT * FROM $this->table WHERE parentid = '$pid' AND status = '1'";
		return $this->QueryAll($sql);
	}

	function thesistopic_list($page='index')
	{
		if($page=='index')
		{
			$sql="SELECT * FROM $this->table WHERE ID != 0 AND Status = 1 AND ThesisTopicTypeID = 1 ORDER BY ID ASC";
		}
		else 
		{
			$sql="SELECT * FROM $this->table WHERE Status = 2 AND ThesisTopicTypeID = 1";
		}
		return $this->QueryAll($sql);
	}

		function thesistopic_list_ttdn($page='index')
	{
		if($page=='index')
		{
			$sql="SELECT * FROM $this->table 
			WHERE Status!='0' AND ThesisTopicTypeID = 2 order by status desc
			";
		}
		else 
		{
			$sql="SELECT * FROM $this->table 
			WHERE Status='0' AND ThesisTopicTypeID = 2 order by status desc
			";
		}
		return $this->QueryAll($sql);
	}


	function thesistopic_rowid($id)
	{
		$sql="SELECT * FROM $this->table 
		WHERE id='$id'";
		return $this->QueryOne($sql);
	}

	function thesistopic_update($data,$id)
	{
		$strset='';
		foreach ($data as $f => $v)
		{
			$strset.=$f."='$v', ";
		}
		$strset=rtrim(rtrim($strset),',');
		$sql="UPDATE $this->table SET $strset WHERE ID='$id'";
		$this->QueryNoResult($sql);
	}
	function thesistopic_delete($id)
	{
		$sql="DELETE  FROM $this->table 
		WHERE id='$id'";
		$this->QueryNoResult($sql);
	}
	function registertopic_rowid($id)
	{
		$sql="SELECT * FROM $this->table 
		WHERE ID='$id'";
		return $this->QueryOne($sql);
	}
	function thesistopic_exits_slug($slug,$id=null)
	{
		if($id==null)
		{
			$sql="SELECT * FROM $this->table 
			WHERE Name='$slug'";
		}
		else
		{
			$sql="SELECT * FROM $this->table 
			WHERE Name='$slug' and id!='$id'";
		}
		
		if($this->queryCount($sql)!=0)
		{
			return FALSE;
		}
		return TRUE;
	}
	function thesistopic_insert($data)
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
		set_flash('thongbao',' Lưu Thành công');
		redirect('index.php?option=thesistopic');
	}
}
?>
