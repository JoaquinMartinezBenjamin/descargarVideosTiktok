<html>

<head>
<title> </title>

</head>

<body>
    <div id="forma">
<?php   

error_reporting(0);

if($_POST['name']) {
    $url = $_POST['name'];
    $video= parse_url($url, PHP_URL_PATH);
    $url= substr($video, -19);
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
                 }else{
                     
                    
                    header("Location: mensaje.php");
                //modificar en caso de que no se pueda acceder al header darle la ruta asi
                /*echo '
                 <script>
                 window.open("https://pw133467.000webhostapp.com/mensaje.php","_self");
                 </script>'; */
                
                }





?>
<div>
</body>

</html>
