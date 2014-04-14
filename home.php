<?php
require_once("./appInit.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title>晒你的Offer~ - Home</title>
	<link rel="stylesheet" href="./assets/stylesheets/bootstrap.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="./assets/stylesheets/home.css">
</head>
<body>
	<div class="container">
		<?php
			RennAppClient::auth();
			$client = RennAppClient::getRennClient();
			$accessToken = new AccessToken(TokenType::Bearer, $_SESSION["access_token"], null);
			$client->authWithToken($accessToken);
			$user_service = $client->getUserService();
			try  {
				$user = $user_service->getUserLogin();
				$_SESSION["SACH_USER_NAME"] = $user['name'];
			}
			catch(Exception $e)  {
				echo $e->getMessage();
			}
		?>
		<h4>
		<?php 
			echo "你好，".$user['name'].",欢迎使用留学党晒Offer~";
		?></h4>
		<div id="mySchools">
			<h5>我拿到了这些学校的Offer：</h5>
			<ul class="selectedSchools"></ul>
		</div>
		<div id="schools">
			<div id="tabs">
			  <ul>
			    <li><a href="#tabs-1">1~10</a></li>
			    <li><a href="#tabs-2">11~20</a></li>
			    <li><a href="#tabs-3">21~30</a></li>
			    <li><a href="#tabs-4">31~40</a></li>
			    <li><a href="#tabs-5">41~50</a></li>
			    <li><a href="#tabs-6">51~60</a></li>
			  </ul>
			  <div class="selectSchools" id="tabs-1">
			    <div></div>
			  </div>
			  <div class="selectSchools" id="tabs-2">
			  	<div></div>
			  </div>
			  <div class="selectSchools" id="tabs-3">
			  	<div></div>
			  </div>
			  <div class="selectSchools" id="tabs-4">
			  	<div></div>
			  </div>
			  <div class="selectSchools" id="tabs-5">
			  	<div></div>
			  </div>
			  <div class="selectSchools" id="tabs-6">
			  	<div></div>
			  </div>
			</div>
		</div>
		<button class="btn btn-primary submit">生成Offer~</button>
	</div>
	<script src="./assets/scripts/lib/jquery/jquery.min.js"></script>
	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script src="./assets/scripts/home.js"></script>
</body>
</html>