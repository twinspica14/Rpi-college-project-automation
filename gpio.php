<?php
if (isset ( $_GET["pic"] )) {
	$pic = strip_tags ($_GET["pic"]);
	exec("irsend SEND_ONCE lol KEY_F".$pic." ");
}
else { echo ("fail"); }
?>