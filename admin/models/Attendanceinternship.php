<?php

class Attendanceinternship extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = $this->TableName('attendance_internship');
	}
	
	function attendanceInternship_list()
	{
			$sql="SELECT * FROM $this->table ORDER BY date_attendance desc";
			return $this->QueryAll($sql);
	}
	function attendanceInternship_count_export($date_attendance)
	{
			$sql="SELECT * FROM $this->table WHERE date_attendance = '$date_attendance'";
			return $this->QueryCount($sql);
	}
	function attendanceInternship_list_export($date_attendance)
	{
			$sql="SELECT * FROM $this->table WHERE date_attendance = '$date_attendance'";
			return $this->Query($sql);
	}
//close class
}

?>