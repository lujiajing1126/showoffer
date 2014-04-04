<?php
class RennServiceBase {
	protected $client;
	protected $accessToken;
	
	/**
	 * 构造函数
	 */
	function __construct($client, $accessToken) {
		echo "construct Service";
		$this->client = $client;
		$this->accessToken = $accessToken;
	}
}