console.log('script-account OK');

let displayFavorites = document.getElementById('yourFavorites');
let apiKey ='b23e6b84f03128e33dc8c1b5988b2872';
let displayFormActive = false;

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



       let templateForm = `
            <form id='updateForm' method='post'>

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
          <span class="input-indicator"><span bar>Entrez votre mot de passe pour valider les changements</span><span val></span>
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
        `;

    if(displayFormActive===false){
        spaceForm.innerHTML=templateForm;
        displayFormActive = true;    
    } else if(displayFormActive===true){
        spaceForm.innerHTML='templateForm';
        displayFormActive = false;    
    };
}


updateUser.addEventListener("click", getInfoUser);










