<?php

if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off")
{
    $redirect = 'http://127.0.0.1:80' . $_SERVER['REQUEST_URI'];
	
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
	
    exit();
}

	$ALIF_STUDIO_VERSION_WINDOWS = "2.0.14";
	$ALIF_STUDIO_VERSION_LINUX = "2.0.11";
	$ALIF_STUDIO_VERSION_MAC = "1.22";

?>