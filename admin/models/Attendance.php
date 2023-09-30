<?php

class attendance extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = $this->TableName('attendance');
	}
	
	function attendance_list()
	{
			$sql="SELECT * FROM $this->table ORDER BY STT ASC";
			return $this->QueryAll($sql);
	}
	function attendance_count_export($date_attendance)
	{
			$sql="SELECT * FROM $this->table WHERE date_attendance = '$date_attendance'";
			return $this->QueryCount($sql);
	}
	function attendance_list_export($date_attendance)
	{
			$sql="SELECT * FROM $this->table WHERE date_attendance = '$date_attendance'";
			return $this->Query($sql);
	}
//close class
}

?>