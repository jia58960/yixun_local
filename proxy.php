<?php
header("Content-type: text/html; charset=utf-8");
// File Name: proxy.php
if (!isset($_GET['url'])) die();

$url = urldecode($_GET['url']);

$url = 'http://' . str_replace('http://', '', $url);

$data = http_build_query($_POST);

$opts = array (
	'http' => array (
	'method' => 'POST',
	'header'=> "Content-type: application/x-www-form-urlencoded\r\n" .
	"Content-Length: " . strlen($data) . "\r\n",
	'content' => $data
	)
);

$context = stream_context_create($opts);

echo file_get_contents($url, false, $context);

?>