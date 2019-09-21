<?php
include "phpqrcode/qrlib.php";

if(isset($_POST['Adress'])) {
	$hossein = $_POST['Adress'];
	QRcode::png($hossein);
	$QR=QRcode::png($hossein);
} ?>