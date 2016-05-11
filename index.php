<?php
$ctl = $_POST['ctl'];
$command = "sudo ./run.py $ctl";
$result = shell_exec($command);
echo($result);
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>My Raspberry pi GPIO Control</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="ctrl">
<h2 class="head">Light Control</h2>
<form action="" method="POST" name="form">
	<input class="open" type="submit" id="ON" value="开">
    <input type="hidden" name="ctl" value="1">
</form>
<form action="" method="POST" name="form">
	<input class="close" type="submit" id="OFF" value="关">
	<input type="hidden" name="ctl" value="0">
</form>
</div>
</body>
</html>