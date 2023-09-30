<?php

class Auth extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$this->table = $this->tablename('user');
	}

function user_auth_check($username)
{
	$sql="SELECT * FROM $this->table 
	WHERE status='1' 
	AND access='6' 
	AND (username='$username' or email='$username')";
	if($this->QueryCount($sql))
	{
		return $this->QueryOne($sql);
	}
	return false;
}

function u_auth_guard($username,$password)
{
		if(filter_var($username, FILTER_VALIDATE_EMAIL))
			{
				$sql="SELECT * FROM $this->table WHERE  email='$username' AND password='$password' AND status='1' AND access = '6'";
			}
			else{
					$sql="SELECT * FROM $this->table WHERE  username='$username' AND password='$password' AND status='1' AND access = '6'";
			}

	if($this->QueryCount($sql))
	{
		return $this->QueryOne($sql);
	}
	return false;
}


//close class
}
?>
