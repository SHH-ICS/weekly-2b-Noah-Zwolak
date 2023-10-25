Copy and pasted from rasberry pi server

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

<body style="background-color: lightblue;">
    <?php
$radius = ""; if ( isset( $_POST['radius'] ) ){ $radius = $_POST['radius']; }
    echo "<h1 style=text-align:center>When r= ".$radius." </h1>";
    ?>
<p style="text-align:center">
<?php
$a=$radius*$radius*3.14;
echo $a;

$cir=$radius*2*3.14;
echo $cir;
?>
</p>
  </body>
</html>
