console.log("JS MOVIE OK");
let searchInput = document.getElementById('search');
let displayResult = document.getElementById('displayResult');
let displaySearchTitle = document.getElementById('resultSearchTitle');

let apiKey ='b23e6b84f03128e33dc8c1b5988b2872';
let language = 'fr-FR';
let lastMovies = document.getElementById('latest-movie');

let movieId = '';
let moviePoster = '';


// declare event.listener on button .heart


async function addFavorite(idFavorite){
    let response = await fetch(`movie/${idFavorite}/favorite`, {method: 'GET'});
    let responseData = await response.json();
    console.log(responseData);
     if(responseData.response == 'ok'){
         let userElement = document.getElementById(movieId);
         console.log(userElement);
     }
     console.log(responseData);
}

function getEvent(){
    let allHeart=document.querySelectorAll('.material-symbols-outlined');

    for (const btn of allHeart){
    //console.log(btn);
        btn.addEventListener("click", (e) =>{
            let idFavorite= e.target.id
            console.log("add heart  "+idFavorite)
            addFavorite(idFavorite);
        })
    }
}


// --------------------GET MOVIES WITH SEARCH
let searchData = [];
let movieTimer = null;

async function check(value) {

    //get movies list
    let response = await fetch(`https://api.themoviedb.org/3/search/movie?api_key=${apiKey}&query=${value}&language=${language}`, {method: 'GET'});
    let responseData = await response.json();

    console.log(responseData);

    searchData = responseData.results.map((item) => {
        return {id: item.id, img: item.poster_path}
    });

    console.log(searchData);

    searchData.forEach(movie => {

            movieId = movie.id;
            moviePoster = movie.img;
            if (moviePoster) {
                let template = `
                <li>
                    <a href='movie/${movieId}'><img id="${movieId}" class="poster" alt="html image example" src="https://image.tmdb.org/t/p/original${moviePoster}" /></a>
                    <button id="${movieId}" class="heart"><span id="${movieId}" class="material-symbols-outlined">
                    favorite</span></button>
                </li>
                `;
                displayResult.insertAdjacentHTML('beforeend', template);
            }
        });

    getEvent() //need to declare event after movies loaded

  }


searchInput.addEventListener("input", (e) =>{
    let value = document.getElementById('search').value;
    length=value.length;
    resultsFound = false;
    displayResult.innerHTML='';
    if(length>1){       
        clearTimeout(movieTimer);
        movieTimer = setTimeout(() => check(value), 300);
    }
})


// searchInput.addEventListener("keypress", (e) =>{
//     let value = document.getElementById('search').value;
//     console.log(value);
//     check();
// })


