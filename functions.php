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
?>