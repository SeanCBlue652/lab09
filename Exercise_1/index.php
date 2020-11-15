<?php

echo "<table border=\"1\" style='border-collapse: collapse'>";
for ($i = 1; $i < 101; $i++) {
    echo "<tr> \n";
    for ($j = 1; $j < 101; $j++) {
        $result = $i * $j;
        echo "<td> $result </td> \n";
    }
    echo "</tr>";
}
echo "</table>";
?>