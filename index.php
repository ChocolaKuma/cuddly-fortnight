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

/* if(isset($_COOKIE['page'])){
	
	if($_COOKIE['page'] <= $maxPage){
$curpage = $_COOKIE['page'] + 1;
setcookie("page",$curpage, $CookieKillDate);}
}; */


//set get var page,nabe;booknum,ect

$FINALDIRECT = $DIRECT.$bookname.$_COOKIE['page'].$imgFormat;

echo "Displaying image:<br>",$FINALDIRECT;

?>
<br>
<img src=<?php echo $FINALDIRECT;?> width="300" height="450" >
<br>
<form action="last.php" method="post">
<button type="submit" value="Last Page">Last Page</button>
</form>
<form action="reset.php" method="post">
<button type="submit" value="Reset Page">Reset Page</button>
</form>
<form action="next.php" method="post">
<button type="submit" value="Next Page">Neset Page</button>
</form>