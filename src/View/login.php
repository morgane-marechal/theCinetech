<?php
//var_dump($_SESSION);
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css" />
            <meta http-equiv="x-ua-compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=no">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">

            <title>Login</title>
    </head>

    <body>
        <?php
            require('header.php');
        ?>
        <main>
            <h1>Page de connexion</h1>

            <form id='registerForm' method='post'>
                    <div class="input-container ic2">
                        <input id="email" name="email" class="input" type="text" placeholder=" " />
                        <div class="cut cut-email"></div>
                        <label for="email" class="placeholder">Email</>
                    </div>

                    <div class="input-container ic2">
                        <input id="password" name="password" class="input" type="password" placeholder="" />
                        <div class="cut cut-short"></div>
                        <label for="mot de passe" class="placeholder">Mot de passe</>
                    </div>

                    <button type="submit" class="register">Enregistrer</button>
            </form>
        </main>
    </body>

</html>