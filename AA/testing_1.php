<?PHP
	spl_autoload_register(function ($class) {
		include $class . '.php';
	});

	$insert_arr = array('Wynn Marlar ','Khaing');
	$insert_str = 'NULL,'.implode(',', array_map('add_quotes', $insert_arr));
	
	$update_data  	= "";
	$update_arr 	= array('`classroom`.classroom_name'=>'①','`classroom`.description'=>'②Ⅱ');
	$where 			= "`classroom` = 39";
	
	foreach($update_arr as $key => $value){
		end($update_arr);
		if(key($update_arr) == $key){
			$update_data .= $key ."='".$value."'";
		}else{
			$update_data .= $key ."='".$value."',";
		}
	}
	
	$db 	    = new DB_Function();	
	// $insert  = $db->insert('classroom',$insert_str)->execute();	
	// $update  = $db->update($update_data,$where)->execute()->done();	
	// $delete  = $db->delete("classroom")->where("classroom IN (33)")->execute()->done();
	$select  = $db->select("TITLE_COMMENT","rpt_v_report")->where("ID is not NULL")->paginate(100,200)->execute()->fetch_array()->done();
	// $x 	    = $db->select("","classroom")->join(' LEFT JOIN','classroom','a.ID = b.ID')->join(' INNER JOIN','classroom','a.ID = b.ID')->where("classroom is not NULL")->done();
	
	print_r($select);
	
	function add_quotes($str) {
		return sprintf("'%s'", $str);
	}
?>