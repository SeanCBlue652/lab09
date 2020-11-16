<?php
$q1 = $_POST["q1"]
$q2 = $_POST["q2"]
$q3 = $_POST["q3"]
$q4 = $_POST["q4"]
$q5 = $_POST["q5"]

$amount_correct = 0;

echo "<div>";
echo "Question 1: What is the name of the newest Call of Duty? <br/>";
if($q1 == "Black Ops: Cold War") {
    $amount_correct++;
}
echo "&emsp;";
echo "You answered: $q1 <br/>";
echo "&emsp;";
echo "Correct Answer: Black Ops: Cold War <br/>";
echo "<br/>";

echo "Question 2: What is the name of the newest Smash Bros character? <br/>";
if($q1 == "Steve") {
    $amount_correct++;
}
echo "&emsp;";
echo "You answered: $q1 <br/>";
echo "&emsp;";
echo "Correct Answer: Steve <br/>";
echo "<br/>";

echo "Question 3: What is my favorite color? <br/>";
if($q1 == "Blue") {
    $amount_correct++;
}
echo "&emsp;";
echo "You answered: $q1 <br/>";
echo "&emsp;";
echo "Correct Answer: Blue <br/>";
echo "<br/>";

echo "Question 4: Which is the best pet? <br/>";
if($q1 == "Dog") {
    $amount_correct++;
}
echo "&emsp;";
echo "You answered: $q1 <br/>";
echo "&emsp;";
echo "Correct Answer: Dog <br/>";
echo "<br/>";

echo "Question 5: What is 9 + 10? <br/>";
if($q1 == "19") {
    $amount_correct++;
}
echo "&emsp;";
echo "You answered: $q1 <br/>";
echo "&emsp;";
echo "Correct Answer: 19 <br/>";
echo "<br/>";

echo "You scored $amount_correct out of 5 <br/>";
$result = $amount_correct*20;
echo "Score: $result / 100 <br/>"
echo "</div>";
?>