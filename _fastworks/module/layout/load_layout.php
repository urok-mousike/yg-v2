<?php
	/* ==================================================
		- Function loadLayout
	================================================== */
	//loadLayout("pages/index.php","layout.htm");
	//loadLayout("header","layout.htm");
	//loadLayout("footer","layout.htm",);
    	function loadLayout($get_where="",$layoutPath="layout/",$layoutFile="layout.php") {
		global $__;
		$__['main'] = $__['pathPage'].$get_where;
        include $layoutPath.$layoutFile;
	}
?>