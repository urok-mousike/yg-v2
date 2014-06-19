<?php

    /* ========================================
        - loadModule()
    ======================================== */
    function loadModule($moduleId) { 
        global $__;
        @include_once $__['pathRoot']."module/".$moduleId."/common.php";
    }
?>