<?php 
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generata</title>
</head>
<body>

    <p>La Password è: <?php echo $_SESSION["passwordGenerata"] ?></p>

</body>
</html>