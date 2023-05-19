console.log('script-one-movie OK');
let apiKey='b23e6b84f03128e33dc8c1b5988b2872';
let language = 'fr-FR';

let displaySpace = document.getElementById("details-movie");
let reviewsSpace = document.getElementById("reviews-space");


//get the current URL WITH THE ID OF THE MOVIE
function getCurrentURL () {
    return window.location.href
  }

  // GET THE ID MOVIE
 const url = getCurrentURL()
 let parts = url.split('/');
 let idMovie = parts.pop() || parts.pop();  //get last segment of the url

 console.log(idMovie);

 async function getMovie(){

    let response = await fetch(`https://api.themoviedb.org/3/movie/${idMovie}?api_key=${apiKey}&language=${language}`, {method: 'GET'});
    let responseData = await response.json();
    // console.log(responseData.original_title);
    // console.log(responseData);


     displaySpace.innerHTML='';

      let template = `
              <h2>${responseData.original_title}</h2><br>
              <div class="main-info">
                <img class="one-poster" alt="html image example" src="https://image.tmdb.org/t/p/original${responseData.poster_path}" />
                <div class="overview-info">${responseData.overview}</div><br>
              </div>
              <span class="rate-info">Moyenne des votes : ${responseData.vote_average}</span>
        `;
      displaySpace.insertAdjacentHTML('beforeend', template);
      
}

getMovie();

async function getReviews(){

    let response = await fetch(`https://api.themoviedb.org/3/movie/${idMovie}/reviews?api_key=${apiKey}`, {method: 'GET'});
    let responseData = await response.json();
    console.log(responseData);

    let totalResults=responseData.total_results;
    reviewsSpace.innerHTML='';

    for (let i = 0; i < totalResults; i++) {
     let date = new Date(responseData.results[i].updated_at).toLocaleDateString("fr");

      let template = `
      <div class="review">
        <div class="content">${responseData.results[i].content}<br></div>
        <div class="autor">${responseData.results[i].author}</div>
        <div class="date">${date}</div>

      </div>
        `;
      reviewsSpace.insertAdjacentHTML('beforeend', template);
    }
}

getReviews();

