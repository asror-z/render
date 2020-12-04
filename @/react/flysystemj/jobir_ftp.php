<?php
require __DIR__ .'/vendor/autoload.php';

use League\Flysystem\Filesystem;
use League\Flysystem\Sftp\SftpAdapter;

$filesystem = new Filesystem(new SftpAdapter([
    'host' => '10.10.3.41',
    'port' => 22,
    'username' => 'root',
    'password' => 'Formula1',
    //'privateKey' => 'path/to/or/contents/of/privatekey',
    'root' => '/',
    'timeout' => 10,
]));


$extension = '301';
$callerId = '200';
$fileName  = rand(10, 1000).time();
$path = "/var/spool/asterisk/outgoing/" . $fileName . ".call";
$path = "/var/spool/" . $fileName . ".call";


$content =  "Channel: SIP/{$extension}\n";
//$content .= "Callerid: <{$callerId}>\n";
$content .= "Application: Playback\n";
$content .= "Data: hello-world\n";

$response = $filesystem->write($path, $content);

echo $path;
