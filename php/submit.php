<?php

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$command = "cmd.exe /c C:\pen\save.bat ".$email;
$output = shell_exec($command);

?>

<html>
	<head>
		<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
		<title>Hacked</title>
	</head>
	<body>
		You have been hacked!
	</body>
</html>