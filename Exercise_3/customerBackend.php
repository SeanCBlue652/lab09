<?php
    echo "<link href='style.css' rel='stylesheet' type='text/css' />";

    $email = $_POST["email"];
    $password = $_POST["password"];
    $shipping = $_POST["shipping"];
    $apples = $_POST["apples"];
    $premium = $_POST["premium"];
    $collectors = $_POST["collectors"];

    $total = $shipping + ($apples * 1) + ($premium * 2) + ($collectors * 10);

    echo "<p class='box'>";
        echo "<p class='box'>";
            echo 'Email: '.$email.'<br/>';
            echo 'Password:'.$password.'<br/>';
        //echo "</p>";
        echo "<p class='box'>";
            echo '<h3> Purchases: </h3> </br>';
            echo "&emsp;";
            echo 'Shipping: '.$shipping.'</br>';
            echo "&emsp;";
            echo 'Apples: '.$apples.'</br>';
            echo "&emsp;";
            echo 'Premium Apples: '.$premium.'</br>';
            echo "&emsp;";
            echo 'Collectors Edition Apples: '.$collectors.'</br>';
        //echo "</p>";
        echo "</br>";
        echo "<p class='box'>";
            echo '<h1> Total: '.$total.' </h1> </br>';
        //echo "</p>";
    //echo "</p>";
?>