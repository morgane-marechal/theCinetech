<?php
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css" />
            <meta http-equiv="x-ua-compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=no">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            <title>Espace perso</title>
    </head>
    
    <body>
        <?php
            require('header.php');
        ?>

        <main>
            <div id=titleAccount><h1>Mon espace perso</h1></div>
            <div id="yourFavorites"></div>
            <div id="updateProfil">
                <h2>Mettre à jour ses informations</h2>

                <form id='updateForm' method='post'>

                    <div class='input-wrapper'>
                        <label for='first_name'>Prénom</label>
                        <input id='first_name' class='register' name='first_name' type='text' value='' minlength="2" required>
                    </div>
                    <div class='input-wrapper'>
                        <label for='last_name'>Nom</label>
                        <input id='last_name' class='register' name='last_name' type='text' value='' minlengh="2" required>
                    </div>

                    <div class='input-wrapper'>
                        <label for='email'>Email</label>
                        <input id='email' class='register' name='email' type='email' value=''  pattern="^[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*$" required>
                    </div>

                    <div class='input-wrapper'>
                        <label for='password'>Mot de passe</label>
                        <input id='password' class='register' name='password' type='password' value='' minlengh="2" required>
                    </div>

                    <div class='input-wrapper'>
                        <label for='checkPassword'>Vérifier le nouveau mot de passe</label>
                        <input id='checkPassword' class='register' name='checkPassword' type='password' value='' minlengh="2" required>
                    </div>
                    <button type="submit" class="register">Enregistrer</button>
                </form>
            </div>
        </main>
    </body>
    <script type="text/javascript" src="script-account.js"></script>
</html>

    
