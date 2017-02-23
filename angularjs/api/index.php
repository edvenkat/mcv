<?php
ini_set('display_errors',1);
$dbhost = '192.168.2.14';
$dbuser = 'anto';
$dbpass = '123456';
ini_set("allow_url_fopen", true);
//echo "<pre>";
//echo print_r($_POST);die;
//echo "</pre>";
include_once("JSON.php");
$json = new Services_JSON();
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
$data = json_decode(file_get_contents("php://input"),true);
$name = mysql_real_escape_string($data->name);
$email = mysql_real_escape_string($data->email);


$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn ) {
	die('Could not connect: ' . mysql_error());
}
$check_qry='select id from tbl_users where email_address="'.$email.'"';
mysql_select_db('venkat');
$check_retval = mysql_query( $check_qry, $conn );
while ($row = mysql_fetch_assoc($check_retval)) {
	$check_retval_arr[] = array_change_key_case($row, CASE_LOWER);
}
echo "<pre>";
echo print_r($check_retval_arr);die;
echo "</pre>";
if(count($check_retval_arr)>0) {
	echo "Email Address Already Exists.";
} else {
	$sql = 'INSERT INTO tbl_users (name,email_address) VALUES ( "'.$name.'","'.$email.'")';
	mysql_select_db('venkat');
	$retval = mysql_query( $sql, $conn );
	if(! $retval ) {
		die('Could not enter data: ' . mysql_error());
	}
	echo "Inserted data successfully.";
}
mysql_close($conn);
?>