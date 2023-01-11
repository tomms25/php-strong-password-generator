<?php

        // $passW = $_GET['password'] ?? false;

        // var_dump($passW);


        // Definisco le variabili. In Get stesso nome dell'Input perché mi compare nell'URL
    
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
    
                $numbers = rand(0, $characterLenght - 1);

                $password[] = $passwordCharacters[$numbers];


            }


            return implode($password);

        }


        // Generazione della password
    
        $passwordGenerated = generatePassword($passwordLenght);

        echo 'La tua password è:' . $passwordGenerated;




    ?>