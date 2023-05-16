console.log("JS TEST OK");
let apiKey='b23e6b84f03128e33dc8c1b5988b2872';
let language = 'fr-FR';

let displaySpace = document.getElementById('display');
let displayMovies = document.getElementById('displayMovies');
let bestRates = document.getElementById('bestRatesMovies');
let displayGodzilla = document.getElementById('displayGodzilla');

//----------------get best new movies---------------

// addEventListener('load', (event) => {
//     getBest();
// });

let bestMovies = document.getElementById('bestRates');

bestMovies.addEventListener("click", (e) =>{
    getBest();
})

async function getBest(){

    //get movies list
    let response = await fetch(`https://api.themoviedb.org/3/discover/movie?api_key=b23e6b84f03128e33dc8c1b5988b2872&language=${language}&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&with_watch_monetization_types=flatrate`, {method: 'GET'});
    let responseData = await response.json();
    console.log(responseData.results[0].id);

    //GET THE 20 FIRST MOVIES IN THIS LIST
    for (let i = 0; i < 20; i++) {
    idMovie=responseData.results[i].id;

    let responseMovie = await fetch(`https://api.themoviedb.org/3/movie/${idMovie}?api_key=${apiKey}&language=${language}`, {method: 'GET'});
    let responseDataMovie = await responseMovie.json();

    console.log(responseDataMovie.original_title);
    console.log(responseDataMovie.overview);
    displaySpace.innerHTML='';
      let template = `
              <h2>${responseDataMovie.original_title}</h2><br>
              <div class="overview">${responseDataMovie.overview}</div><br>
              <span>Moyenne des votes : ${responseDataMovie.vote_average}</span>
              <img class="poster" alt="html image example" src="https://image.tmdb.org/t/p/original${responseDataMovie.poster_path}" />
        `;
      bestRates.insertAdjacentHTML('beforeend', template);
    }

}

//-------------- part for get MulhollandDrive ----------------

let getInfo = document.getElementById('getMovie');

getInfo.addEventListener("click", (e) =>{
    getMovie();
})

async function getMovie(){

    let response = await fetch(`https://api.themoviedb.org/3/movie/1018?api_key=${apiKey}&language=${language}`, {method: 'GET'});
    let responseData = await response.json();
   // console.log(responseData);
    console.log(responseData.original_title);


     displaySpace.innerHTML='';

      let template = `
              <h2>${responseData.original_title}</h2><br>
              <p>${responseData.overview}</p><br>
              <span>Moyenne des votes : ${responseData.vote_average}</span>
              <img class="poster" alt="html image example" src="https://image.tmdb.org/t/p/original${responseData.poster_path}" />
        `;
      displaySpace.insertAdjacentHTML('beforeend', template);
}


//---------------------get several movie by list--------------

let getInfos = document.getElementById('getMovies');

getInfos.addEventListener("click", (e) =>{
    getMovies();
})

async function getMovies(){

    //get movies list
    let response = await fetch(`https://api.themoviedb.org/3/discover/movie?api_key=${apiKey}&with_genres=16`, {method: 'GET'});
    let responseData = await response.json();
    console.log(responseData.results[0].id);

    //GET THE 30 FIRST MOVIES IN THIS LIST
    for (let i = 0; i < 30; i++) {
    idMovie=responseData.results[i].id;

    let responseMovie = await fetch(`https://api.themoviedb.org/3/movie/${idMovie}?api_key=${apiKey}&language=${language}`, {method: 'GET'});
    let responseDataMovie = await responseMovie.json();

    console.log(responseDataMovie.original_title);
    console.log(responseDataMovie.overview);
              // A METTRE EVENTUELLEMENT DANS TEMPLATE
              // <h2>${responseDataMovie.original_title}</h2><br>
              // <p>${responseDataMovie.overview}</p><br>
              // <span>Moyenne des votes : ${responseDataMovie.vote_average}</span>


      let template = `
  
              <img class="poster" alt="html image example" src="https://image.tmdb.org/t/p/original${responseDataMovie.poster_path}" />
        `;
      displayMovies.insertAdjacentHTML('beforeend', template);
    }
}

//---------------------get all movies with the kayword Godzilla--------------




async function getFunGodzilla(){

    //get movies list
    let response = await fetch(`https://api.themoviedb.org/3/search/movie?api_key=b23e6b84f03128e33dc8c1b5988b2872&query=godzilla`, {method: 'GET'});
    let responseData = await response.json();
    console.log(responseData.results[0].id);

    //GET THE 30 FIRST MOVIES IN THIS LIST
    for (let i = 0; i < 30; i++) {
    idMovie=responseData.results[i].id;

    let responseMovie = await fetch(`https://api.themoviedb.org/3/movie/${idMovie}?api_key=${apiKey}&language=${language}`, {method: 'GET'});
    let responseDataMovie = await responseMovie.json();

    console.log(responseDataMovie.original_title);
    console.log(responseDataMovie.overview);

      let template = `
  
              <img class="poster" alt="html image example" src="https://image.tmdb.org/t/p/original${responseDataMovie.poster_path}" />
        `;
      displayGodzilla.insertAdjacentHTML('beforeend', template);
    }
}

let getGodzilla = document.getElementById('forGodzilla');

getGodzilla.addEventListener("click", (e) =>{
    getFunGodzilla();
})