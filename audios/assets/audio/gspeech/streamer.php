<?php
/**
* @version   $Id: gspeech.php 22 2012-03-25 15:42:53Z info@creative-solutions.net $
* @package   GSpeech
* @copyright Copyright (C) 2008 - 2015 creative-solutions.net. All rights reserved.
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

//if ($_SERVER['HTTP_REFERER'] != 'http://localhost/speech/speech.php?url=qaq')
//exit;
//echo 'http_host - '.$_SERVER['HTTP_HOST'];
//echo 'http_refferer - '.$_SERVER['HTTP_REFERER'];
//echo 'referer' . parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
//echo 'refferer= '.parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
//if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == $_SERVER['HTTP_HOST']) {

$txt = $_GET['q'];
$txt = strip_tags($txt);
$txt = preg_replace('/<script\b[^>]*>(.*?)<\/script>/si', "", $txt);
$txt = preg_replace('/<style\b[^>]*>(.*?)<\/style>/si', "", $txt);
$txt = str_replace(array("\"","'"),"",$txt);
$txt = str_replace("&nbsp;","",$txt);
$txt = urlencode($txt);

$lang = (string)$_GET['l'];
$token = (string)$_GET['token'];
if($_GET['tr_tool'] == 'g') {
    $type = 'audio/mpeg';
    // $url = 'http://translate.google.com/translate_tts?ie=UTF-8&q=' . $txt . '&tl=' . $lang . '&client=t';
    // https://translate.google.com/translate_tts?ie=UTF-8&q=hello&tl=en&tk=995126.592330&client=t
    // $url = 'http://translate.google.com/translate_tts?ie=UTF-8&q=' . $txt . '&tl=' . $lang . '&client=t&tk=995126.592330';
    $url = 'http://translate.google.com/translate_tts?ie=UTF-8&q='.$txt.'&tl='.$lang.'&tk='.$token .'&client=t';
    $url = 'http://translate.google.com/translate_tts?ie=UTF-8&q='.$txt.'&tl='.$lang.'&total=1&idx=0&textlen=5&tk='.$token .'&client=tw-ob&prev=input&ttsspeed=1';
}
elseif($_GET['tr_tool'] == 'm') {
   	$type = 'audio/mpeg';
    $url = 'http://api.microsofttranslator.com/v2/http.svc/Speak?language='.$lang.'&format=audio/mp3&options=MaxQuality&appid=T-gXTNZSpKRqLLMp-IJA_hfAbgvWdhczTRF_mA3U_1nM*&text='.$txt;
}

// $url = 'http://translate.google.com/translate_tts?ie=UTF-8&q=hello&tl=en&total=1&idx=0&textlen=5&tk=333685.206111&client=t&prev=input';


// echo $url;
// curl 'https://translate.google.com/translate_tts?ie=UTF-8&q=hello&tl=en&tk=995126.592330&client=t' -H 'user-agent: stagefright/1.2 (Linux;Android 5.0)' -H 'referer: https://translate.google.com/' > google_tts.mp3

// $agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)';
$agent = 'stagefright/1.2 (Linux;Android 5.0)';
$ch = curl_init ($url) ;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1) ;
curl_setopt($ch, CURLOPT_REFERER, 'https://translate.google.com/');
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
$media = curl_exec($ch) ;
curl_close($ch) ;

$content_length = strlen($media);

header("Content-type: ".$type);
header("Content-length: ".$content_length);
echo $media;
?>