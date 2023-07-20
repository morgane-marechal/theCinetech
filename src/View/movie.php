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
                <div id="categories">
                    <button id='28' class='category'>Action</button>
                    <button id='35' class='category'>Comedie</button>
                    <button id='16' class='category'>Animation</button>
                    <button id='18' class='category'>Drame</button>
                    <button id='99' class='category'>Documentaire</button>
                    <button id='10751' class='category'>Famille</button>
                    <button id='14' class='category'>Fantasy</button>
                    <button id='27' class='category'>Horreur</button>
                    <button id='10749' class='category'>Romance</button>
                    <button id='878' class='category'>Science-Fiction</button>
                    <button id='53' class='category'>Thriller</button>
                    <button id='37' class='category'>Western</button>
                </div>

                <ul id="displayResult"></ul>
            </div>

            <div id="latest-movie">

            </div>
        </main>       
    </body>

    <script type="text/javascript" src="script-movie.js"></script>
</html>