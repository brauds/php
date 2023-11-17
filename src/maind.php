<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\model\Golfinho ;

$golfinho = new Golfinho("Jordan", 10, "rosa");
echo $golfinho->getInfo() ;
echo "nadar". $golfinho -> nadar();

$golfinho2 = new Golfinho("Renato", 8, "preto e branco");
echo $golfinho2->getInfo() ;
echo "nadar". $golfinho2 -> nadar();

