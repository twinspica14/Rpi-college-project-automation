<?php
if(isset($_GET['temp'])){
	$temp=$_GET['temp'];	
	if($temp=="on"){
		exec ("irsend SEND_ONCE lol KEY_ON");
	}
	if($temp=="off"){
		exec ("irsend SEND_ONCE lol KEY_OFF");
	}
	if($temp=="17"){
		exec ("irsend SEND_ONCE lol KEY_LOW");
	}
	if($temp=="22"){
		exec ("irsend SEND_ONCE lol KEY_MED");
	}
	if($temp=="26"){
		exec ("irsend SEND_ONCE lol KEY_HIGH");
	}
	if($temp=="pon"){
		exec ("irsend SEND_ONCE lol KEY_CHANNELUP");
	}
	if($temp=="search"){
		exec ("irsend SEND_ONCE lol KEY_CHANNELDOWN");
	}
}


?>