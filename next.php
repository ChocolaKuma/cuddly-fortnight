<?PHP
include "index.php";
$HowLong = "+ 5 Days";
$CookieKillDate = new DateTime($HowLong);
$CookieKillDate = $CookieKillDate->getTimestamp();

if(isset($_COOKIE['page'])){
	
	if($_COOKIE['page'] <= 29){
$curpage = $_COOKIE['page'] + 1;
setcookie("page",$curpage, $CookieKillDate);}
};

header( 'Location: /html/VN/mangareader/reader.php' )

?>