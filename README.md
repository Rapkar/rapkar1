Ceate Qr Code Php

this sample for Create Qrcode ,

you can type your adrress and get Qr

for run this. must   xampp  setup
1-Download files of git
2-Extract Rar File In Root



enjoy

index file:

<?php include 'qr.php';?>
<!doctype html>
<img lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
     content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>QR Code</title>
</head>
<form method="post" action="qr.php">
	<strong>your Adress</strong>
<input type="textarea" name="Adress">
<input type="submit" onclick="Accept()" value="Create" ></input>
</form>
</body>
<script>
	function  Accept() {
	    alert("OK Your Code Generated.");
    }
</script>
</html>

