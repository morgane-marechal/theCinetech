console.log('script-account OK');

let displayFavorites = document.getElementById('yourFavorites');
let apiKey ='b23e6b84f03128e33dc8c1b5988b2872';

//get favorites movies

async function getOneFavoriteMovie(movieId){
    let movie = await fetch(`https://api.themoviedb.org/3/movie/${movieId}?api_key=${apiKey}`, {method: 'GET'});
    let responseData = await movie.json();
    console.log(responseData);
    console.log(responseData.poster_path);
    let template = `
     <li>
        <a href='movie/${movieId}'><img id="${movieId}" class="posterFavorite" alt="html image example" src="https://image.tmdb.org/t/p/original/${responseData.poster_path
        }" /></a>
     </li>            `;
     displayFavorites.insertAdjacentHTML('beforeend', template);

}


async function getFavoritesMovies(){
    let response = await fetch(`account/favorites`, {method: 'GET'});
      let responseData = await response.json();
      console.log(responseData[0]["movie_id"]);
       console.log(responseData);

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