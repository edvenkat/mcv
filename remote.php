<?php 
	include_once 'include/loader.php';
	include_once 'include/JSON.php';
	$partial = addslashes($_GET['q']);

	$query="SELECT id, product_name FROM tbl_product WHERE product_name like '%".$partial."%'";
	$user_array=$sqlobj->getdatalistfromquery($query);

	//$json = new Services_JSON();
	if(!function_exists("json_decode")) {
		function json_decode($str) {
			global $json;
			return $json->decode($str);
		}
	}
	if(!function_exists("json_encode")) {
		function json_encode($str) {
			global $json;
			return $json->encode($str);
		}
	}

	//$myDataRows = array(); 
	//$result = mysql_query ("SELECT id, product_name FROM tbl_product WHERE product_name like %".$partial"%)";
	//while ($row = mysql_fetch_row($result)) {
		//array_push($myDataRows, $row);
	//}
	$ret = json_encode($user_array);
	echo $ret;
?>

