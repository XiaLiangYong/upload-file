<?php

$mch_id = "10000";//可配置
$key = 'nicsdasdsdfdgdgdfg';//可配置
$time = time();
$nonce_str = getRandom(32);
$sign = getSign($mch_id, $time, $nonce_str, $key);

//1.请求
$uploadUrl = 'http://localhost:8080/upload/single?mch_id=' . $mch_id . '&time=' . $time . '&nonce_str=' . $nonce_str . '&sign=' . $sign;
echo "uploadUrl:" . $uploadUrl . "\n";
//2.batch请求地址
$batchUrl= 'http://localhost:8080/upload/batch?mch_id=' . $mch_id . '&time=' . $time . '&nonce_str=' . $nonce_str . '&sign=' . $sign;
echo "batchUrl:" . $uploadUrl . "\n";
//3.断点续传地址
$pluploadUploadUrl = 'http://localhost:8080/upload/pluploadUpload/?mch_id=' . $mch_id . '&time=' . $time . '&nonce_str=' . $nonce_str . '&sign=' . $sign;
echo "pluploadUploadUrl:" . $uploadUrl . "\n";

function getSign($mch_id, $time, $nonce_str, $key)
{
    $map = [];
    $map['mch_id'] = $mch_id;
    $map['time'] = $time;
    $map['nonce_str'] = $nonce_str;
    ksort($map);
    $str = http_build_query($map) . "&key=" . $key;
    return strtoupper(md5($str));
}

function getRandom($num)
{
    $str = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $key = "";
    for ($i = 0; $i < $num; $i++) {
        $key .= $str{mt_rand(0, 32)};
    }
    return $key;
}
