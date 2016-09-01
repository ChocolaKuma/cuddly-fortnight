<!DOCTYPE html>
<?PHP
$SITENAME = "";
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

//echo "Displaying image:<br>",$FINALDIRECT;

?>
<html lang="en">



<head>



    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">



    <title><?php echo $bookname; ?></title>



    <!-- Bootstrap Core CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">



    <!-- Custom Fonts -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">



    <!-- Plugin CSS -->

    <link rel="stylesheet" href="css/animate.min.css" type="text/css">



    <!-- Custom CSS -->

    <link rel="stylesheet" href="css/creative.css" type="text/css">



 



</head>



<body id="page-top" id="overlay">



  



    <header>

        <div class="header-content">

            <div class="header-content-inner">
            <br><br><br>

                <h1></h1>

                <hr>

                <p><h2><?PHP echo $bookname; ?></h2><br>
                [BOOK STATS HERE]</p>

                <iframe src="reader.php" seamless align="middle" width="500" height="620"></iframe>
                

                       

                 <br><br><hr>

                 Jhinebrook (at) outlook (dot) com<br><br><br>

               &#169;    2013-<?php echo date("Y") ?>          

                

                

            </div>

        </div>

    </header>



    







    <!-- jQuery -->

    <script src="js/jquery.js"></script>



    <!-- Bootstrap Core JavaScript -->

    <script src="js/bootstrap.min.js"></script>



    <!-- Plugin JavaScript -->

    <script src="js/jquery.easing.min.js"></script>

    <script src="js/jquery.fittext.js"></script>

    <script src="js/wow.min.js"></script>



    <!-- Custom Theme JavaScript -->

    <script src="js/creative.js"></script>



</body>



</html>