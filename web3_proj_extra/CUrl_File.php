<?php
$curl=curl_init("give a url");
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
$data=curl_exec($curl);
curl_close($curl);
echo $data;


?>