<?php
require_once("./appInit.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title>晒你的Offer~ - Home</title>
</head>
<body>
	<div class="container">
		<?php
			RennAppClient::auth();
			$client = RennAppClient::getRennClient();
			echo $_SESSION["access_token"];
			$client->authWithToken($_SESSION["access_token"]);
			echo "test~";
			$user = $client->getUserService()->getUserLogin();
			var_dump($user);
		?>
		<img src="
		<?php 
			echo $user['avatar'][1]['url'];
		?>" title="头像" alt="头像" border="0" />
	</div>
</body>
</html>