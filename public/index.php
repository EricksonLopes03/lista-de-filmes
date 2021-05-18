<?php 

switch ($_SERVER['PATH_INFO']) {

    case '/cadastro':
        include __DIR__ . '/../app/View/cadastro.php';
        break;


    case '/principal':
        include __DIR__ . '/../app/View/principal.php';
        break;

    
    
    default:
        # code...
        break;
}
    
    
    
