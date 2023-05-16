<?php
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css" />
            <meta http-equiv="x-ua-compatible" content="IE=edge" />
            <title>Les films</title>
    </head>
    
    <body>
        <?php
            require('header.php');
        ?>
        <main>
            <input id="search" type="text" placeholder="Rechercher un film ...">
            <div id="displayResult"></div>
        </main>
        
    </body>

    <script type="text/javascript" src="script-movie.js"></script>
</html>