<?php
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css" />
            <meta http-equiv="x-ua-compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=no">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            <title>Les films</title>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">

    </head>
    
    <body>
        <?php
            require('header.php');
        ?>
        <main>
            <div id="search-movie">
                <input id="search" type="search" placeholder="Rechercher un film ...">
                <ul id="displayResult"></ul>
            </div>

            <div id="latest-movie">

            </div>
        </main>       
    </body>

    <script type="text/javascript" src="script-movie.js"></script>
</html>