<?php 

    function generaPassword ($numeroCaratteri) {
        $caratteriPassword = ["ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!?$?%^&*()_-+={[}]:;@#|\<,>.?/"];
        $lunghezzaArray = strlen($caratteriPassword[0]) - 1; //92 - 1
        
        $password = "";
        
        for ($i=0; $i < $numeroCaratteri ; $i++) { 
            $numero = rand(0, $lunghezzaArray);
            $carattere = $caratteriPassword[0][$numero];
            $password .= $carattere;
        }
        
        return $password;
    }


    $lunghezzaPassord = $_GET["lunghezza"];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Strong Password Generator</title>
</head>
<body>
    
    <form action="index.php" method="GET">
        <label for="lunghezza">Lunghezza Password</label>
        <input type="number" name="lunghezza" id="lunghezza">
        <button type="submit">Genera</button>
        <p>
            
            <?php
                if (isset($lunghezzaPassord)) {
                    echo generaPassword($lunghezzaPassord); 
                } 
            ?>
        
        </p>
    </form>

</body>
</html>