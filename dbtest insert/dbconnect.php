<?php

/**
 * Database
 */
class Database
{

	public $host = "localhost";
	public $user = "dbusername";
	public $pass = "GxPjjwUxxev-";
	public $dbname ="jsacollege";

	public $servername = "localhost";
	public $username = "dbusername";
	public $password = "GxPjjwUxxev-";
	public $dbname = "jsacollege";

	public $db;
	
	function __construct(argument)
	{
		// code...
        $this->dbConnection();
	}

	public function dbConnection()
	{

		$this->db = new Mysqli($this->host,$this->user,$this->pass,$this->dbname);
		if (!$this->db) {
			// code...
			print($this->db->num_error);
			exit();
		}
	}

	public function insert($table,$fields='')
	{
		$insert = "INSERT INTO".$table."(".implode(',', array_keys($fields)).")values('".implode(',', array_values($fields))."')";

		$result = $this->query($insert);

		if($result){
			return true;
		}
		else{
			return false;
		}

	}
	public function delete($table,$condition='')
	{
		
		$deleted = "DELETE FROM ".$table."WHERE".$condition;

		$result = $this->query($deleted);

		if($result){
			return true;
		}
		else{
			return false;
		}

	}

	public function update($table,$fields='',$condition='')
	{
		
		$deleted = "UPDATE ".$table." SET  ".array_keys($fields) = array_values($fields) ."WHERE". $condition;

		$result = $this->query($deleted);

		if($result){
			return true;
		}
		else{
			return false;
		}

	}


}

?>	