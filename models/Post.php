<?php

class Post extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = $this->tablename('post');//latnt_post
	}
	function post_page($slug)
	{
		$sql="SELECT * FROM $this->table WHERE type='page' AND slug='$slug' AND status='1'";
		return $this->QueryOne($sql);
	}
	function post_rowslug($slug)
	{
		$sql = " SELECT * FROM $this->table
		WHERE type='post' 
		AND   slug='$slug'
		AND   status='1' ";
		return $this->QueryOne($sql);
	}
	
	
	function post_list1()
	{
		$sql = " SELECT * FROM $this->table
		WHERE status='1' ";
		return $this->QueryAll($sql);
	}

		function Post_Category($topid)
	{
		$sql = " SELECT * FROM $this->table
		WHERE topid='$topid' AND status='1' ";
		return $this->QueryAll($sql);
	}
	function post_list_count(){
		$sql="SELECT * FROM $this->table WHERE type='post' AND status='1' ";
		return $this->QueryCount($sql);
	}

		function post_topic($topid,$first,$limit){
		$sql = " SELECT * FROM $this->table
		WHERE topid='$topid'
		AND type='post' 
		AND   status='1'
		LIMIT $first,$limit
		";
		return $this->QueryAll($sql);
	}
	function post_topic_count($topid){
		$sql="SELECT * FROM $this->table WHERE topid='$topid' AND type='post' AND status='1' ";
		return $this->QueryCount($sql);
	}
	//close clas
}
