<?php
header('content-type:text/html;charset=UTF-8');
define("BIND_MODULE","Home");
define('APP_PATH', 'application/');
define("APP_DEBUG",true);
define("BUILD_DIR_SECURE",false);
include 'library/ThinkPHP/ThinkPHP.php';