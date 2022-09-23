<?php
$url="https://data.ntpc.gov.tw/api/datasets/71CD1490-A2DF-4198-BEF1-318479775E8A/json?page=0&size=100";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
    curl_exec($ch) ;
    curl_close($ch);
    //echo "<pre>".$output."</pre>";
    //echo json_decode($output);
    //echo $output;
    //return $output;
?>