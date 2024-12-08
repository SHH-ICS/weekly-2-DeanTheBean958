<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>PI Calculator</title>
  </head>

  <body>

# making pi equal to diameter
    <?php
    $pi = "";
    if ( isset( $_POST['diameter'])){
      $pi = $_POST['diameter'];
    }
    
# checking for if pi is less or equal to zero
    if ($pi <= 0) {
      echo "<h2>please input a positive number</h2>";
    } else {
      echo "<h2>your circumference is = " . $pi * 3.14 * 2 . "</h2>\n";
      echo "<h2>your area is = " . $pi * $pi * 3.14 . "</h2>\n";
    }
    ?>
    
  </body> 
</html>
