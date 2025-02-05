const icons = document.querySelector(".contact");
const divIcon = document.querySelector(".icons");
// const home = document.querySelector(".landing");

// function to hide home and contact us
// shows "about us"

divIcon.style.display = 'none';
// function show(){
    // home.style.visibility = 'hidden';
    // contact.style.visibility = 'hidden';
    // about.style.visibility = 'visible';
    // divIcon.style.display = 'flex';

// }

// icons.addEventListener('click', () =>{
//     if(divIcon.style.display == 'none'){
//         divIcon.style.display = 'flex';
//     }else{
//         divIcon.style.display = 'none';
//     }
// })

function showContact(){
    if(divIcon.style.display == 'none'){
        divIcon.style.display = 'flex';
    }else{
        divIcon.style.display = 'none';
    }
}
icons.addEventListener('click', showContact);
// function to hide home and about us
// function showContact(){
//     home.style.visibility = 'hidden';
//     contact.style.visibility = 'visible';
//     about.style.visibility = 'hidden';
// }

// about.addEventListener('click', show);
