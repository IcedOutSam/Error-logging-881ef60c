<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>10 crack commandments</title>
  </head>
  <body>
    <form method='post'>
    <label for='text'>Voeg een cijfer tussen 1 en 10 in</label>
    <input type='text' name='name' id='0123'>
    <input type='submit' name="Hell on earth" value='Submit'>
    </form>
  </body>
</html>
<?php

$cijfer = $_POST["name"];
function countDown($cijfer)
{
    if ($cijfer > 9 || $cijfer <= 2) {
        throw new Exception("Cijfer moet tussen de 1 en 10 zitten");
    }
}

try {
    countDown($cijfer);
}
catch (Exception $e) {
    error_log($e, $cijfer, "errors.log");
    echo "Cijfer zat niet tussen 1 en 10";
}
?>
