<?php 
$DIRECT = "";
$bookname = "";
$minPage = 0;
$maxPage = 0;
$imgFormat = ".jpg";
$curpage = 0;
$HowLong = "+ 5 Days";
$CookieKillDate = new DateTime($HowLong);
$CookieKillDate = $CookieKillDate->getTimestamp();


setcookie("direct",$DIRECT, $CookieKillDate);
setcookie("bookname",$bookname, $CookieKillDate);
setcookie("format",$imgFormat, $CookieKillDate);
setcookie("minPage",$minPage, $CookieKillDate);
setcookie("maxPage",$maxPage, $CookieKillDate);

?>