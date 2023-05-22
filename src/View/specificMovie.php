<?php
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../style.css" />
            <meta http-equiv="x-ua-compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=no">
            <script defer type="text/javascript" src="/theCinetech/script-one-movie.js"></script>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            <title>Détails</title>
    </head>
    
    <body>
    <header>
            
            <nav>
                <li><a href="../register">Register</a></li>
                <li><a href="../login">Login</a></li>
                <li><a href="../logout">Logout</a></li>
            </nav>
            <nav>
                <li><a href="../home">Home sweet home</a></li>
                <li><a href="../movies">Les films</a></li>
                <li><a href="../tvshow">Les séries</a></li>
            </nav>

</header>

        <main>
            <div id="details-movie"></div>



        <h1>Les avis de nos utilisateurs</h1>


          <div class="container">

            <form  id='addReviewForm' action='' method='post'>
                <label raised for="comment">Ajouter un titre</label>
                  <input id="titleReviewUser" class="comment" name="title" type="text" value="">               

                  <label raised for="comment">Votre commentaire</label>
                  <textarea id="contentReviewUser" class="comment" name="content" type="text" value="">  </textarea>             
              <button type="submit" class="register_form_button" id="envoie" name="envoie" contained>Ajouter un nouveau commentaire</button>
            </form>

          </div>


            <div id="usersComments">
                <?php 
                 var_dump($success);
                 var_dump($success[0]);
                 var_dump($success[0]["title"]);


                ?>
            </div>
            <div id="reviews-space"></div>


        </main>
        
    </body>


</html>