<?php

  // Initializing variable for product as zero
  $product = 0;

  // Getting the two numbers from the user that will be used to calculate the product
  $firstNum = intval($_POST["first-number"]);
  $secondNum = intval($_POST["second-number"]);

  // Removing any negative signs from numbers in order to be able to calculate using repeated addition
  $absoluteFirstNum = abs($firstNum);
  $absoluteSecondNum = abs($secondNum);

  // If the user does not enter their min and max, display that they must enter both numbers
  if (empty($firstNum) || empty($secondNum)) {
      echo "Please enter integers in both text fields.";
  } 

  // Otherwise, continue the function to calculate the product
  else {
      // For loop to do repeated addition to find the product
      for ($counter = 0; $counter < $absoluteSecondNum; $counter++) {
          $product += $absoluteFirstNum;
      }

      // If statements: Reapplying the negative sign if either the first or second number is negative
      if ($firstNum < 0) {
          $product * -1;
      }

      if ($secondNum < 0) {
          $product * -1;
      }

      // Displaying the product to the screen
      echo "The product of your selected two numbers is " . $product . ".";
  }

?>

