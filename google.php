<?php
function file_get_contents_utf8($fn) {
     $content = file_get_contents($fn);
      return mb_convert_encoding($content, 'UTF-8',
          mb_detect_encoding($content, 'UTF-8, ISO-8859-1', true));
}
$google= file_get_contents_utf8("https://google.fr/search?q=".urlencode($_GET["q"]));
$google=str_replace ("name=\"gs\"","name=\"g\"", $google);
$google=str_replace ("/url?q=","https://google.fr/url?q=",$google);
$google=str_replace ("src=\"/","src=\"https://google.fr/",$google);
$google=str_replace ("href=\"/","href=\"https://google.fr/",$google);
$google=str_replace ("action=\"/search","action=\"",$google);
$google .= "<script>
	var links = document.getElementsByTagName('a');
	for(var i = 0; i< links.length; i++){
		let ref = links[i].getAttribute('href');
		links[i].onclick= function(){
			top.window.location.href=ref;
			return true;
		}
	}
</script>";
echo $google;
?>
