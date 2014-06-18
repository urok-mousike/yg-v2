<?php
	/* ==================================================
		- Function loadLayout
	================================================== */
	//loadLayout("pages/index.php","layout.htm");
	//loadLayout("header","layout.htm");
	//loadLayout("footer","layout.htm",);
	function loadLayout($get_where="",$layoutPath="layout/",$layoutFile="layout.php") {
		global $__;
		
		$strArray = file ( $layoutPath.$layoutFile );
		
		foreach ($strArray as $key=>$order) {
			$tmp = strpos($order,"{%- body %}");
		
			if ($tmp === 0 || $tmp > 0) {
				if (is_file($get_where)) {
					include $get_where;
				}
			} else {
				$pattern = "{\{%- include:\"(.*)\" %\}}";
				$pattern_start = "{\{%- include:\"}";
				$pattern_end = "{\" %\}}";
				if (preg_match ( $pattern , $order )) {
					$order = preg_replace($pattern_start,"",$order);
					$order = preg_replace($pattern_end,"",$order);
					$order = preg_replace("/\n/","",$order);
					$order = preg_replace("/\r/","",$order);
                    $orderFile = $layoutPath.$order;
                    if (is_file($orderFile)) {
					    include $orderFile;
				    }
                    $order = "";
				}
				
				echo $order;
			}
		}
	}
?>