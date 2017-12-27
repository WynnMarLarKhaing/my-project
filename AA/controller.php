<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>
<?php
	include 'dao.php';
	
	$d          	= new dao();
	// $insert_arr 	= array('latest_classroom','latest_desc');
	// $insert_str 	= 'NULL,'.implode(',', array_map('add_quotes', $insert_arr));
	
	// $update_data  	= "";
	// $update_arr 	= array('`classroom`.classroom_name'=>'Marlar','`classroom`.description'=>'Khaing');
	// $where 			= "`classroom` = 3";
	
	// foreach($update_arr as $key => $value){
		// end($update_arr);
		// if(key($update_arr) == $key){
			// $update_data .= $key ."='".$value."'";
		// }else{
			// $update_data .= $key ."='".$value."',";
		// }
	// }
	
	// function add_quotes($str) {
		// return sprintf("'%s'", $str);
	// }
	
	// $d->update($update_data,$where);
	
	// // $d->insert('classroom',$insert_str);
	// $sel    = $d->select("classroom");
	// $array_result = array();
	
	// while ($row = mysqli_fetch_array($sel,MYSQLI_ASSOC)) {
		// $array_result[] = $row;
	// }
	// echo "<table>";
	// foreach($array_result as $value){
		// echo "
		
			// <tr>
				// <td>".$value['classroom']."</td>
				// <td>".$value['classroom_name']."</td>
				// <td>".$value['description']."</td>
			// <tr>
		// ";
	// }
	// echo "</table>";
	// echo $d->join(' INNER JOIN','student','a.ID = b.ID')->join(' Left JOIN','classroom','a.ID = b.ID')->where();
	echo $d->select("classroom")->execute()->test();
?>