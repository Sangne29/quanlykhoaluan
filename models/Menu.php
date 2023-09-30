<?php
class Menu extends Database
{
	function __construct()
	{
		parent::__construct();//chay cua database
	}
	function menu_list()
	{
		$sql="SELECT * FROM latnt_menu WHERE status='1' AND parentid='0'";
		return $this->QueryAll($sql);
	}
		function menu_parentid($parentid=0)
	{
		$sql="SELECT * FROM latnt_menu WHERE status='1' AND parentid='$parentid' ORDER BY orders ASC";
		return $this->QueryAll($sql);
	}
}

  ?>