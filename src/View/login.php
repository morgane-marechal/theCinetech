<?php
var_dump($_SESSION);
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css" />
            <meta http-equiv="x-ua-compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=no">

            <title>Login</title>
    </head>

    <body>
        <?php
            require('header.php');
        ?>
        <main>
            <h1>Page de connexion</h1>

            <form id='registerForm' method='post'>

                    <div class='input-wrapper'>
                        <label for='email'>Email</label>
                        <input id='email' class='register' name='email' type='email' value=''  pattern="^[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*$" required>
                    </div>

                    <div class='input-wrapper'>
                        <label for='password'>Mot de passe</label>
                        <input id='password' class='register' name='password' type='password' value='' minlengh="2" required>
                    </div>
                    <button type="submit" class="register">Enregistrer</button>
            </form>
        </main>
    </body>

</html>