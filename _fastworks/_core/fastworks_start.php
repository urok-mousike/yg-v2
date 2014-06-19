<?php
    function fastworks_start($page_path = "page/") {
		global $__;
        $__['pathPage'] = $page_path;
    
        $__['m'] = $_REQUEST['m'];
        if ($__['m'] == null) {
            $__['m'] = "index";
        }

        loadLayout($__['m'].".php");
    }
?>
