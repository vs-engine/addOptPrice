<?php
header('Content-Type: application/x-javascript; charset=utf8');

require_once 'addOptPrice/core/components/addoptprice/model/modxpush.class.php';
require_once $modx->getOption('core_path').'config/aop.class.php';
//var_dump($_POST);
$casePar = array_shift($_POST);
//echo($casePar."--ddd--");
//var_dump($_POST);
$ob=new aop($modx);


$ob->$casePar($_POST,$modx);