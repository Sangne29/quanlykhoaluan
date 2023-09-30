<?php

 class Topic extends Database
 {
 	
 	function __construct()
 	{
 		parent:: __construct();
 		$this->table = $this -> TableName('topic');
 	}
 	function topic_rowslug($slug)
 	{
 		$sql = " SELECT * FROM $this->table
 		 WHERE slug='$slug'";
 		return $this->QueryOne($sql);
 	}
 	
 } 
 ?>