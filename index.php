<?PHP
$DIRECT = "books/Kawasoft_Artbook/";
$bookname = "Kawasoft_Artbook-";
$minPage = 1;
$maxPage = 3;
$imgFormat = ".png";
$curpage = 0;
$HowLong = "+ 5 Days";
$CookieKillDate = new DateTime($HowLong);
$CookieKillDate = $CookieKillDate->getTimestamp();

if(!isset($_COOKIE['page']))
	{setcookie("page",$minPage, $CookieKillDate);}

if(isset($_COOKIE['page'])){
	
	if($_COOKIE['page'] <= $maxPage){
$curpage = $_COOKIE['page'] + 1;
setcookie("page",$curpage, $CookieKillDate);}
};


//set get var page,nabe;booknum,ect

$FINALDIRECT = $DIRECT.$bookname.$_COOKIE['page'].$imgFormat;

echo $FINALDIRECT;

?>
<br>
<img src=<?php echo $FINALDIRECT;?> width="300" height="450" >