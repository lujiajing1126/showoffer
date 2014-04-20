<?php
header("Content-type:text/html;charset=utf-8");
require_once("./appInit.php");
RennAppClient::auth();
$client = RennAppClient::getRennClient();
$accessToken = new AccessToken(TokenType::Bearer, $_SESSION["access_token"], null);
$client->authWithToken($accessToken);
//$user_service = $client->getUserService();
$status = true;
isset($_GET["schools"]) && $schools = $_GET["schools"];
isset($_GET["name"]) && $name = urldecode($_GET["name"]);
isset($_SESSION["SACH_USER_NAME"]) && $name = $_SESSION["SACH_USER_NAME"];
$photo_description = "快来围观！我录取了这些学校~你们也来晒一晒吧~http://t.cn/8sjm8uE";
$url_build = "http://app.mysach.com/showoffer/generate.php?name=".$name."&schools=".$schools;
try  {
	//$user = $user_service->getUserLogin();
	//$album = $client->getAlbumService()->putAlbum($location, $album_description, $name);
	//$albumId = $album['id'];
	$photo = $client->getPhotoService()->uploadPhoto(null, $photo_description,$url_build);
}
catch(Exception $e)  {
	if(defined("DEBUG")) {
		echo $e->getMessage();
	}
	$status = false;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Uploading...</title>
	<link rel="stylesheet" href="./assets/stylesheets/upload.css">
</head>
<body>
	<?php
	if($status) {
	?>
	<img src="./assets/images/upload_successfully.jpg" alt="上传成功">
	<?php
	} else {
	?>
	<img src="./assets/images/upload_failed.jpg" alt="上传失败">
	<?php
	}
	?>
</body>
</html>
