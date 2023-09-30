<?php

class menu extends Database
{
	
	function __construct()
	{
		parent::__construct();
	$this->table = $this->TableName('menu');
}
	function menu_parentid($parentid=0)
	{
		$sql="SELECT * FROM $this->table WHERE status='1' AND parentid='$parentid' ORDER BY orders ASC";
		return $this->QueryAll($sql);
	}
function menu_list($page=true)
{
if($page==true)
	{
		$sql="SELECT * FROM $this->table 
	WHERE status!='0' order by id asc
	";
	}
	else 
	{
		$sql="SELECT * FROM $this->table 
	WHERE status='0' order by id asc
	";
	}
	return $this->QueryAll($sql);
}
  function menu_count_all() {
        $sql = "SELECT * FROM $this->table";
        return $this->QueryCount($sql);
    }
function menu_rowid($id)
{
	$sql="SELECT * FROM $this->table 
	WHERE id='$id'";
	return $this->QueryOne($sql);
}

function menu_update($data,$id)
{
		$strset='';
		foreach ($data as $f => $v)
		{
			$strset.=$f."='$v', ";
		}
		$strset=rtrim(rtrim($strset),',');
		$sql="UPDATE $this->table SET $strset WHERE id='$id'";
		$this->QueryNoResult($sql);
}
function menu_delete($id)
{
	$sql="DELETE  FROM $this->table 
	WHERE id='$id'";
	$this->QueryNoResult($sql);
}

function menu_insert($data)
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
redirect('index.php?option=menu');
}


function menu_exits_slug($slug,$id=null)
{
	if($id==null)
		{
			$sql="SELECT * FROM $this->table 
			WHERE menu_slug='$slug'";
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