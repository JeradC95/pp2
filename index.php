<?php
/*
 * Jerad Clark
 * 1/15/2021
 * https://github.com/JeradC95/pp2.git
 * "Pair Program 2"
 */

ini_set('display_errors',1);
error_reporting(E_ALL);

include "functions.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
<?php
echo"<h1>PHP Array Practice</h1>";

$numbers = array(7,9,8,9,8,8,6);



printArr($numbers);

?>
</body>
</html>

