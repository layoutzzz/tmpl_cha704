<?php
	if( isset($_REQUEST['gConf']) ) die; // globals hack prevention
	require_once ($gConf['dir']['layouts'] . 'base/params.php');

    $gConf['dir']['xsl'] = $gConf['dir']['layouts'] . 'cha/xsl/';	// xsl dir

    $gConf['url']['css'] = $gConf['url']['layouts'] . 'cha/css/';	// css url
    $gConf['url']['xsl'] = $gConf['url']['layouts'] . 'cha/xsl/';	// xsl url

?>
