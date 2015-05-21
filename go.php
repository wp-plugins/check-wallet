<?php
if(isset($_GET['processor'])){
	if($_GET['processor'] == 1 ){
		header("Location: https://blockchain.info/address/".$_GET['address']);
	} else if($_GET['processor'] == 2 ){
		header("Location: https://faucetbox.com/check/".$_GET['address']);
	} else if($_GET['processor'] == 3 ){
		header("Location: https://microwallet.org/?u=".$_GET['address']);
	}
}
?>
