<?php
//print_r($_POST);

if(empty($_POST['wall-1']) ||  empty($_POST['wall-2']) ){
    header('Location: ./calculate_price.php?msg=empty');
}

$wall_1 = $_POST['wall-1'];

if(!empty($_POST['w1-obj-1'])){
    $w1_obj1 = $_POST['w1-obj-1'];
}else{
    $w1_obj1 = 0;
}if(!empty($_POST['w1-obj-1'])){
    $w1_obj2 = $_POST['w1-obj-2'];
}else{
    $w1_obj2 = 0;
}if(!empty($_POST['w1-obj-1'])){
    $w1_obj3 = $_POST['w1-obj-3'];
}else{
    $w1_obj3 = 0;
}

$wall_2 = $_POST['wall-2'];

if(!empty($_POST['w2-obj-1'])){
    $w2_obj1 = $_POST['w1-obj-1'];
}else{
    $w2_obj1 = 0;
}if(!empty($_POST['w2-obj-2'])){
    $w2_obj2 = $_POST['w1-obj-2'];
}else{
    $w2_obj2 = 0;
}if(!empty($_POST['w2-obj-3'])){
    $w2_obj3 = $_POST['w1-obj-3'];
}else{
    $w2_obj3 = 0;
}

$freeSpace = $wall_1 + $wall_2;

$usedSpace = $w1_obj1 + $w1_obj2 +$w1_obj3 + $w2_obj1 + $w2_obj2 + $w2_obj3;

$spaceToRemodel = $freeSpace - $usedSpace;

$usdPrice = $spaceToRemodel * 24;
$usdPrice = number_format($usdPrice,2);


// API request
// get your free API key on https://apilayer.com/marketplace/currency_data-api
$curl = curl_init();
$authKey = 'Your API key';

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.apilayer.com/currency_data/convert?to=COP&from=USD&amount=$usdPrice",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: text/plain",
    "apikey: $authKey"
  ),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET"
));

$response = curl_exec($curl);
$response = json_decode($response, true); 

$copPrice = $response['result'];
$copPrice = number_format($copPrice,2,",",".");

curl_close($curl);


header("Location: result.php?spaceToRemodel=$spaceToRemodel&usdPrice=$usdPrice&copPrice=$copPrice");

?>