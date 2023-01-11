<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <?php

        // $passW = $_GET['password'] ?? false;

        // var_dump($passW);


        // Definisco le variabili 
    
        $passwordLenght = $_GET['numberCharacters'];

        // Definisco la funzione per generare la password casuale

        function generatePassword($num) {

            // La password dovra' essere composta da *lettere minuscole e maiuscole, numeri e simboli*
    
            $passwordCharacters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"£$%&/()=';

            // Definisco la password in uscita come un array
    
            $password = array();

            // Definisco di quanti caratteri puuò essere la password
    
            $characterLenght = strlen($passwordCharacters);

            // Definisco il ciclo secondo il numero inserito dall'utente

            for ($i = 0; $i < $num; $i++) {
                // I numeri casuali andranno da 0 al numero di $passwordCharacters 
    
                $numbers = rand(0, $passwordCharacters);

                $password[] = $passwordCharacters[$numbers];


            }


            return implode($password);

        }


        // Generazione della password
    
        $passwordGenerated = generatePassword($passwordLenght);

        echo 'La tua password è:' . $passwordGenerated;




    ?>





</head>
<body>
    <h1>STRONG PASSWORD GENERATOR</h1>
    <form>
        <label for="password">Password casuale</label>
        <input type="text" name="password" placeholder="Inserisci un nuemero">
        <input type="submit" value="Generate">
    </form>





    
</body>
</html>