console.log("responsiv js ok");
let navEl = document.querySelector('nav');
let navCloseIconButton = document.querySelector('nav > button[role="icon-button"]');

let navButtons = document.querySelectorAll('nav > button');
for (let navButton of navButtons) {
    navButton.addEventListener('click', (event) => {
        if (window.matchMedia("(max-width: 460px)").matches) {
            navEl.hidden = true;
        }
    
    });
}

navCloseIconButton.addEventListener('click', (event) => {
    if (window.matchMedia("(max-width: 460px)").matches) {
        navEl.hidden = true;
    }
});



menuButton.addEventListener('click', (event) => {
    if (window.matchMedia("(max-width: 460px)").matches) {
        navEl.hidden = false;
    } 
});