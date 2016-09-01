<?php

$HowLong = "+ 5 Days";
$CookieKillDate = new DateTime($HowLong);
$CookieKillDate = $CookieKillDate->getTimestamp();

setcookie("page",1, $CookieKillDate);
header( 'Location: /html/VN/mangareader/reader.php' )

?>