<?php

class attendancecondition extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = $this->tablename('attendancecondition');
	}
	
function attendancecondition_list($id)
	{
		$sql="SELECT * FROM $this->table WHERE ID = '$id'";
		return $this->QueryOne($sql);
	}
//close class
}

?>