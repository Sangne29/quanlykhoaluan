<?php

class AttendanceCondition extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = $this->TableName('AttendanceCondition');
	}
	
	function AttendanceCondition_list()
	{
			$sql="SELECT * FROM $this->table ORDER BY STT ASC";
			return $this->QueryAll($sql);
	}
	function AttendanceCondition_insert($pass,$attendace_time,$start,$expire)
	{
			$sql="INSERT INTO * FROM $this->table(pass,attendace_time,start,expire) VALUES ($pass,$attendace_time,$start,$expire)";
			$this->QueryNoResult($sql);
	}
	function AttendanceCondition_update()
	{
			$sql="SELECT * FROM $this->table VALUES";
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