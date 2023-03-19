<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<html>
<head>
<meta charset='UTF-8'><meta name="robots" content="noindex">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
<style>
html {
	height: 100%;
	background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
	color: #a3a3a3;
	text-align: center;
}
#title {
	left: 10px;
	right: 10px;
	text-align: center;
	font-size: 10vi;
	color: #a3a3a3;
	margin-top: 0px;
}
#content {
	display: flex;
	justify-content: center;
	align-items: center;
	text-align: center;
}
#server {
	font-size: 10vi;
	background: #0000a3;
	color: #a3a3a3;
}
#kill {
	font-size: 10vi;
	background: #a30000;
	color: #a3a3a3;
}
</style>
</head>
<body>
<div id="title">
Switch&nbsp;LAN&nbsp;Servers
</div>
<div id="content">
<form method="post">
<p><input id="server" type="submit" name="submit" value="Start teknik 11451"></p>
<p><input id="server" type="submit" name="submit" value="Start joinsg 11451"></p>
<p><input id="server" type="submit" name="submit" value="Start joinsg 11453"></p>
<p><input id="server" type="submit" name="submit" value="Start tekn0 11451"></p>
<p>&nbsp;</p>
<p><input id="kill" type="submit" name="submit" value="Kill client"></p>
</form>
</div>
<?php
if($_POST['submit'] == "Start teknik 11451")
{
	pclose(popen("START lan-play-win64.exe --relay-server-addr lan.teknik.app:11451 --netif 1", "r"));
	echo nl2br("lan.teknik.app client has been started.");
}
if($_POST['submit'] == "Start joinsg 11453")
{
	pclose(popen("START lan-play-win64.exe  --relay-server-addr joinsg.net:11453 --netif 1", "r"));
	echo nl2br("joinsg.net primary client has been started.");
}
if($_POST['submit'] == "Start joinsg 11451")
{
	pclose(popen("START lan-play-win64.exe  --relay-server-addr joinsg.net:11451 --netif 1", "r"));
	echo nl2br("joinsg.net secondary client has been started.");
}
if($_POST['submit'] == "Start tekn0 11451")
{
	pclose(popen("START lan-play-win64.exe --relay-server-addr tekn0.net:11451 --netif 1", "r"));
	echo nl2br("tekn0.net client has been started.");
}
if($_POST['submit'] == "Kill client")
{
	pclose(popen("START taskkill /F /im lan-play-win64.exe", "r"));
	echo nl2br("Client Killed.\r\nSelect another client.");
}
else{}
?>
</body>
</html>
