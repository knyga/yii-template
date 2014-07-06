<?php

if (isset($_SERVER['HTTP_CLIENT_IP'])
    || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    || !in_array(@$_SERVER['REMOTE_ADDR'], array('192.168.56.1', '127.0.0.1', 'fe80::1', '::1'))
) {
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

$yii    = dirname(__FILE__) . '/../vendor/yiisoft/yii/framework/yii.php';
$vendor = dirname(__FILE__) . '/../vendor/autoload.php';

require_once($yii);
require_once($vendor);

$config = require_once dirname(__FILE__) . '/../protected/config/main_dev.php';
$private = require_once dirname(__FILE__) . '/../protected/config/private.php';

Yii::createWebApplication(CMap::mergeArray($config, $private))->run();