<?php
    function fastworks_start() {
		global $__;
        $__['pathPage'] = "page/";
    
        $__['m'] = $_REQUEST['m'];
        if ($__['m'] == null) {
            $__['m'] = "index";
        }
    }
?>
