<?php
    //include "fastworks/core.php";
    include "_fastworks/core.php";
    $__['pathPage'] = "page/";
    
    $__['m'] = $_REQUEST['m'];
    if ($__['m'] == null) {
        $__['m'] = "index";
    }
    loadLayout($__['pathPage'].$__['m'].".php");
?>