<?php
require_once("./appInit.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title>晒你的Offer~ - Home</title>
	<link rel="stylesheet" href="//libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css">
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
				if(defined("DEBUG"))
					echo $e->getMessage();
			}
		?>
		<h4>
		<?php
			echo "你好, ".(isset($user['name'])?$user['name']:'来宾').", 欢迎使用留学党晒Offer~";
		?></h4>
		<div class="submit">
			<span>生成我的Offer墙</span>
		</div>
		<div id="mySchools">
			<ul class="selectedSchools"></ul>
		</div>
		<div id="schools">
			<div class="selbox">
				<ul>
					<li class="univ selected"><span>综合性大学</span></li>
					<li class="college"><span>文理学院</span></li>
				</ul>
			</div>
			<div id="tabs" class="tabs univ-rank">
			  <ul>
			    <li><a href="#tabs-1">1-10</a></li>
			    <li><a href="#tabs-2">12-20</a></li>
			    <li><a href="#tabs-3">23-30</a></li>
			    <li><a href="#tabs-4">31-39</a></li>
			    <li><a href="#tabs-5">41-49</a></li>
			    <li><a href="#tabs-6">52-60</a></li>
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
			<div id="tabs2" class="tabs college-rank">
			  <ul>
			    <li><a href="#tabs-1">1-9</a></li>
			    <li><a href="#tabs-2">12-20</a></li>
			    <li><a href="#tabs-3">22-30</a></li>
			    <li><a href="#tabs-4">31-38</a></li>
			    <li><a href="#tabs-5">41-50</a></li>
			    <li><a href="#tabs-6">52-59</a></li>
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
	</div>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script src="./assets/scripts/home.js"></script>
</body>
</html>