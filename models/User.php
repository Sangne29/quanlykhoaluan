<?php 
class User extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = $this->tablename('user');
	}
function user_insert($mydata)
{
	$strf='';
	$strv='';
		foreach ($mydata as $k => $v)
		{
			$strf.=$k.', ';
			$strv.="'".$v."',";
		}
		$strf=rtrim(rtrim($strf),',');
		$strv=rtrim(rtrim($strv),',');
	$sql="INSERT INTO $this->table ($strf) VALUES ($strv)";
	$this->QueryNoResult($sql);
}


function user_exits_username($username,$id=0)
{
	if($id==0)
		{
			$sql="SELECT * FROM $this->table 
			WHERE 	username='$username' AND access='0'";
		}
		else
		{
		$sql="SELECT * FROM $this->table 
			WHERE username='$username' AND user_id!='$id' AND access='0'";
		}
	
	if($this->QueryCount($sql))
		{
			return FALSE;
		}
		return TRUE;
}
function check_user()
	{
		$sql="SELECT * FROM $this->table WHERE status='1' AND access='6'";
		return $this->QueryAll($sql);
	}

function list_user_cuss($id)
	{
		$sql="SELECT * FROM $this->table WHERE status='1' AND access='6' AND ID = '$id'";
		return $this->QueryOne($sql);
	}
function user_exits_slug($username,$id=null)
{
	if($id==null)
	{
		$sql="SELECT * FROM $this->table 
		WHERE username='$username'";
	}
	else
	{
		$sql="SELECT * FROM $this->table 
		WHERE username='$username' and ID !='$id'";
	}
	
	if($this->queryCount($sql)!=0)
	{
		return FALSE;
	}
	return TRUE;
}
function user_update($data,$id)
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
function user_rowid($id)
{
	$sql="SELECT * FROM $this->table 
	WHERE ID ='$id'";
	return $this->QueryOne($sql);
}

//close class
}

