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
            <div id="updateProfil">
                <button id="buttonUpdateProfil" class="update"><span id="updateProfilIcone" class="material-symbols-outlined">
                        manage_accounts</span></button>
                <div id=titleAccount><h2>Mon espace perso</h1></div>
            </div>

            <div id="updateProfilForm">
                <form id='updateForm' method='post'>
                    <span class="input-indicator"><span bar>Vous pouvez mettre à jour vos données</span><span val></span>


                    <div class="input-container ic1">
                        <input id="firstname" name="firstname" class="input" type="text" placeholder=" " />
                        <div class="cut"></div>
                        <label for="firstname" class="placeholder">Pénom</label>
                    </div>
                    <div class="input-container ic2">
                        <input id="lastname" name="lastname" class="input" type="text" placeholder=" " />
                        <div class="cut"></div>
                        <label for="lastname" class="placeholder">Nom</label>
                    </div>
                    <div class="input-container ic2">
                        <input id="email" name="email" class="input" type="text" placeholder=" " />
                        <div class="cut cut-email"></div>
                        <label for="email" class="placeholder">email</>
                    </div>
                    <div class="input-container ic3">
                    <span class="input-indicator"><span bar>Entrez votre mot de passe ou un nouveau mot de passe pour valider les changements</span><span val></span>
                    </div>
                    <div class="input-container ic2">
                        <input id="password" name="password" class="input" type="password" placeholder="" />
                        <div class="cut cut-short"></div>
                        <label for="mot de passe" class="placeholder">Mot de passe</>
                    </div>
                    <div class="input-container ic2">
                        <input id="checkpassword" name="checkpassword" class="input" type="password" placeholder="" />
                        <div class="cut cut-short"></div>
                        <label for="mot de passe" class="placeholder">Vérifier le mot de passe</>
                    </div>
                    <button type="text" name="submit" class="submit">Soumettre</button>
                    </div>
                </form>
            </div>


            <div id="yourFavorites"></div>

        </main>
    </body>
    <script type="text/javascript" src="script-account.js"></script>
</html>

    
