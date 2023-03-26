<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
  $bg = array_slice(scandir(walls), 2);
  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<html>
<head>
<meta charset='UTF-8'><meta name="robots" content="noindex">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
<style>
html {
	background: url('walls/<?php echo $selectedBg; ?>') no-repeat center fixed;     
    background-size: cover;
	height: 100%;
	/* background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%); */
	color: #ffffff;
	text-align: center;
}
#title {
	width: 100%;
    height: auto;
	left: 10px;
	right: 10px;
	text-align: center;
	color: #ffffff;
	margin-top: 0px;
}
#content {
	justify-content: center;
	align-items: center;
	text-align: center;
}
#server {
	font-size: 10vi;
	background: #0000a37f;
	color: #ffffff;
}
#kill {
	font-size: 10vi;
	background: #a300007f;
	color: #ffffff;
}
img {
    max-width: 100%;
    height: auto;
}
</style>
</head>
<body>
<div id="title">
<img src="SLP.png"></img>
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
	exec("START taskkill /F /im lan-play-win64.exe");
	pclose(popen("START lan-play-win64.exe --relay-server-addr lan.teknik.app:11451", "r"));
	echo nl2br("lan.teknik.app client has been started.");
}
if($_POST['submit'] == "Start joinsg 11453")
{
	exec("START taskkill /F /im lan-play-win64.exe");
	pclose(popen("START lan-play-win64.exe  --relay-server-addr joinsg.net:11453", "r"));
	echo nl2br("joinsg.net primary client has been started.");
}
if($_POST['submit'] == "Start joinsg 11451")
{
	exec("START taskkill /F /im lan-play-win64.exe");
	pclose(popen("START lan-play-win64.exe  --relay-server-addr joinsg.net:11451", "r"));
	echo nl2br("joinsg.net secondary client has been started.");
}
if($_POST['submit'] == "Start tekn0 11451")
{
	exec("START taskkill /F /im lan-play-win64.exe");
	pclose(popen("START lan-play-win64.exe --relay-server-addr tekn0.net:11451", "r"));
	echo nl2br("tekn0.net client has been started.");
}
if($_POST['submit'] == "Kill client")
{
	exec("START taskkill /F /im lan-play-win64.exe");
	echo nl2br("Client Killed.\r\nSelect another client.");
}
else{}
?>
</body>
</html>
