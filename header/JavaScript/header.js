// let ultwo = document.getElementById("more");

// let moreli = document.getElementById("more-li");

// ultwo.addEventListener("click", moreBtn);

// function moreBtn(){
//  if(moreli.style.display = "none"){
//     moreli.style.display = "flex";
//  }
//  else{
//     morediv.style.display = "none";
//  }
// }

let closenav = document.getElementById("nav-container-close");

let menu = document.getElementById("nav-container-menu");

let nav = document.getElementById("nav-container");

closenav.addEventListener("click",closeMenu);

menu.addEventListener("click", showMenu);

function showMenu(){
   nav.style.display = "flex";
}
function closeMenu(){
   nav.style.display = "none";
}