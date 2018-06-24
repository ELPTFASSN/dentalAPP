<?php

require_once "./config/sys_application.php";

require_once CLASS_DIR . "Coupon.class.php";

$tpl = new Smarty;
$tpl->compile_check = COMPILE_CHECK;
$tpl->debugging = DEBUGGING;

$tpl->display("ortho.tpl");


