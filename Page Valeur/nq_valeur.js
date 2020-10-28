var Cont={val:0} , NewVal = 9000 ;
TweenLite.to(Cont,5,{val:NewVal,roundProps:"val",onUpdate:function(){
    document.getElementById("nombre").innerHTML=Cont.val
}});

var Cont2={val:0} , NewVal = 100 ;
TweenLite.to(Cont2,5,{val:NewVal,roundProps:"val",onUpdate:function(){
    document.getElementById("nombre2").innerHTML=Cont2.val
}});

var Cont3={val:0} , NewVal = 39 ;
TweenLite.to(Cont3,5,{val:NewVal,roundProps:"val",onUpdate:function(){
    document.getElementById("nombre3").innerHTML=Cont3.val
}});

var Cont4={val:0} , NewVal = 40 ;
TweenLite.to(Cont4,5,{val:NewVal,roundProps:"val",onUpdate:function(){
    document.getElementById("nombre4").innerHTML=Cont4.val
}});

gsap.registerPlugin(ScrollTrigger);

gsap.to('nombre', {
    scrollTrigger: {
        trigger:'.info',
        markers: true,
        start:'center bottom',
        end:'top top',
        scrub: true,
    },
    x: '90px',
    
})