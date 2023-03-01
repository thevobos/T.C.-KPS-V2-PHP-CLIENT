<?php

include "KPSSoapClient.php";

header("Content-Type: text/plain");

$username = "KRM-*******";
$password = "*******";
$wsdl = "https://kpsbasvuru.nvi.gov.tr/Services/Wsdl.ashx?Service=BilesikKutukSorgulaKimlikNoServis&Version=2023/02/01";

$kpsClient = new KPSSoapClient($username, $password, $wsdl);

try {
        $result = $kpsClient->Sorgula(
                array(
                        'kriterListesi' => array(
                                'BilesikKutukSorgulaKimlikNoSorguKriteri' => array(
                                        'DogumAy' 	=> 1,
                                        'DogumGun' 	=> 11,
                                        'DogumYil' 	=> 1111,
                                        'KimlikNo' 	=> 11111111111
                                )
                        )
                ) 
        );

        echo json_encode($result);
  


} catch (Exception $e)
{
        print_r($e);
}