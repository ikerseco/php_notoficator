<?php
function VapidUrl(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://arcane-fjord-58389.herokuapp.com/genVapy",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
      ),
    ));
    
    $response = curl_exec($curl);
    //$vapidKey = json_encode($response);
    //$response = json_decode($response, true);
    $err = curl_error($curl);
    //print_r($response);
    curl_close($curl);
    return $response; 
}
?>