<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

$prod = 'https://ingtvo-mp-commerce-php.herokuapp.com/';
$dev = 'http://localhost/mp-ecommerce-php/';

http_response_code(200);
/*
$base_url = $prod;

    MercadoPago\SDK::setAccessToken("APP_USR-1159009372558727-072921-8d0b9980c7494985a5abd19fbe921a3d-617633181");


if (!empty($_POST["type"])) {




    switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
            $response = '{"status": 200, "message": "Mensaje"}';
            break;
        case "plan":
            $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
            $response =  '{"status": 200, "message": "Mensaje"}';
            break;
        case "subscription":
            $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
            $response =  '{"status": 200, "message": "Mensaje"}';
            break;
        case "invoice":
            $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
            $response = '{"status": 200, "message": "Mensaje"}';
            break;
        default:
            $response = '{"status": 400, "message": "No encontrado"}';
    }
}else{
    $response = '{"status": 200, "message": "No encontrado"}';
}

  $fh = fopen("prueba.txt", 'w') or die("Se produjo un error al crear el archivo");
  

$contenido = $response.$_POST;
$texto = <<<_END
     '$contenido'
    _END;
  
fwrite($fh, $texto) or die("No se pudo escribir en el archivo");
  
fclose($fh);
echo $response;
*/
?>


