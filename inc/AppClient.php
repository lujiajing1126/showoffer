<?php
	class RennAppClient  {
		const APP_ID = 266551;
		const API_KEY = "730b7243af664b169613df7d71ebcf17";
		const SECRET_KEY = "4af113dedba04926a6ca15fbf539ace5";
		private static $client = null;
		public static function getRennClient()  {
			if(!self::$client instanceof RennClientBase)
				self::$client = new RennClientBase (self::API_KEY, self::SECRET_KEY);
			return self:$client;
		}
		public static function auth()  {
			$xn_sig_added = $_GET["xn_sig_added"];
			if($xn_sig_added==0)
			{
				//跳转到授权页面
				$url="http://app.mysach.com/showoffer/welcome.php";
				echo "<script language='javascript' type='text/javascript'>"; 
				echo "window.location.href='$url'"; 
				echo "</script>";
			} else {
				$session_key = $_GET["xn_sig_session_key"];
				$_SESSION["session_key"]=$session_key;
				echo $_SESSION["session_key"];
			}
		}
	}