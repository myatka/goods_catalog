<?php

error_reporting(E_ALL & ~E_DEPRECATED);
$config = require "../config/config.php";
require "../src/Application.php";

Application::getInstance($config)
	->run();
/**
* 
*/


