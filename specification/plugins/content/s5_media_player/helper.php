<?php 
$path = base64_decode($_REQUEST['fileurl']);$test = "yes";
$mm_type="application/octet-stream";
header("Cache-Control: public, must-revalidate");
header("Pragma: hack");
header("Content-Type: " . $mm_type);
header("Content-Length: " .(string)(filesize($path)) );
header('Content-Disposition: attachment; filename="'.$path.'"');
header("Content-Transfer-Encoding: binary\n");

readfile($path);
exit;
?>