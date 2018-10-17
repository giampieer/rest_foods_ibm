<?php
$op = $_REQUEST['op'];
switch ($op){
  case 1: {
    $ch = curl_init();
    $food = $_REQUEST['food'];
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
    break;
  }
}

