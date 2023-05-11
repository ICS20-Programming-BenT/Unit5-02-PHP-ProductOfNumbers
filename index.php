<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Product Of Numbers Webpage - PHP">
    <meta name="keywords" content="Immaculata, ICS2O">
    <meta name="author" content="Ben Thomson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index1/site.webmanifest">

    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-purple.min.css" />
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Web page title -->
    <title>Product Of Numbers</title>
  </head>
  <body>
    
    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  
    <!-- Container for web page content -->
    <main style = "padding-left:20px; padding-right:20px;">
    
      <!-- Web page heading -->
      <?php echo "<h1>Product of Numbers</h1>" ?>

      <!-- Image -->
      <center>
        <img src="./images/multiplication-tables.png" alt="Multiplication table">
      </center>
      <br><br>

      <!-- Body text -->
      <?php echo "<p>Welcome to this is product of numbers web page! Please input any integers and their product will be calculated.</p>" ?>
      <?php echo "<h3>Your Input:</h3>" ?>
       
      <!-- Form for user input -->
      <form action="./results.php" method="post" target="results">
        <label for="first-number">Enter an integer:</label>
        <input type="number" step="1" id="first-number" placeholder="An integer..." name="first-number"><br><br>
        <label for="second-number">Enter another integer:</label>
        <input type="number" step="1" id="second-number" placeholder="Another integer..." name="second-number"><br><br>
        <input type="submit" id="button" value="Submit Your Numbers!" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
      </form>
      <br>
      
      <!-- iFrame for product of numbers to be displayed -->
      <iframe name="results" id="results"></iframe>
      <br>
      <br>
    </main>
  </body>
</html>