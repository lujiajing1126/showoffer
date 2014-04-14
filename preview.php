<?php
require_once("./appInit.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<link rel="stylesheet" href="./assets/stylesheets/preview.css">
	</head>
	<body>
		<img src="./generate.php?name=你的名字&schools=<?php echo $_GET["schools"]?>" width="800px" alt="你的offer">
		<a href="name=<?php echo $_SESSION["SACH_USER_NAME"]?>&schools=<?php echo $_GET["schools"]?>">点击上传到人人相册~</a>
		<script src="./assets/scripts/lib/jquery/jquery.min.js"></script>
		<script src="./assets/scripts/preview.js"></script>
	</body>
</html>