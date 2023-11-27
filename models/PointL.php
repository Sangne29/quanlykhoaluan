<?php

class PointL extends Database
{
	
	function __construct()
	{
		parent::__construct();
	    $this->table = $this->TableName('pointL');
    }
    function all()
    {
        $sql="SELECT * FROM $this->table";
        return $this->QueryCount($sql);
    }
    function list_pointL($userId){
        // $sql="SELECT StudentName, username, ClassRoom FROM $this->register_topic WHERE status!='0' AND TeacherID = '$userId' AND ThesisTopicID='$thesistopicId'  ORDER BY ID ASC 
        // LEFT JOIN $this->table ON $this->register_topic.StudentID = $this->table.StudentID";
		$sql = "SELECT *
			FROM
				`registertopic`
			
			INNER JOIN `user`
				ON `registertopic`.StudentID = `user`.ID
			INNER JOIN `pointL`
				ON `registertopic`.StudentID = `pointL`.userId
		";
		
		return $this->QueryAll($sql);
    }
    function pointL_insert($data){
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
    }
	function evaluation_delete($id){
		$sql="DELETE  FROM $this->table 
		WHERE id='$id'";
		$this->QueryNoResult($sql);
	}
	function updatePoint($key , $value, $registertopicID){
		$sql = "UPDATE registertopic SET $key='$value' WHERE ID=$registertopicID";
		$this->QueryNoResult($sql);
	}
	// function updateBase($registertopicID){
	// 	$sql_guide = "SELECT GuidePoints from registertopic where ID=$registertopicID";
	// 	$GuidePoints = $this->QueryOne($sql_guide)['GuidePoints'];
	// 	$sql_process = "SELECT PointProcess from registertopic where ID=$registertopicID";
	// 	$PointProcess = $this->QueryOne($sql_process)['PointProcess'];

	// 	$base10 = ($GuidePoints + $PointProcess)/2.0;
	// 	$base4  = ($base10 / 10.0 ) * 4.0;

	// 	$id = $this->QueryOne("SELECT id from $this->table where registertopicID=$registertopicID")['id'];
		
	// 	$sql_update = "Update $this->table SET base10=$base10 where id=$id";
	// 	$this->QueryNoResult($sql_update);
	// 	$sql_update = "Update $this->table SET base4=$base4 where id=$id";
	// 	$this->QueryNoResult($sql_update);
	// }
	function update($key , $value , $id){
		$sql = "UPDATE $this->table SET $key='$value' WHERE id=$id";
		$this->QueryNoResult($sql);
		// set_flash('thongbao', 'Lưu Thành công');
		// redirect('index.php?option=evaluation');
	}
	function get_data_export(){
		$sql = "SELECT user.fullname, user.username, studentgroup.ClassRoom, studentgroup.SubGroupID, thesistopic.Name, registertopic.GuidePoints,registertopic.PointProcess,$this->table.base4,$this->table.base10
		FROM
			$this->table 
		INNER JOIN `user`
			ON $this->table.StudentID = `user`.ID
		INNER JOIN studentgroup
			ON $this->table.StudentID = studentgroup.ID1
		INNER JOIN thesistopic
            	ON evaluation_student.ThesisTopicID = thesistopic.ID
		INNER JOIN registertopic
            	ON $this->table.StudentID = registertopic.StudentID
		";
		return $this->QueryAll($sql);
	}
//close class
}
	
?>