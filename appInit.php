<?php
defined("APP_PATH") or define("APP_PATH",dirname(__FILE__) . '/');
defined("APP_INC") or define("APP_INC",APP_PATH."inc/");
defined("SUF") or define("SUF",".php");
session_start();
require_once(APP_INC.'auth'.SUF);