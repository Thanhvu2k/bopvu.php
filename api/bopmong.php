<?php
$url = array(
"https://i.postimg.cc/J44r1MXY/detail.gif",
"https://i.postimg.cc/RhGvcbkT/detail-2.gif",
"https://i.postimg.cc/RCTC5NWn/dkUlEBe.gif",
"https://i.postimg.cc/1z6PWtxX/squeeze-dat-ass-001.gif",
"https://i.postimg.cc/5N7xyTq4/tumblr-0a7f78ae0514fd8654409bd7e2410068-a200b089-500.gif",
"https://i.postimg.cc/Gm6dJD56/tumblr-ob4hm0k-Yg-U1v2hfg0o6-500.gif",
"https://i.postimg.cc/6p8BvcYd/tumblr-os64hm-Sc-AN1smwom8o10-1280.gif",
);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$bopmong = array(
"url" => $tuandeeptry,
"author" => "TuanDeepTry",
"success" => "true",
);
$rdimg = json_encode($bopmong);

$i = ['\/v\/','\/','TuanDeepTry'];
$t = ['/v/','/','TuanDeepTry'];
$j = str_replace($i, $t, $rdimg);
echo $j;
