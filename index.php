<?php

include __DIR__ . '/vendor/autoload.php';

$bucket = "";
$key = "";
$secret = "";
$endpoint = "";


$client = new \Aws\S3\S3Client([
    'credentials' => [
        'key' => $key,
        'secret' => $secret
    ],
    'region' => 'nyc3',
    'version' => 'latest',
    'endpoint' => $endpoint
]);


$adapter = new \League\Flysystem\AwsS3v3\AwsS3Adapter($client, $bucket);
$filesystem = new \League\Flysystem\Filesystem($adapter);

# ------------- LIST -----------------------------------------------
//$files = $filesystem->listContents("/");
//print_r($files);

# ------------- UPLOAD ---------------------------------------------
//$content = file_get_contents("background.png");
//$response = $filesystem->put("background.png",$content);
//print_r($response);