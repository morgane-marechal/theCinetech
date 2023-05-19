<?php
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css" />
            <meta http-equiv="x-ua-compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=no">

            <title>Les films</title>
    </head>
    
    <body>
        <?php
            require('header.php');
        ?>
        <main>
            <div id="search-movie">
                <input id="search" type="search" placeholder="Rechercher un film ...">
                <div id="displayResult"></div>
            </div>

            <div id="latest-movie">

            </div>
        </main>       
    </body>

    <script type="text/javascript" src="script-movie.js"></script>
</html>