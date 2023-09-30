<?php

 class Student_group extends Database
 {
 	
 	function __construct()
 	{
 		parent:: __construct();
 		$this->table = $this -> TableName('studentgroup');
 	}
 	function all_studentgroup($topicID)
    {
        $sql="SELECT * FROM $this->table WHERE ThesisTopicID = '$topicID'";
        return $this->QueryAll($sql);
    }
    function count_studentgroup($id,$topicID)
    {
        $sql="SELECT * FROM $this->table WHERE ID1 = '$id' AND ThesisTopicID = '$topicID'";
        return $this->QueryCount($sql);
    }
    function count_by_groupId($groupId)
    {
        $sql="SELECT * FROM $this->table WHERE ID = '$groupId' OR SubGroupID = '$groupId'";
        return $this->QueryCount($sql);
    }
    

    function count_studentgroup_thesisTopic($topicID)
    {
        $sql="SELECT * FROM $this->table WHERE ThesisTopicID = '$topicID'";
        return $this->QueryCount($sql);
    }
    function studentgroup_insert($data)
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
    }
    function studentgroup_update($data)
    {
        $strset='';
		foreach ($data as $f => $v)
		{
			$strset.=$f."='$v', ";
		}
		$strset=rtrim(rtrim($strset),',');
        $sql="UPDATE $this->table SET $strset WHERE ID = " . $_SESSION['idTicket'];
        $this->QueryNoResult($sql);
        unset($_SESSION['idTicket']);
    }
    function studentgroup_rowid($id)
	{
		$sql="SELECT * FROM $this->table 
		WHERE ID='$id'";
		return $this->QueryOne($sql);
	}
    function studentgroup_delete($id)
	{
		$sql="DELETE  FROM $this->table 
		WHERE id='$id'";
		$this->QueryNoResult($sql);
	}

 } 
 ?>