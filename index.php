<?php 
$ch = curl_init();
$food = "http://as01.epimg.net/deporteyvida/imagenes/2018/04/04/portada/1522855616_827022_1522855733_noticia_normal.jpg";
curl_setopt($ch, CURLOPT_URL, "https://gateway.watsonplatform.net/visual-recognition/api/v3/classify?url=".$food."&version=2018-03-19");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_USERPWD, "apikey" . ":" . "SmfRmQFeWzcXFy-UBATYSsnp8aMjtXDtzZWrGScUbdWY");

$result = curl_exec($ch);
if (curl_errno($ch)) {
  echo 'Error:' . curl_error($ch);
} else {
  echo $result;
}
curl_close ($ch);
