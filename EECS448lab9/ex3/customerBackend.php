<?php

    echo "<link href='style.css' rel='stylesheet' type='text/css'/>";

    $username = $_POST["uName"];
    $password = $_POST["pWord"];
    $tacoNum = $_POST["tacoQuantity"];
    $burgerNum = $_POST["burgerQuantity"];
    $hotDogNum = $_POST["hotDogQuantity"];
    $shipping = $_POST["ship"];
    
    if($shipping == "7 Day"){
        $shippingCost = 0;
    }
    else if($shipping == "5 Day"){
        $shippingCost = 5;
    }
    else if($shipping == "Overnight")
    {
        $shippingCost = 50;
    }


    $tacoPrice = 0;
    $hotdogPrice = 0;
    $burgerPrice = 0;
    $shippingCost = 0;
    $totalPrice = 0;


    $tacoPrice = $tacoNum*5;
    $hotdogPrice = $hotDogNum*6;
    $burgerPrice = $burgerNum*9;
    $totalPrice = $tacoPrice+$hotdogPrice+$burgerPrice+$shippingCost;  

    echo "<h1>Order Recipt</h1>";
    echo "<h3>User: " . $username . "</h3>";
    echo "<h3>Password: " . $password . "</h3>";
    
    echo "<table class='receipt'>";

    echo "<col width='150'>";
    echo "<col width='150'>";
    echo "<col width='150'>";
    echo "<col width='150'>";

    echo "<tr class='receipt'>";
    echo "<th class='receipt text'></td>";
    echo "<th class='receipt text'>Quantity</td>";
    echo "<th class='receipt text'>Cost Per Item</td>";
    echo "<th class='receipt text'>Sub Total</td> </tr>";


    echo "<tr class='receipt'>";
    echo "<td class='receipt text'>taco</td>";
    echo "<td class='receipt number'>" . $tacoNum . "</td>";
    echo "<td class='receipt number'>$5.00</td>";
    echo "<td class='receipt number'>$" . $tacoPrice . "</td></tr>";


    echo "<tr class='receipt'>";
    echo "<td class='receipt text'>hotDog</td>";
    echo "<td class='receipt number'>" . $hotDogNum . "</td>";
    echo "<td class='receipt number'>$6.00</td>";
    echo "<td class='receipt number'>$" . $hotdogPrice . "</td></tr>";


    echo "<tr class='receipt'>";
    echo "<td class='receipt text'>burger</td>";
    echo "<td class='receipt number'>" . $burgerNum . "</td>";
    echo "<td class='receipt number'>$9.00</td>";
    echo "<td class='receipt number'>$" . $burgerPrice . "</td></tr>";


    echo "<tr class='receipt'>";
    echo "<td class='receipt text'>Shipping</td>";
    echo "<td colspan=2 class='receipt text'>" . $shipping . "</td>";
    echo "<td class='receipt number'>$" . $shippingCost . "</td></tr>";


    echo "<tr class='receipt'>";
    echo "<td colspan=3 class='receipt text'>Total Cost</td>";
    echo "<td class='receipt total'>$" . $totalPrice . "</td></tr></table>";

?>