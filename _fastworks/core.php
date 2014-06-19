<?php
    $__['pathRoot'] = str_replace(basename(__FILE__), "", realpath(__FILE__)); //_fastworks 절대경로

	include_once "_lib/common.php";
	include_once "_core/init.php";
    include_once "_core/common.php";

    loadModule("db");
    loadModule("layout");
    loadLayout($__['pathPage'].$__['m'].".php");
?>