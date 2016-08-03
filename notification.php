<?php

if ($argc < 3) {
    exit(1);
}
$host = $argv[1];
$text = $argv[2];

$url = 'http://'. $host. '/messages';
$headers = array(
    'Content-Type: application/x-www-form-urlencoded',
    'Authorization: Basic '.base64_encode('NTdhMGExNTlkYzljZDBmMDQ1NzA5MGFmOmIzNzEyY2JmNmQ2YmQxYzJiMzdhOTY0MWMwMzQ2YmNjNjJiMDRjNDczOTMzYmVkNA==:password'),
    );
$data = array(
    'room' => '57a0a184dc9cd0f0457090b0',
    'text' => $text,
    );
$options = array('http' => array(
    'method' => 'POST',
    'header' => implode("\r\n", $headers),
    'content' => http_build_query($data),
    ));
$contents = file_get_contents($url, false, stream_context_create($options));
?>
