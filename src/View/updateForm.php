<?php
?>
<html>
    
                <h2>Mettre à jour ses informations</h2>

        <form id='updateForm' method='post'>
            <span class="input-indicator"><span bar>Vous pouvez mettre à jour vos données</span><span val></span>


            <div class="input-container ic1">
                <input id="firstname" class="input" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="firstname" class="placeholder">${firstname}</label>
            </div>
            <div class="input-container ic2">
                <input id="lastname" class="input" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="lastname" class="placeholder">${lastname}</label>
            </div>
            <div class="input-container ic2">
                <input id="email" class="input" type="text" placeholder=" " />
                <div class="cut cut-email"></div>
                <label for="email" class="placeholder">${email}</>
            </div>
            <div class="input-container ic3">
            <span class="input-indicator"><span bar>Entrez votre mot de passe ou un nouveau mot de passe pour valider les changements</span><span val></span>
            </div>
            <div class="input-container ic2">
                <input id="password" class="input" type="password" placeholder="" />
                <div class="cut cut-short"></div>
                <label for="mot de passe" class="placeholder">Mot de passe</>
            </div>
            <div class="input-container ic2">
                <input id="password" class="input" type="password" placeholder="" />
                <div class="cut cut-short"></div>
                <label for="mot de passe" class="placeholder">Vérifier le mot de passe</>
            </div>
            <button type="text" class="submit">submit</button>
            </div>
        </form>
</html>
