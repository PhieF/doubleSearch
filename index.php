<html>
<head>
	<meta name="viewport" content="width=device-width, height=device-height, user-scalable=no" />
	 <base target='_parent' />
	<link title="phiesearch" type="application/opensearchdescription+xml" rel="search" href="opensearch.xml">
</head>
<body>
<style>
body{
	margin:0px;
	height:100%;
	text-align:center;
	width:100%;
}
iframe{
	height: calc(100% - 50px);
	width:50%;
}
@media screen and (max-width: 769px) {
	iframe{
		height: calc(50% - 25px);
		width:100%;
	}
	#sheep{
		width:100px;
	}
}
</style>


<?php
if(!isset($_POST["q"])){
	echo "<img id=\"sheep\" src=\"sheep.jpg\" /><br /><span style=\"font-size=5px\">artwork by Gaëlle Héaulme</span><h2>Phie search</h2>";
}
echo "<form action=\"\" method=\"post\"><input name=\"q\" type=\"text\" ";
if(isset($_POST["q"]))
	echo "value=\"".$_POST["q"]."\"";
echo "/><input value=\"wesh\" type=\"submit\" /></form>";
if(isset($_POST["q"])){
	if(isset($_GET["frame"]))
		echo "<iframe frameBorder='0' src=\"https://framabee.org/?q=".urlencode($_POST["q"])."\"></iframe>";
	else
		echo "<iframe frameBorder='0' src=\"framabee.php?q=".urlencode($_POST["q"])."\"></iframe>";
	echo "<iframe frameBorder='0' src=\"google.php?q=".urlencode($_POST["q"])."\"></iframe>";
}
?>
</body>

</html>
