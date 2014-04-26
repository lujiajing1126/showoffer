<?php
require_once("./appInit.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<link rel="stylesheet" href="./assets/stylesheets/bootstrap.min.css">
		<link rel="stylesheet" href="./assets/stylesheets/preview.css">
	</head>
	<body>
		<img src="./generate.php?name=你的名字&schools=<?php echo $_GET["schools"]?>" width="800px" alt="你的offer">
		<a data-toggle="modal" data-target="#myModal">分享到我的相册</a>
		 
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <h4 class="modal-title" id="myModalLabel">确认上传</h4>
		      </div>
		      <div class="modal-body">
		        <p>留学党晒Offer墙将会上传这张照片到你的应用相册，照片描述：快来围观！我录取了这些学校~你们也来晒一晒吧~http://t.cn/8sjm8uE</p>
		        <p>确认是否授权？</p>
		        
		        &copy;SACH 2013-2014
  		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
		        <button id="upload" type="button" class="btn btn-primary" href="name=<?php echo $_SESSION["SACH_USER_NAME"]?>&schools=<?php echo $_GET["schools"]?>">确认上传</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<script src="./assets/scripts/lib/jquery/jquery.min.js"></script>
		<script src="./assets/scripts/lib/bootstrap/bootstrap.min.js"></script>
		<script src="./assets/scripts/preview.js"></script>
	</body>
</html>