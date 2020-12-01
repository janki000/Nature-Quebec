
//On va chercher le bloc du hamburger
const hamburger = document.querySelector('.menu-btn');
//Aller chercher les menus
const menus = document.querySelector('.menus');
//Quand on clic dessus, on fait apparaître le menu
hamburger.addEventListener('click', () =>{
    if(menus.style.display === "none"){
        menus.style.display = "block";
       
    }
    else{
        menus.style.display = "none";
    }
});