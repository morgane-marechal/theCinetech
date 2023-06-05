<?php
?>
<header>
<button id="menuButton"><span  class="material-icons">menu</span></button>

            <nav>
            <button role="icon-button">X</button>
            <li><a href="home">Home sweet home</a></li>
                <li><a href="movies">Les films</a></li>
                <li><a href="tvshow">Les séries</a></li>
            <?php if (empty($_SESSION['id'])){ ?>
                <li><a href="register">S'enregistrer</a></li>
                <li><a href="login">Se connecter</a></li>
            <?php } ?>

            <?php if (isset($_SESSION['id'])){ ?>
                <li><a href="account">Votre compte</a></li>
                <li><a href="logout">Déconnexion</a></li>
            <?php } ?>

            </nav>

</header>
<script type="text/javascript" src="script-responsiv.js"></script>
