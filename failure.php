<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

$prod = 'https://ingtvo-mp-commerce-php.herokuapp.com/';
$dev = 'http://localhost/mp-ecommerce-php/';

$base_url = $prod;
?>
<!DOCTYPE html>
<html>
<head>
    <title>
        PAGO NO REALIZADO
    </title>
</head>
<body>
    <h2>Pago no fue realizado...</h2>

</body>
</html>

<?php
if(!empty($_POST["type"])){
 var_dump($_POST["type"]);
}


?>