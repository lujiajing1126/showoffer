<?php
require_once(APP_INC."rennclient/RennClient".SUF);
require_once(APP_INC."AppClient".SUF);

$client = RennAppClient::getRennClient();
var_dump($client);