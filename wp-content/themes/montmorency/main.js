//On va chercher TOUS les blocs employés, on les mets dans une variable, qu'on appelle blocEmployes
const blocEmployes = document.querySelectorAll('.bloc-employe');
//On va cherche la classe popup et ce qu'elle contient
const popup = document.querySelector('.popup');
const popupDescription = popup.querySelector('.popup-description');
//On va chercher la classe du bouton pour fermer le pop up
const fermerPopup = popup.querySelector('.fermer-popup');
const backgroundPopup = document.querySelector('.background-popup');
//On va appeler chaque bloc employe (individuellement) : personne. Quand on va cliquer sur une personne, on va faire popup sa description.
blocEmployes.forEach(personne => {
    personne.addEventListener('click', () => {
        popupDescription.innerText = personne.dataset.description;
        popup.style.display = "block";
        backgroundPopup.style.display = "block";
        console.log(personne.dataset.description);
    });
}); 
fermerPopup.addEventListener('click', () => {
    popup.style.display = "none";
    backgroundPopup.style.display = "none";
});