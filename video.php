<html>

<head>
<title> </title>

</head>

<body>
    <div id="forma">
<?php   

// $url = $_POST["name"];


$url = $_POST["name"];
//$components = parse_url($url);
//parse_str($components['query'], $results);
//print_r($results); 

//var_dump(parse_url($url));

$video= parse_url($url, PHP_URL_PATH);
//echo $video;
if ($url){ $url= substr($video, -19);}
//echo $url;

if ($url){
    echo "
	<blockquote class=\"tiktok-embed\"
    cite=\"https://www.tiktok.com/embed/v2/".$url."?lang=en-US\"
    data-video-id=\"".$url."\" 
    style=\"max-width: 605px;min-width: 325px; \" >
    <section> 
    </section> 
</blockquote> 
<script async src=\"https://www.tiktok.com/embed.js\"></script>

	";


}else{  header("Location: mensaje.php"); }





?>
<div>
</body>

</html>