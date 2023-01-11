<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <?php

        require_once __DIR__ . "/helper.php";
        
    ?>
</head>
<body>
    <h1>STRONG PASSWORD GENERATOR</h1>
    <form>
        <label for="password">Password casuale</label>

        <!-- Il name sarà ciò che mi ritrovo nell'URL che dovrà essere uguale al nome che do in GET -->
        <input type="text" name="numberCharacters" placeholder="Inserisci un nuemero">
        <input type="submit" value="Generate">
    </form>





    
</body>
</html>