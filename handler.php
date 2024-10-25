<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
    
    <?php
    $myVariable = "";
    if ( isset( $_POST['myVariable'] ) ){
      $myVariable = $_POST['myVariable'];
    }
    echo "<p>from my calculations your diameter is = " . $myVariable - 1 + 1 . "</p>\n";
    echo "<p>your radius is = " . $myVariable / 2 . "</p>\n";
    echo "<p>your circumference is = " . $myVariable * 3.14 * 2 . "</p>\n";
    echo "<p>your area is = " . $myVariable * $myVariable * 3.14 . "</p>\n";
    ?>
    
  </body>
  
</html>
