<?php 
class feedback extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = $this->tablename('feedback');
	}
function feedback_insert($data)
{
	$strf='';
	$strv='';
		foreach ($data as $k => $v)
		{
			$strf.=$k.', ';
			$strv.="'".$v."',";
		}
		$strf=rtrim(rtrim($strf),',');
		$strv=rtrim(rtrim($strv),',');
	$sql="INSERT INTO $this->table ($strf) VALUES ($strv)";
	$this->QueryNoResult($sql);
}
}