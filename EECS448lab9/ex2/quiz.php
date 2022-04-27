<?php
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];

    $q1Answer = "Washington DC";
    $q2Answer = "Beijing";
    $q3Answer = "Ottawa";
    $q4Answer = "Australia";
    $q5Answer = "York";

    function scorePercent($score){
        $a = $score*20;
        return $a;
    }
    $score = 0;

    echo "Q1: What is the capital city of the United States? <br>"; 
    echo "You answered: ". $q1 . "<br>";
    if($q1==$q1Answer){
        $score++;
    }
    else{
        echo "Correct answer is: " . $q1Answer . "<br>";
    }

    echo "<br>";

    echo "Q2: What is the capital city of China?<br>";
    echo "You answered: ". $q2 . "<br>";
    if($q2==$q2Answer){
        $score++;
    }
    else{
        echo "Correct answer is: " . $q2Answer . "<br>";
    }
    
    echo "<br>";

    echo "Q3: What is the capital city of Canada?<br>";
    echo "You answered: ". $q3 . "<br>";
    if($q3==$q3Answer){
        $score++;
    }
    else{
        echo "Correct answer is: " . $q3Answer . "<br>";
    }
    
    echo "<br>";

    echo "Q4: Which country is not part of Asia?<br>";
    echo "You answered: ". $q4 . "<br>";
    if($q4==$q4Answer){
        $score++;
    }
    else{
        echo "Correct answer is: " . $q4Answer . "<br>";
    }
    
    echo "<br>";

    echo "Q5: Which city is not part of United state?<br>";
    echo "You answered: ". $q5 . "<br>";
    if($q5==$q5Answer){
        $score++;
    }
    else{
        echo "Correct answer is: " . $q5Answer . "<br>";
    }
    
    echo "<br>";

    echo "Answered correctly: ". $score . "<br>";
    echo "You get: " .scorePercent($score). "% correct rate  <br>";
?>