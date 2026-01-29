<?php
  $hour = date("H"); // Gets hour in 24-hour format
  $day = date("d"); 
  $name = "Student"; 

  if ($hour < 12 && $day <= 15) {
      $greeting = "Good Morning";
      $numdate = "First half of the year";
  } else {
      $greeting = "Good Afternoon";
      $numdate = "Second half of the year";
  }
  
  echo "<h2>$greeting, $name! $numdate</h2>";
?>