<?php
	include "lib/common.php";
	
    $server_path = str_replace(basename(__FILE__), "", realpath(__FILE__));
    $__['pathRoot'] = $server_path;

    loadModule("db");
    loadModule("layout");

?>