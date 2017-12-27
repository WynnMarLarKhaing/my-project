<?php
include 'dbconnect.php';
class dao extends dbconnect {
    private $conn;
	private $str;

    public function __construct($str = "") { 
       $dbcon = new parent(); 
	   $this->str = $str;
       // this is not needed in your case
       // you can use $this->conn = $this->connect(); without calling parent()
       $this->conn = $dbcon->connect();
    }

    public function select( $table , $where='' , $other='' ){
       if($where != '' ){  // condition was wrong
         $where = 'where ' . $where; // Added space 
       }
      $this->str .= "SELECT * FROM  ".$table." " .$where. " " .$other;
	  return $this;
       // $sele = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
       // // echo $sele; // don't use echo statement because - Object of class mysqli_result could not be converted to string
       // return $sele;	   
    }
	
	public function insert($tablename,$data){
		$sql = "INSERT INTO ".$tablename." VALUES (".$data.");";
		mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
	}	
	
	public function update($update_arr,$where){
		$sql = "UPDATE `classroom` SET ".$update_arr." WHERE ".$where;
		mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
	}
	
	public function join($join_type,$table,$join_column){
		$this->str .= $join_type." ". $table . " ON " . $join_column;
        return $this;
	}
	
	public function where($where){
		return $this->str .= " WHERE $where ";
	}
	
	public function execute(){
		$this->str .= " WHERE ";
		return $this;
	}
	
	public function test(){
		return  $this->str;
	}
	
}
?>