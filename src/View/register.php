<?php
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css" />
            <meta http-equiv="x-ua-compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=no">

            <title>Register</title>
    </head>

    <body>
        <?php
            require('header.php');
        ?>
        <main>
            

            <h1>Page d'enregistrement</h1>

            <form id='registerForm' method='post'>

                    <!-- <div class='input-wrapper'>
                        <label for='first_name'>Prénom</label>
                        <input id='first_name' class='register' name='first_name' type='text' value='' minlength="2" required>
                    </div>
                    <div class='input-wrapper'>
                        <label for='last_name'>Nom</label>
                        <input id='last_name' class='register' name='last_name' type='text' value='' minlengh="2" required>
                    </div>

                    <div class='input-wrapper'>
                        <label for='email'>Email</label>
                        <input id='email' class='register' name='email' type='email' value=''  pattern="^[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*$" required>
                    </div>

                    <div class='input-wrapper'>
                        <label for='password'>Mot de passe</label>
                        <input id='password' class='register' name='password' type='password' value='' minlengh="2" required>
                    </div>

                    <div class='input-wrapper'>
                        <label for='checkPassword'>Vérifier le mot de passe</label>
                        <input id='checkPassword' class='register' name='checkPassword' type='password' value='' minlengh="2" required>
                    </div> -->
                    <div class="input-container ic1">
                        <input id="firstname" name="first_name" class="input" type="text" placeholder=" " minlength="3"/>
                        <div class="cut"></div>
                        <label for="firstname" class="placeholder">Pénom</label>
                    </div>
                    <div class="input-container ic2">
                        <input id="lastname" name="last_name" class="input" type="text" placeholder=" " minlength="3"/>
                        <div class="cut"></div>
                        <label for="lastname" class="placeholder">Nom</label>
                    </div>
                    <div class="input-container ic2">
                        <input id="email" name="email" class="input" type="text" placeholder=" " minlength="6"/>
                        <div class="cut cut-email"></div>
                        <label for="email" class="placeholder">Email</>
                    </div>
                    <div class="input-container ic2">
                        <input id="password" name="password" class="input" type="password" placeholder="" minlength="6"/>
                        <div class="cut cut-short"></div>
                        <label for="mot de passe" class="placeholder">Mot de passe</>
                    </div>
                    <div class="input-container ic2">
                        <input id="checkpassword" name="checkPassword" class="input" type="password" placeholder="" minlength="6"/>
                        <div class="cut cut-short"></div>
                        <label for="mot de passe" class="placeholder">Vérifier le mot de passe</>
                    </div>
                    <button type="submit" class="register">Enregistrer</button>
            </form>
        </main>
    </body>
</html>