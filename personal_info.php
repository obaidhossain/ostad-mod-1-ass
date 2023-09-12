<?php
  // Create a PHP file named personal_info.php that displays your personal information using variables and the echo statement.  your name, age, country, and a brief introduction.

  // Assign personal information in variables
  $name = 'Obaid Hossain';
  $age = 28;
  $country = 'Bangladesh';
  // An automated introduction using the personal information
  $intro = 'Hi, I am '. $name . ' from '. $country. '. I am '. $age . ' years old. I am doing Ostad Web Development with PHP & Laravel Course.';

  // Display personal information along with a brief introduction 
  echo 'Name: '. $name .'<br>';
  echo 'Age: '. $age .'<br>';
  echo 'Country: '. $country .'<br>';
  echo 'Intro: '. $intro;

/*
 * Output/Result
 *
 * Name: Obaid Hossain
 * Age: 28
 * Country: Bangladesh
 * Intro: Hi, I am Obaid Hossain from Bangladesh. I am 28 years old. I am doing Ostad Web Development with PHP & Laravel Course.
 */
?>
