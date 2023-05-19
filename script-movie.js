console.log("JS MOVIE OK");
let searchInput = document.getElementById('search');
let displayResult = document.getElementById('displayResult');
let displaySearchTitle = document.getElementById('resultSearchTitle');

let apiKey='b23e6b84f03128e33dc8c1b5988b2872';
let language = 'fr-FR';
let lastMovies = document.getElementById('latest-movie');





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

            let movieId = movie.id;
            let moviePoster = movie.img;
            if (moviePoster) {
                console.log(moviePoster);
                let template = `
                <a href='movie/${movieId}'><img id="${movieId}" class="poster" alt="html image example" src="https://image.tmdb.org/t/p/original${moviePoster}" /></a>
                `;
                displayResult.insertAdjacentHTML('beforeend', template);
            }

        });


        //GET THE 30 FIRST MOVIES IN THIS LIST
    // for (let i = 0; i < 20; i++) {


    //     idMovie=responseData.results[i].id;
    
    //     let responseMovie = await fetch(`https://api.themoviedb.org/3/movie/${idMovie}?api_key=${apiKey}&language=${language}`, {method: 'GET'});
    //     let responseDataMovie = await responseMovie.json();
    
    //     console.log(responseDataMovie.original_title);
    //     console.log(responseDataMovie.overview);
    
    //       template += `
      
    //               <img class="poster" alt="html image example" src="https://image.tmdb.org/t/p/original${responseDataMovie.poster_path}" />
    //         `;
    //     }

    //     console.log(template);
    //     displayResult.insertAdjacentHTML('beforeend', template);

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


