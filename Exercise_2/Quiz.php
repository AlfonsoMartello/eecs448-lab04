<?php
  $answer1 = $_POST["answer1"];
  $answer2 = $_POST["answer2"];
  $answer3 = $_POST["answer3"];
  $answer4 = $_POST["answer4"];
  $answer5 = $_POST["answer5"];
  $amt_correct = 0;
  $scr_percent = 0;
  echo "Queston 1: Which of the following is the smallest country in Europe?<br>";
  echo "You answered: ".$answer1."<br>";
  echo "Correct answer: Vatican City<br><br>";
  if ($answer1 == "Vatican City") {
    $amt_correct++;
  }
  echo "Question 2: Which of the following was the first soda in space?<br>";
  echo "You answered: ".$answer2."<br>";
  echo "Correct answer: Coca Cola<br><br>";
  if ($answer2 == "Coca Cola") {
    $amt_correct++;
  }
  echo "Question 3: Fear of the number 13 is called which of the following?<br>";
  echo "You answered: ".$answer3."<br>";
  echo "Correct answer: Triskaidekaphobia<br><br>";
  if ($answer3 == "Triskaidekaphobia") {
    $amt_correct++;
  }
  echo "Question 4: Who of the following people hold the world record for having the most world records?<br>";
  echo "You answered: ".$answer4."<br>";
  echo "Correct answer: Ashrita Furman<br><br>";
  if ($answer4 == "Ashrita Furman") {
    $amt_correct++;
  }
  echo "Question 5: Which of the following is the correct answer to the equation 6 ÷ 2(1 + 2)?<br>";
  echo "You answered: ".$answer5."<br>";
  echo "Correct answer: 9<br><br>";
  if ($answer5 == "9") {
    $amt_correct++;
  }
  $scr_percent = ($amt_correct/5)*100;
  echo "You answered ".$amt_correct." correct out of 5 possible answers.<br>";
  echo "Your score in a perctenage is ".$scr_percent."%.";
?>
