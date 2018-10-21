<?php
class Images {
  public function generateImage($Base64Img) {
    $data = base64_decode($Base64Img);
    $name = "";
// Proporciona una locación a la nueva imagen (con el nombre y formato especifico)
    $filepath = "/var/www/html/rest_foods_ibm/images/".$name; // or image.jpg
// Finalmente guarda la imágen en el directorio especificado y con la informacion dada
    file_put_contents($filepath, $data);
    $url = "http://restfoods.vrammdev.com/images/jjjj.jpg";
    return $data;
  }
}