<?php
function file_get_contents_utf8($fn) {
     $content = file_get_contents($fn);
      return mb_convert_encoding($content, 'UTF-8',
          mb_detect_encoding($content, 'UTF-8, ISO-8859-1', true));
}
$bee= file_get_contents_utf8("https://framabee.org/?q=".urlencode($_GET["q"]));
$bee=str_replace ("name=\"gs\"","name=\"g\"", $bee);
$bee=str_replace ("/url?q=","https://framabee.org/url?q=",$bee);
$bee=str_replace ("src=\"/","src=\"https://framabee.org/",$bee);
$bee=str_replace ("href=\"/","href=\"https://framabee.org/",$bee);
$bee=str_replace ("action=\"/search","action=\"",$bee);
$bee .= "<script>
	var links = document.getElementsByTagName('a');
	for(var i = 0; i< links.length; i++){
		let ref = links[i].getAttribute('href');
		links[i].onclick= function(){
			top.window.location.href=ref;
			return true;
		}
	}
</script>";
echo $bee;
?>
