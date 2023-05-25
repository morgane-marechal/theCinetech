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
            <div id="updateProfilForm"></div>

            <div id="yourFavorites"></div>

        </main>
    </body>
    <script type="text/javascript" src="script-account.js"></script>
</html>

    
