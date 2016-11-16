<?php
$opt1 = $argv[1];
$apiKey = $argv[2];
$opt2 = $argv[3];
$apiSecret = $argv[4];
$opt3 = $argv[5];
$file = $argv[6];
$opt4 = $argv[7];
$ci = $argv[8];

 

$path = $argv[8]."/job/".getenv('JOB_NAME')."/ws/".$file;

$url = 'http://digitalsecurity-7407mm42.cloudapp.net/api/';
$data = array('apiKey' => $apiKey, 'apiSecret' => $apiSecret, 'URL' => $path);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);




?>
