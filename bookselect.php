<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Book Selection</title>
</head>

<body>
<!-- action="bookselect.php"cookieset.php-->
<form method="post">
Directory :<input type="text" value="books/mayochikiVol1/" id="direct"><br>
File Name before page number :<input type="text" value="MayoChiki1-page-" id="bookname"><br>
Min Pages[INT] :<input type="text" value="1" id="minPage"><br>
Max Pages[INT] :<input type="text" value="346" id="maxPage"><br>
File format: <input type="radio" name="format" value="jpg">jpg | <input type="radio" name="format" value="png">png [default is jpg] <br>
Add to book listing? <input type="checkbox" name="SaveToDB" value="SaveToDB"><br>
<input type="submit" value="Submit"> 

</form>

<?php echo "output :<br><br><br>",$_POST["direct"],"<br>",$_POST["bookname"],"<br>",$_POST["minPage"],"<br>",$_POST["maxPage"],"<br>",$_POST["format"],"<br>",$_POST["SaveToDB"];?>
</body>
</html>
