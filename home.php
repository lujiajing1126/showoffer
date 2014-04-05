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
			$accessToken = new AccessToken(TokenType::Bearer, $_SESSION["access_token"], null);
			$client->authWithToken($accessToken);
			$user_service = $client->getUserService();
			try  {
			$user = $user_service->getUserLogin();
			}
			catch(Exception $e)  {
				echo $e->getMessage();
			}
		?>
		<img src="
		<?php 
			echo $user['avatar'][1]['url'];
		?>" title="头像" alt="头像" border="0" />
	</div>
</body>
</html>