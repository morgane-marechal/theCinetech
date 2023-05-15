console.log("JS OK");

let displaySpace = document.getElementById('display');



//-------------- part for get MulhollandDrive ----------------

let getInfo = document.getElementById('getMovie');

getInfo.addEventListener("click", (e) =>{
    getMovie();
})

async function getMovie(){
    let response = await fetch(`https://api.themoviedb.org/3/movie/1018?api_key=b23e6b84f03128e33dc8c1b5988b2872&language=fr-FR`, {method: 'GET'});
    let responseData = await response.json();
    console.log(responseData);
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

