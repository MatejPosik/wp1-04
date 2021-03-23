<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// počet bodů
$body = 19;

if($body >= 40) {
    echo "Úspěšně jste složil zkoušky";
} elseif($body < 20) {
 echo "nesložil jste zkoušky";  
} else {
 echo "Postupujete do dalšího kola";
}

?>

</body>
</html>