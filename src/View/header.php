<?php
?>
<header>
<button id="menuButton"><span  class="material-icons">menu</span></button>

            <nav>
            <button role="icon-button">X</button>
                <!-- <li><img class="logo" alt="logo" src="logo_cinetech.png" /> -->
                <li ><a href="home" class="menuLink">Home sweet home</a></li>
                <li><a href="movies" class="menuLink">Les films</a></li>
                <li><a href="tvshow" class="menuLink">Les séries</a></li>
            <?php if (empty($_SESSION['id'])){ ?>
                <li><a href="register" class="menuLink">S'enregistrer</a></li>
                <li><a href="login" class="menuLink">Se connecter</a></li>
            <?php } ?>

            <?php if (isset($_SESSION['id'])){ ?>
                <li><a href="account" class="menuLink">Votre compte</a></li>
                <li><a href="logout" class="menuLink">Déconnexion</a></li>
            <?php } ?>

            </nav>

</header>
<script type="text/javascript" src="script-responsiv.js"></script>
