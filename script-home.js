console.log("JS MOVIE OK");
let searchInput = document.getElementById('search');
let displayResult = document.getElementById('displayResult');
let displaySearchTitle = document.getElementById('resultSearchTitle');

let apiKey='b23e6b84f03128e33dc8c1b5988b2872';
let language = 'fr-FR';
let lastMovies = document.getElementById('latest-movie');



addEventListener('load', (event) => { getBest();});


async function getBest(){

    //get movies list
    let response = await fetch(`https://api.themoviedb.org/3/discover/movie?api_key=${apiKey}&language=${language}&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&with_watch_monetization_types=flatrate`, {method: 'GET'});
    let responseData = await response.json();
    console.log(responseData.results[0].id);

    let response2 = await fetch(`https://api.themoviedb.org/3/discover/movie?api_key=${apiKey}&language=${language}&sort_by=popularity.desc&include_adult=false&include_video=false&page=2&with_watch_monetization_types=flatrate`, {method: 'GET'});
    let responseData2 = await response2.json();

    bestMoviesData = responseData.results.map((item) => {
        return {id: item.id, img: item.poster_path}
    });

    bestMoviesData2 = responseData2.results.map((item) => {
        return {id: item.id, img: item.poster_path}
    });
    

    bestMoviesData.forEach(movie => {
        let movieId = movie.id;
        let moviePoster = movie.img;
        if (moviePoster) {
            console.log(moviePoster);
            let template = `
            <li>
                <a href='movie/${movieId}'><img id="${movieId}" class="poster" alt="html image example" src="https://image.tmdb.org/t/p/original${moviePoster}" /></a>
                <button><span class="material-symbols-outlined">
                favorite</span></button>
            </li>
            `;
            lastMovies.insertAdjacentHTML('beforeend', template);
        }
    });

    bestMoviesData2.forEach(movie => {
        let movieId = movie.id;
        let moviePoster = movie.img;
        if (moviePoster) {
            console.log(moviePoster);
            let template = `
            <li>
                <a href='movie/${movieId}'><img id="${movieId}" class="poster" alt="html image example" src="https://image.tmdb.org/t/p/original${moviePoster}" /></a>
                <button><span class="material-symbols-outlined">
                favorite</span></button>
            </li>            `;
            lastMovies.insertAdjacentHTML('beforeend', template);
        }
    });
    
    }






