<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function orderPizza($pizzaType, $recipient)
{
    $price = getPriceForPizza($pizzaType);
    $address = getAddressForRecipient($recipient);

    echo 'Creating new order... <br>';
    echo "A {$pizzaType} should be sent to {$recipient}. <br> The address: {$address}.<br>";
    echo 'The bill is €' . $price . '.<br>';
    echo 'Order finished.<br><br>';
}

function getAddressForRecipient($recipient)
{
    switch (strtolower($recipient)) {
        case 'koen':
            return 'a yacht in Antwerp';
        case 'manuele':
            return 'somewhere in Belgium';
        case 'students':
            return 'BeCode office';
        default:
            throw new Exception('Missing address for order from ' . $recipient);
    }
}

function getPriceForPizza($pizzaType)
{
    switch ($pizzaType) {
        case 'marguerita':
            return 5;
        case 'golden':
            return 100;
        case 'calzone':
            return 10;
        case 'hawaii':
            throw new Exception('Computer says no');
    }
}

function orderPizzaForAll()
{
    orderPizza('calzone', 'Koen');
    orderPizza('marguerita', 'Manuele');
    orderPizza('golden', 'Students');
}

orderPizzaForAll();