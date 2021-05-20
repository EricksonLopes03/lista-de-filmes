<?php 

    require __DIR__ . '/../vendor/autoload.php';

    use App\Routes;
 
    $objRota = new Routes();
    $objRota->getRota($_SERVER['PATH_INFO']);

        
    
    
