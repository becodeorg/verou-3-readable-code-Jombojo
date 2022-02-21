<?php


function orderPizza($pizzatype, $forWho) {

    $type = $pizzatype;
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizzatype;
    $price = costCalculation($type);
    $address = 'unknown';

    if($forWho == 'koen') {
        $address = 'A yacht in Antwerp';
    } elseif ($forWho == 'manuele') {
        $address = 'Somewhere in Belgium';
    } elseif ($forWho == 'students') {
        $address = 'BeCode office';
    }

    $toPrint .=   ' pizza should be sent to ' . $forWho . ". <br>The address: {$address}.";
    echo $toPrint; echo '<br>';
    echo'The bill is €'.$price.'.<br>';
    echo "Order finished.<br><br>";
}

function total_price($price) {
    return $price;
}

// function test($pizzaType) {
//     echo "Test: type is {$pizzaType}. <br>";
// }

function costCalculation($pizzaType) {
    $cost = 'unknown';

    if ($pizzaType == 'marguerita') {
        $cost = 5;
    }

    else {
        if ($pizzaType == 'golden') {
            $cost = 100;
        }

        if ($pizzaType == 'calzone') {
            $cost = 10;
        }

        if ($pizzaType == 'hawaii') {
            throw new Exception('Computer says no');
        }
    }
    return $cost;
}

function orderPizzaAll() {
    $test= 0;
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

function make_Allhappy($do_it) {
    if ($do_it) {
        orderPizzaAll();
    } else {
        // Should not do anything when false
    }
}

make_Allhappy(true);