<?php
    echo "<link href='style.css' rel='stylesheet' type='text/css' />";

    $email = $_POST["e"];
    $password = $_POST["pass"];
    $shipping = $_POST["shipping"];
    $apples = $_POST["apples"];
    $premium = $_POST["premium"];
    $collectors = $_POST["collectors"];

    $total = ($apples * 1) + ($premium * 2) + ($collectors * 10);

    $shipping_cost = 0;

    if ($shipping == "Free 7 Day") {
        $shipping_cost = 0;
    }
    if($shipping == "$50.00 over night") {
        $shipping_cost = 50;
    }
    if ($shipping == "$5.00 three day") {
        $shipping_cost = 5;
    }

    $total = $total + $shipping_cost;

    echo "<p class='box' id='login'>";
        echo "<p class='box'>";
            echo 'Email: '.$email.'<br/>';
            echo 'Password:'.$password.'<br/>';
        //echo "</p>";
        echo "<p class='box'>";
            echo '<h3> Purchases: </h3> </br>';
            echo "&emsp;";
            echo 'Shipping: '.$shipping.' | Subtotal: $'.$shipping_cost.'</br>';
            echo "&emsp;";
            echo 'Apples: '.$apples.' | $1 each | Subtotal: $'.$apples.'</br>';
            echo "&emsp;";
            echo 'Premium Apples: '.$premium.' | $2 each | Subtotal: $'.($premium * 2).'</br>';
            echo "&emsp;";
            echo 'Collectors Edition Apples: '.$collectors.' | $1 each | Subtotal: $'.($collectors * 10).'</br>';
        //echo "</p>";
        echo "</br>";
        echo "<p class='box'>";
            echo '<h1> Total: '.$total.' </h1> </br>';
        //echo "</p>";
    //echo "</p>";
?>