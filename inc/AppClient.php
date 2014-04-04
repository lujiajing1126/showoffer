<?php
	class RennAppClient  {
		const APP_ID = 266551;
		const API_KEY = "730b7243af664b169613df7d71ebcf17";
		const SECRET_KEY = "4af113dedba04926a6ca15fbf539ace5";
		private static $client = null;
		public static function auth()  {
			if(!self::$client instanceof RennClientBase)
				self::$client = new RennClientBase (self::API_KEY, self::SECRET_KEY);
		}
	}
?>