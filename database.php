<?php
class Database{
	public $con;
	public function __construct(){
		$this->con = mysqli_connect("localhost", "root", "", "ddropdown");
		if (!$this->con) {
			die('Failed to connect DB').mysqli_errors();
		}
	}
}
$obj = new Database;