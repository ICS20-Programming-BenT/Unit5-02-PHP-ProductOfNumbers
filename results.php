<?php

// Initializing variable for product as zero
$product = 0;

// Getting the two numbers from the user that will be used to calculate the product
$firstNum = $_POST["first-number"];
$secondNum = $_POST["second-number"];

//If statement to give an error message if nothing nothing is entered or if numbers are invalid
  if ((!is_numeric($firstNum) || !is_numeric($secondNum)) || ($firstNum == "" || $secondNum == "")) {
    echo "Please enter valid numbers.";
  }

// Otherwise, continue the function to calculate the product
else {
    // For loop to do repeated addition to find the product
    for ($counter = 0; $counter < abs($secondNum); $counter++) {
        $product += abs($firstNum);
    }

    // If statements: Reapplying the negative sign if either the first or second number is negative
    if ($firstNum < 0) {
        $product *= -1;
    }

    if ($secondNum < 0) {
        $product *= -1;
    }

    // Displaying the product to the screen
    echo "The product of " . $firstNum . " and " . $secondNum . " is " . $product . ".";
}

?>
