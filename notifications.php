<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

$prod = 'https://ingtvo-mp-commerce-php.herokuapp.com/';
$dev = 'http://localhost/mp-ecommerce-php/';
/*
$base_url = $prod;

    MercadoPago\SDK::setAccessToken("TEST-8660466533819101-052613-a9aa65f332d4a093a3c5298ef886dacd__LC_LA__-119161597");


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
HTTP/1.1 200 OK
Date: Mon, 27 Jul 2009 12:28:53 GMT
Server: Apache/2.2.14 (Win32)
Last-Modified: Wed, 22 Jul 2009 19:15:56 GMT
Content-Length: 88
Content-Type: text/html
Connection: Closed
<html>
<body>
<h1>Hello, World!</h1>
</body>
</html>

