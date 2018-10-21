<?php
session_start();
require_once './Functions/Images.php';
$op = $_REQUEST['op'];
switch ($op){
  case 1: {
    $ch = curl_init();
    $food = $_REQUEST['url_image'];
    $obj = new Images();
    $url = $obj->generateImage($food);
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
    break;
  }
  case 2: {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://gateway.watsonplatform.net/assistant/api/v1/workspaces/8469cea4-fde9-415d-9424-b90cb8c5d070/message?version=2018-09-20");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"input\": {\"text\": \"buenas noches\"}}");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_USERPWD, "3e205e42-1483-40ed-99bb-cf9ac07b5f0d" . ":" . "uXPmzQzfqiSe");

    $headers = array();
    $headers[] = "Content-Type: application/json";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
      echo 'Error:' . curl_error($ch);
    }
    echo $result;
    curl_close ($ch);

    generateImage($_POST['image']);
    break;

  }
}

