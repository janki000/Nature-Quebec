/* Wow, tellement un beau spot pour écrire du JS */
var current = 1; //keeps track of the current div
var height = $('.roles').height(); //the height of the roles div
var numberDivs = $('.roles').children().length; //the number of children of the roles div
var first = $('.roles div:nth-child(1)'); //the first div nested in roles div
setInterval(function() {
    var number = current * -height;
    first.css('margin-top', number + 'px');
    if (current === numberDivs) {
        first.css('margin-top', '0px');
        current = 1;
    } else current++;
}, 2000);


//JAVA DAVID PAGE VALEURS-------------------------------------------------------------------------------





gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(MotionPathPlugin);

//Animer le titre de la page


//Animation des blocs
const blocs = document.querySelectorAll('.bloc, bloc2');
blocs.forEach((bloc, index) =>{
  const date = bloc.querySelector('.dateArticle');
  const titre = bloc.querySelector('.titreArticle');
  const infos = bloc.querySelector('.infos');
  var delai = index * 0.0005;
  console.log(delai);
  
const t1 = gsap.timeline({
  scrollTrigger:{
    start: 'bottom bottom',
    trigger : bloc,
    }
  })
  .from(bloc, {
    opacity: 0,
    x: -200,
    stagger: 0.5,
    delay: delai,
  })
  .from(date, {
    opacity: 0
  })
  .from(titre, {
    opacity: 0
  })
  .from(infos, {
    opacity: 0
  }) 
});

//Animation de l'abeille
const t2 = gsap.timeline({
  defaults: {
    ease: 'linear'
  },
  scrollTrigger: {
    trigger: '.bloc, bloc2',
    markers: true,
    start: '150% bottom',
    end: '500% bottom',
    scrub: true,
  }
})  
t2.from('.abeille', {
  opacity: 0,
  delay: 1,
})
t2.to('.abeille', {
  pin: true,
   motionPath:{
     curviness: 2,
      path:[
        {x: -70, y:200},
        {x: 50, y: 100},
        {x: -120, y: 50},
        {x: 40, y:400},
        {x: 50, y: 300},
        {x: -70, y: 250},
        {x: -70, y:600},
        {x: 50, y: 400},
        {x: -70, y: 350},
        {x: -70, y:800},
        {x: 50, y: 700},
        {x: -70, y: 650},
     ],
   },
 })
t2.to('.abeille', {
  motionPath:{
      path:[
        {x: -600, y:650},
        {x: -800, y: 550},
        {x: -1000, y: 450},
        {x: -600, y:200},
        {x: -400, y: 450},
        {x: -800, y: 550},
     ],
  }
})
t2.to('.abeille', {
  x: '-1750%',
  opacity: 0,
})



/* JAVA JAN CARLOS ----------------------------------------------------------------------------------------------------------------*/
const t3 = gsap.timeline({defaults: {ease: 'linear'},
repeat:-2,
yoyo:true
})


t3.to('.oiseau1', {
  x: -850,
  y: 280,
 duration: 5, delay: '35%'})

 t3.to('.tronc', {opacity: 0, duration: 0.2, delay: '35%'})




gsap.registerPlugin(ScrollTrigger);


const t4 = gsap.timeline({defaults: {ease: 'linear'},
})
t4.to('.tronc', { 
  y: '2100px',
  opacity: -5,
  scrollTrigger: {
    scrub: 0.3,
    markers: true,
    start: 'top top',
    end: 'bottom 90%',
  }
})

  t4.to('.oiseau1', { 
    y: '-2200px',
    x: '-1100px',
    opacity: -5,
    delay: 0.5,
    stagger: 0.2,
    scrollTrigger: {
      scrub: 0.3,
      scale: 2,
      markers: true,
      start: 'top top',
      end: 'bottom 90%',
      
    }
  })
  

  const t5 = gsap.timeline({defaults: {ease: 'linear'},
})

t5.to('.nature', { 
  y: '2100px',
  fontSize: 500,
  rotation: 180,
  opacity: -5,
  scrollTrigger: {
    scrub: 0.3,
    markers: true,
    start: 'top top',
    end: 'bottom 90%',
  }
})

t5.to('.quebec', { 
  x: '2100px',
  fontSize: 500,
  rotation: 180,
  opacity: -5,
  scrollTrigger: {
    scrub: 0.3,
    markers: true,
    start: 'top top',
    end: 'bottom 90%',
  }
})

t5.to('.N', { 
  x: '2200px',
  y: '3100px',
  rotation: -180,
  opacity: -5,
  scrollTrigger: {
    scrub: 0.3,
    markers: true,
    start: 'top top',
    end: 'bottom 90%',
  }
})
t5.to('.A', { 
  x: '4200px',
  y: '3700px',
  rotation: -180,
  opacity: -5,
  scrollTrigger: {
    scrub: 0.3,
    markers: true,
    start: 'top top',
    end: 'bottom 90%',
  }
})
t5.to('.T', { 
  x: '2100px',
  y: '3000px',
  rotation: -180,
  opacity: -5,
  scrollTrigger: {
    scrub: 0.3,
    markers: true,
    start: 'top top',
    end: 'bottom 90%',
  }
})
t5.to('.R', { 
  x: '2500px',
  y: '3300px',
  rotation: -180,
  opacity: -5,
  scrollTrigger: {
    scrub: 0.3,
    markers: true,
    start: 'top top',
    end: 'bottom 90%',
  }
})
t5.to('.U', { 
  x: '2000px',
  y: '3300px',
  rotation: -180,
  opacity: -5,
  scrollTrigger: {
    scrub: 0.3,
    markers: true,
    start: 'top top',
    end: 'bottom 90%',
  }
})
t5.to('.B', { 
  x: '2800px',
  y: '3700px',
  rotation: -180,
  opacity: -5,
  scrollTrigger: {
    scrub: 0.3,
    markers: true,
    start: 'top top',
    end: 'bottom 90%',
  }
})
t5.to('.C', { 
  x: '3100px',
  y: '3000px',
  rotation: -180,
  opacity: -5,
  scrollTrigger: {
    scrub: 0.3,
    markers: true,
    start: 'top top',
    end: 'bottom 90%',
  }
})

/* JAVA DAVID-------------------------------------------------------------------------------------------------------------------- */
const t6 = gsap.timeline({defaults: {ease: 'linear'},
repeat:-2,
yoyo:true
})


t6.to('.handshake1', { 
  scrollTrigger: {
      trigger:'.all',
      markers: false,
      start: '550% bottom',
    end: '600% bottom',
      scrub: true,
  },
  x: '-200px',
  y: '-35px',
  opacity: 1,
  rotation: 2,
})

t6.to('.handshake2', {
  scrollTrigger: {
      trigger:'.hanshake1',
      markers: false,
      start:'bottom center',
      end:'bottom 30%',
      scrub: true,
  },
  rotation: -2,
  x: '200px',
  opacity: 1,
})


//On va chercher TOUS les blocs employés, on les mets dans une variable, qu'on appelle blocEmployes
const blocEmployes = document.querySelectorAll('.bloc-employe');
//On va cherche la classe popup et ce qu'elle contient
const popup = document.querySelector('.popup');
const popupDescription = popup.querySelector('.popup-description');
//On va chercher la classe du bouton pour fermer le pop up
const fermerPopup = popup.querySelector('.fermer-popup');
//On va appeler chaque bloc employe (individuellement) : personne. Quand on va cliquer sur une personne, on va faire popup sa description.
blocEmployes.forEach(personne => {
    personne.addEventListener('click', () => {
        popupDescription.innerText = personne.dataset.description;
        popup.style.display = "block";
    });
}); 
fermerPopup.addEventListener('click', () => {
    popup.style.display = "none";
});
//On va chercher le bloc du hamburger
const hamburger = document.querySelector('.menu-btn');
//Aller chercher les menus
const menus = header.querySelector('.menus');
//Quand on clic dessus, on fait apparaître le menu
hamburger.addEventListener('click', () =>{
    console.log("chat");
});












