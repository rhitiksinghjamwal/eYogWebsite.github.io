<?php 

class manage_users_class
 {


 	public $host="localhost";
 	public $username="root";
 	public $pass="";
 	public $db_name="yog";
 	public $conn;
 	public $users_list;
 	

 	public function __construct()
 	{
 		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
 		if ($this->conn->connect_errno)
 		 {
 			die("connection failed");
 		}
 	}

 	public function display_users()
 	{
 		$query="select * from users";
 		$result=$this->conn->query($query);
 		
 		while($row=$result->fetch_array(MYSQLI_ASSOC))
 		{
 			$this->users_list[]=$row;
 		}
 		return $this->users_list;
 	}
}

 ?>