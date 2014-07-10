<?php

Yii::setPathOfAlias('vendor', dirname(__FILE__) . '/../../vendor');

$dirname=dirname(__FILE__);
$main=require_once $dirname.'/main.php';
$private=require_once $dirname.'/private.php';
return CMap::mergeArray($main, $private, array(

));
