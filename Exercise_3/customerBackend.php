<?php
    $email = $_POST["email"];
    $password = $_POST["password"];
    $shipping = $_POST["shipping"];
    $apples = $_POST["apples"];
    $premium = $_POST["premium"];
    $collectors = $_POST["collectors"];

    $total = $shipping + ($apples * 1) + ($premium * 2) + ($collectors * 10);

    echo "<div class='box'>";
    echo "<p class='box'>";
    echo '<p> Email: '.$email.'</p> <br/>';
    echo "</p>";
?>