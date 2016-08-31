<?PHP
$HowLong = "+ 5 Days";
$CookieKillDate = new DateTime($HowLong);
$CookieKillDate = $CookieKillDate->getTimestamp();
$Curpage = $_COOKIE['page'] + 1
setcookie("page",$minPage, $CookieKillDate);
//$loc = "'Location: index.php?page='".$Curpage;
//header($loc)
?>