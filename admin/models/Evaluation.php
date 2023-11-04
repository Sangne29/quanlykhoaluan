<?php

class evaluation extends Database
{
	
	function __construct()
	{
		parent::__construct();
	    $this->table = $this->TableName('evaluation_student');
    }
    function all()
    {
        $sql="SELECT * FROM $this->table";
        return $this->QueryCount($sql);
    }
    function list_evaluation($userId, $thesistopicId ){
        // $sql="SELECT StudentName, username, ClassRoom FROM $this->register_topic WHERE status!='0' AND TeacherID = '$userId' AND ThesisTopicID='$thesistopicId'  ORDER BY ID ASC 
        // LEFT JOIN $this->table ON $this->register_topic.StudentID = $this->table.StudentID";
		$sql = "SELECT *
			FROM
				$this->table 
			
			INNER JOIN `user`
				ON $this->table.StudentID = `user`.ID
			INNER JOIN studentgroup
				ON $this->table.StudentID = studentgroup.ID1
			WHERE 
				$this->table.ThesisTopicID = $thesistopicId
		";
		
		return $this->QueryAll($sql);
    }
    function evaluation_insert($data){
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
	function update($key , $value , $id){
		$sql = "UPDATE $this->table SET $key='$value' WHERE id=$id";
		$this->QueryNoResult($sql);
		// set_flash('thongbao', 'Lưu Thành công');
		// redirect('index.php?option=evaluation');
	}
	function get_data_export(){
		$sql = "SELECT user.fullname, user.username, studentgroup.ClassRoom, studentgroup.SubGroupID, thesistopic.Name, $this->table.l01,$this->table.l02,$this->table.l03,$this->table.l04
		FROM
			$this->table 
		INNER JOIN `user`
			ON $this->table.StudentID = `user`.ID
		INNER JOIN studentgroup
			ON $this->table.StudentID = studentgroup.ID1
		INNER JOIN thesistopic
            	ON evaluation_student.ThesisTopicID = thesistopic.ID
		";
		return $this->QueryAll($sql);
	}
//close class
}
	
?>