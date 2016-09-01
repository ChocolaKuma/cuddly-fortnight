<?PHP
$DIRECT = "books/mayochikiVol1/";
$bookname = "MayoChiki1-page-";
$minPage = 1;
$maxPage = 346;
$imgFormat = ".jpg";
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


$FINALDIRECT = $DIRECT.$bookname.str_pad($_COOKIE['page'], 3, "0", STR_PAD_LEFT).$imgFormat;

//$FINALDIRECT = $DIRECT.$bookname.$_COOKIE['page'].$imgFormat;

echo "Displaying image:<br>",$FINALDIRECT;

?>
<style type="text/css">
.img-100 img {max-width: 100% max-height: 100%;}
.img-75 img {max-width: 75%;}
.img-50 img {max-width: 50%;max-height: 50%;}
.img-25 img {max-width: 25%;max-height: 25%;}
</style>


<table align="center">
<tr align="center">
<td align="center" colspan="1">
<form action="last.php" method="post">
<button type="submit" value="Last Page">Last Page</button>
</form>
</td>
<td align="center" colspan="1">
<form action="reset.php" method="post">
<button type="submit" value="Reset Page">Reset Page</button>
</form>
</td>
<td align="center" colspan="1">
<form action="next.php" method="post">
<button type="submit" value="Next Page">Next Page</button>
</form>
</td>
</tr>
<tr align="center">
<td align="center" colspan="3">
<div class="img-75">
<img src=<?php echo $FINALDIRECT;?> >
</div>
</td>
</tr>
<tr align="center">
<td align="center" colspan="1">
<form action="last.php" method="post">
<button type="submit" value="Last Page">Last Page</button>
</form>
</td>
<td align="center" colspan="1">
<form action="reset.php" method="post">
<button type="submit" value="Reset Page">Reset Page</button>
</form>
</td>
<td align="center" colspan="1">
<form action="next.php" method="post">
<button type="submit" value="Next Page">Next Page</button>
</form>
</td>
</tr>
</table>