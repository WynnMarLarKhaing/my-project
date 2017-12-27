<?PHP
	include 'dbconnect.php';
	class DB_Function extends dbconnect{	
		private $str;
		private $conn;
		function __construct(){		
			$dbcon      = new parent();
			$this->conn = $dbcon->connect();
			$this->str  = "";
		}
		function select( $column_name ='' , $table_name ){		
			$this->str = "";
			if($column_name == '' ){  
				$column_name = '* ' . $column_name; 
			}
			$this->str .= "SELECT ".$column_name." FROM  ".$table_name;
			return $this;
		}		
		function join($join_type,$join_table,$join_column){
			$this->str .= $join_type." ". $join_table . " ON " . $join_column;
			return $this;
		}
		function where($where){
			$this->str .= " WHERE ".$where;
			return $this;
		}
		function paginate($limit,$offset){
			$this->str .= " LIMIT ".$limit.",".$offset;
			return $this;
		}			
		function insert($tablename,$data){		
			$this->str = "";
			$this->str .= "INSERT INTO ".$tablename." VALUES (".$data.");";
			return $this;
		}		
		function update($column_name,$where){		
			$this->str = "";
			$this->str .= "UPDATE `classroom` SET ".$column_name." WHERE ".$where;
			return $this;
		}		
		function delete($table_name){
			$this->str = "";
			$this->str .= "DELETE FROM ".$table_name;
			return $this;
		}
		function done(){		
			return $this->str;
		}		
		function execute(){
			$array_result = array();
			$sele         = mysqli_query($this->conn, $this->str) or die(mysqli_error($this->conn));			
			$this->str = $sele;
			return $this;
		}		
		function fetch_array(){
			while ($row = mysqli_fetch_array($this->str,MYSQLI_ASSOC)) {
				$array_result[] = $row;
			}
			$this->str = $array_result;
			return $this;
		}
	}
?>