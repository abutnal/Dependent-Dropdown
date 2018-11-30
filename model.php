<?php
include_once('database.php');
class curdOperation extends Database{
	// Select country name method
	public function select_country($table){
		$array = array();
		$sql = "SELECT * FROM ".$table;
		$query = mysqli_query($this->con, $sql);
		while($row = mysqli_fetch_assoc($query)):
			$array[] = $row;
		endwhile;
		return $array;

	}

	// Select State name method 
	public function select_state($table, $where){
		$sql="";
		$condition="";
		$array =array();
		foreach ($where as $key => $value) {
			$condition .= $key."='".$value."' AND "; 
		}
			$condition = substr($condition, 0,-5);
		$sql = "SELECT * FROM ".$table." WHERE ".$condition;
		$query = mysqli_query($this->con,$sql);
		while($row = mysqli_fetch_assoc($query)):
			$array[]=$row;
		endwhile;
		  return $array;
	}

}
$obj = new curdOperation;