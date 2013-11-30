<?php 
require_once dirname(__FILE__)."/constants.php";
class Database{
	static $connection;

	public function Database(){
		if (isset($this->connection)) return;
		try{
			$this->connection = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
		} catch(PDOException $exception){
			print "Error!: " . $exception->getMessage() . "<br/>"; 
			die();
		}
 	}
 	function _setColumn($table,$column,$value,$id_column,$id_value){
		$result = $this->connection->prepare("UPDATE `$table` SET `$column`=? WHERE `$id_column`=?");
		$result -> execute(array($value,$id_value));
		return $result;
 	}
 	function _getColumn($table,$column,$id_column,$id_value){
 		$result = $this->connection->prepare("SELECT `$column` FROM `$table` where `$id_column`=?");
 		$result -> execute(array($id_value));
 		$result = $result->fetchAll();
 		if (count($result)==0) return false;
 		return $result[0];
 	}
}
$db = new Database();
?>
