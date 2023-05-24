<?php
?>
<header>
            
            <nav>
            <?php if (empty($_SESSION['id'])){ ?>
                <li><a href="register">S'enregistrer</a></li>
                <li><a href="login">Se connecter</a></li>
            <?php } ?>

            <?php if (isset($_SESSION['id'])){ ?>
                <li><a href="account">Votre compte</a></li>
                <li><a href="logout">Déconnexion</a></li>
            <?php } ?>
            </nav>
            <nav>
                <li><a href="home">Home sweet home</a></li>
                <li><a href="movies">Les films</a></li>
                <li><a href="tvshow">Les séries</a></li>
            </nav>

</header>