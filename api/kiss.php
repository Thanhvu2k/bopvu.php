<?php
$url = array(
"https://i.postimg.cc/XYywzsp3/02d4453f3eb0a76a87148433395b3ec3.gif",
"https://i.postimg.cc/G37G3WDd/574fcc7979b6f-1533876767756310501023.gif",
"https://i.postimg.cc/XqzC25Wp/574fcc797b21e-1533876813029926506824.gif",
"https://i.postimg.cc/DZ5sXDYQ/574fcc92e98c3-1533876840028170363441.gif",
"https://i.postimg.cc/yYD9DLh9/Crafty-Live-Junco-size-restricted.gif",
"https://i.postimg.cc/NFJ1WV6G/dedac9ceaace3856b6fe85522579fb88.gif",
"https://i.postimg.cc/7Yf7D8rp/1483589602-6b6484adddd5d3e70b9eaaaccdf6867e.gif",
"https://i.postimg.cc/W38rps3P/2b5271e20fa65925e07d0338fa290135.gif",
"https://i.postimg.cc/SK7YVmcz/4AaMn5E.gif",
"https://i.postimg.cc/6527grdK/anime-kiss.gif",
"https://i.postimg.cc/c4pKSvmn/anime-kiss-1.gif",
"https://i.postimg.cc/fbKkmBhc/anime-scums-wish.gif",
"https://i.postimg.cc/65gZpj9T/aniyuki-anime-gif-kiss-6.gif",
"https://i.postimg.cc/Y2yGdnL8/kiss-anime.gif",
"https://i.postimg.cc/VN1dJ22s/kissdofull.gif",
"https://i.postimg.cc/QtYtnCCV/original.gif",
);
$tuandz = array_rand($url);
$tuandeeptry = $url [$tuandz];
$kiss = array(
"url" => $tuandeeptry,
"author" => "TuanDeepTry",
"success" => "true",
);
$rdimg = json_encode($kiss);

$i = ['\/v\/','\/','TuanDeepTry'];
$t = ['/v/','/','TuanDeepTry'];
$j = str_replace($i, $t, $rdimg);
echo $j;
