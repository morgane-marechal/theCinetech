console.log('script-account OK');

let displayFavorites = document.getElementById('yourFavorites');
let apiKey ='b23e6b84f03128e33dc8c1b5988b2872';

//get favorites movies

async function getOneFavoriteMovie(movieId){
    let movie = await fetch(`https://api.themoviedb.org/3/movie/${movieId}?api_key=${apiKey}`, {method: 'GET'});
    let responseData = await movie.json();
    // console.log(responseData);
    // console.log(responseData.poster_path);
    let template = `
     <li>
        <a href='movie/${movieId}'><img id="${movieId}" class="posterFavorite" alt="html image example" src="https://image.tmdb.org/t/p/original/${responseData.poster_path
        }" /></a>
        <button id="${movieId}" class="heart"><span id="${movieId}" class="material-symbols-outlined">
        heart_minus</span></button>
     </li>            `;
     displayFavorites.insertAdjacentHTML('beforeend', template);

}


async function getFavoritesMovies(){
    let response = await fetch(`account/favorites`, {method: 'GET'});
      let responseData = await response.json();
    //   console.log(responseData[0]["movie_id"]);
    //    console.log(responseData);

       listMovie=responseData.map((item) => {
        return {movie_id: item.movie_id}
    });
    console.log(listMovie);

    listMovie.forEach(movie => {

        movieId = movie.movie_id;
        getOneFavoriteMovie(movieId);

        
    });
}

  getFavoritesMovies();

// GET INFOS USER FOR UPDATE
let spaceForm = document.getElementById('updateProfilForm');
let updateUser = document.getElementById('buttonUpdateProfil');


/*
async function displayForm(){
    let response = await fetch(`account/updateForm`, {method: 'GET'});
    let responseData = await response.text();
    //console.log(responseData);
    spaceForm.innerHTML=responseData;
}

spaceForm.innerHTML="";

updateUser.addEventListener("click", displayForm());
*/




async function getInfoUser(){
    let response = await fetch(`account/update`, {method: 'GET'});
      let responseData = await response.json();
      console.log(responseData);
       email=responseData.email;
       firstname=responseData.first_name;
       lastname=responseData.last_name;
       password=responseData.password;



       let templateForm = `
            <form id='updateForm' method='post'>

            <div class='input-wrapper'>
                <label for='first_name'>Prénom</label><br>
                <input id='first_name' class='register' name='first_name' type='text' value='${firstname}' minlength="2" required>
            </div>
            <div class='input-wrapper'>
                <label for='last_name'>Nom</label><br>
                <input id='last_name' class='register' name='last_name' type='text' value='${lastname}' minlengh="2" required>
            </div>

            <div class='input-wrapper'>
                <label for='email'>Email</label><br>
                <input id='email' class='register' name='email' type='email' value='${email}'  pattern="^[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*$" required>
            </div>

            <div class='input-wrapper'>
                <label for='password'>Mot de passe</label><br>
                <input id='password' class='register' name='password' type='password' value='' minlengh="2" required><br>
                <span class="input-indicator"><span bar>Entrez votre mot de passe pour valider les changements</span><span val></span>
            </div>

            <div class='input-wrapper'>
                <label for='checkPassword'>Vérifier le nouveau mot de passe</label><br>
                <input id='checkPassword' class='register' name='checkPassword' type='password' value='' minlengh="2" required><br>
                <span class="input-indicator"><span bar>Confirmez votre mot de passe pour valider les changements</span><span val></span>
            </div>
            <button type="submit" class="register">Enregistrer</button>
            </form>
        `;

    spaceForm.innerHTML=templateForm;
}


updateUser.addEventListener("click", getInfoUser);










