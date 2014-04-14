<?php
require_once("./appInit.php");
require_once(APP_INC."list".SUF);
require_once(APP_INC."gd2helper".SUF);
require_once(APP_INC."offer.class".SUF);
// Auth
$username = '小灰灰';
// Verify Token

// Generate Image
isset($_GET["schools"]) && $schools = $_GET["schools"];
isset($_GET["name"]) && $username = $_GET["name"];
isset($_SESSION["SACH_USER_NAME"]) && $username = $_SESSION["SACH_USER_NAME"];
$schools_array = explode('-', $schools);
if(count($schools_array) > 10)
	die("非法的请求");
sort($schools_array,SORT_NUMERIC);
$token = md5(implode('-', $schools_array));
$myList = array();
foreach($schools_array as $key => $value) {
	$myList[] = $list[$value];
}
if(checkfiles($myList)) {
	$img = new Offer($token,$myList,$username);
	$img->render_images($schools_array);
}
else
	echo "非法的请求";