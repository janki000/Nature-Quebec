/* Wow, tellement un beau spot pour écrire du JS */

var Cont={val:0} , NewVal = 9000 ;
TweenLite.to(Cont,7,{val:NewVal,roundProps:"val",onUpdate:function(){
    document.getElementById("nombre").innerHTML=Cont.val
}});

var Cont2={val:0} , NewVal = 100 ;
TweenLite.to(Cont2,7,{val:NewVal,roundProps:"val",onUpdate:function(){
    document.getElementById("nombre2").innerHTML=Cont2.val
}});

var Cont3={val:0} , NewVal = 39 ;
TweenLite.to(Cont3,7,{val:NewVal,roundProps:"val",onUpdate:function(){
    document.getElementById("nombre3").innerHTML=Cont3.val
}});

var Cont4={val:0} , NewVal = 40 ;
TweenLite.to(Cont4,7,{val:NewVal,roundProps:"val",onUpdate:function(){
    document.getElementById("nombre4").innerHTML=Cont4.val
}});

gsap.registerPlugin(ScrollTrigger);

const cadreList = document.querySelectorAll('.cadre-valeur');
cadreList.forEach((cadre) =>{
    const text = cadre.querySelector('.int-valeur');
    gsap.timeline({
        scrollTrigger: {
          trigger: cadre,
          markers: false,
          start: 'bottom bottom',
          end: '40% top',
          toggleActions:'play reverse complete reset',
        }
    })
    .from(text ,{
        scale: 0.5,
        opacity: 0,
        y: -100,
    })

    .to(text ,{
        scale: 1,
        opacity: 1,
        y: 0,
    })
});

gsap.to('#nombre', {
    scrollTrigger: {
        trigger:'.info-valeur',
        markers: false,
        start: '10% 80%',
        end: '30% center',
        toggleActions:'play reverse complete reset',
        scrub: true,
    },
    opacity: 1,
})

gsap.to('#nombre2', {
    scrollTrigger: {
        trigger:'.info-valeur',
        markers: false,
        start: '10% 80%',
        end: '30% center',
        toggleActions:'play reverse complete reset',
        scrub: true,
    },
    opacity: 1,
})

gsap.to('#nombre3', {
    scrollTrigger: {
        trigger:'.info-valeur',
        markers: false,
        start: '10% 80%',
        end: '30% center',
        toggleActions:'play reverse complete reset',
        scrub: true,
    },
    opacity: 1,
})

gsap.to('#nombre4', {
    scrollTrigger: {
        trigger:'.info-valeur',
        markers: false,
        start: '10% 80%',
        end: '30% center',
        toggleActions:'play reverse complete reset',
        scrub: true,
    },
    opacity: 1,
})