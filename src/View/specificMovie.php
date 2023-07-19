<?php
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../style.css" />
            <meta http-equiv="x-ua-compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=no">
            <script defer type="text/javascript" src="/theCinetech/script-one-movie.js"></script>
            <script defer type="text/javascript" src="/theCinetech/script-responsiv.js"></script>

            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            <title>Détails</title>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">

    </head>
    
    <body>

    <button id="menuButton"><span  class="material-icons">menu</span></button>

            <nav>
            <button role="icon-button">X</button>
            <li><a href="../home">Home sweet home</a></li>
                <li><a href="../movies">Les films</a></li>
                <li><a href="../tvshow">Les séries</a></li>
            <?php if (empty($_SESSION['id'])){ ?>
                <li><a href="../register">S'enregistrer</a></li>
                <li><a href="../login">Se connecter</a></li>
            <?php } ?>

            <?php if (isset($_SESSION['id'])){ ?>
                <li><a href="../account">Votre compte</a></li>
                <li><a href="../logout">Déconnexion</a></li>
            <?php } ?>

            </nav>


        <main>
            <div id="big-poster"></div>

            <div id="details-movie"></div>
            <div id="cast"></div>



        <h1>Les avis de nos utilisateurs</h1>


          <div class="container">

            <form  id='addReviewForm' action='' method='post'>
                <div><label raised for="comment">Ajouter un titre</label></div>
                <div class="input-form"><input id="titleReviewUser" class="comment" name="title" type="text" value=""></div>               

                <div><label raised for="comment">Votre commentaire</label></div>
                <div class="input-form"><textarea id="contentReviewUser" class="comment" name="content" type="text" value="">  </textarea></div>            
                <div><button type="submit" class="register_form_button" id="envoie" name="envoie" contained>Ajouter un nouveau commentaire</button></div>
            </form>

          </div>


            <div id="usersComments">
                <?php 
                //  var_dump($success);
                //  var_dump($success[0]);
                //  var_dump($success[0]["title"]);


                ?>
            </div>
            <div id="reviews-space"></div>


        </main>
        
    </body>


</html>