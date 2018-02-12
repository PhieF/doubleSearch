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
	height:100%;
	width:50%;
}
@media screen and (max-width: 769px) {
	iframe{
		height:50%;
		width:100%;
	}
	#sheep{
		width:100px;
	}
}
</style>
<?php
if(isset($_POST["q"])){
	echo "<iframe frameBorder='0' src=\"framabee.php?q=".$_POST["q"]."\"></iframe>";
	echo "<iframe frameBorder='0' src=\"google.php?q=".$_POST["q"]."\"></iframe>";
}else {

	echo "<img id=\"sheep\" src=\"sheep.jpg\" /><br /><span style=\"font-size=5px\">artwork by Gaëlle Héaulme</span><h2>Phie search</h2><form action=\"\" method=\"post\"><input name=\"q\" type=\"text\" /><input value=\"wesh\" type=\"submit\" /></form>";
}
?>
</body>

</html>
