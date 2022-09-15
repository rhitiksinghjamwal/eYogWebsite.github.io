<?php

class manage_faq_class
{


	public $host = "localhost";
	public $username = "root";
	public $pass = "";
	public $db_name = "yog";
	public $conn;
	public $faq_list;


	public function __construct()
	{
		$this->conn = new mysqli($this->host, $this->username, $this->pass, $this->db_name);
		if ($this->conn->connect_errno) {
			die("connection failed");
		}
	}

	public function display_faq_list()
	{
		$query = "select * from faq";
		$result = $this->conn->query($query);

		while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
			// $this->faq_details[]=
			$this->faq_list[] = $row;
		}
		// return $this->faq_details;
		return ($this->faq_list);
	}
}
