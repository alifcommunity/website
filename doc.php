<?php

$redirect = 'docs';
header('HTTP/1.1 301 Moved Permanently');
header('Location: ' . $redirect);
exit();

?>