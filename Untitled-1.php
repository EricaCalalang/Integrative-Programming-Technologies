<?php
// if statement
$age = 20;
if ($age >= 18) {
    echo "You are allowed to vote.<br>";
}

// if...else statement
$number = 7;
if ($number % 2 == 0) {
    echo "The number $number is even.<br>";
} else {
    echo "The number $number is odd.<br>";
}

// if...elseif...else statement 
$score = 75;
if ($score >= 90) {
    echo "Grade: A<br>";
} elseif ($score >= 80) {
    echo "Grade: B<br>";
} elseif ($score >= 70) {
    echo "Grade: C<br>";
} else {
    echo "Grade: D<br>";
}

// switch statement
$day = "Wednesday";
switch ($day) {
    case "Monday":
        echo "Today is Monday.<br>";
        break;
    case "Tuesday":
        echo "Today is Tuesday.<br>";
        break;
    case "Wednesday":
        echo "Today is Wednesday.<br>";
        break;
    case "Thursday":
        echo "Today is Thursday.<br>";
        break;
    case "Friday":
        echo "Today is Friday.<br>";
        break;
    default:
        echo "It's weekend!<br>";
}
?>