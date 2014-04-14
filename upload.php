<?php
header("Content-type:text/html;charset=utf-8");
require_once("./appInit.php");
RennAppClient::auth();
$client = RennAppClient::getRennClient();
$accessToken = new AccessToken(TokenType::Bearer, $_SESSION["access_token"], null);
$client->authWithToken($accessToken);
$user_service = $client->getUserService();
isset($_GET["schools"]) && $schools = $_GET["schools"];
isset($_GET["name"]) && $name = $_GET["name"];
isset($_SESSION["SACH_USER_NAME"]) && $name = $_SESSION["SACH_USER_NAME"];
$location = "Shanghai/SACH/mysach.com";
$album_description = "留学党晒Offer~";
$photo_description = "快来围观！我录取了这些学校~你们也来晒一晒吧~http://goo.gl/WN05pH";
$name = "留学党晒Offer应用相册";
$url_build = "http://app.mysach.com/showoffer/generate.php?name=".$name."&schools=".$schools;
try  {
	//$user = $user_service->getUserLogin();
	//$album = $client->getAlbumService()->putAlbum($location, $album_description, $name);
	//$albumId = $album['id'];
	$photo = $client->getPhotoService()->uploadPhoto(null, $photo_description,$url_build);
}
catch(Exception $e)  {
	echo $e->getMessage();
}
echo "上传成功~";
