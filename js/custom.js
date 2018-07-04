var marqueespeed=1; //Specify marquee scroll speed (larger is faster 1-10)
var pauseit=1; //Pause marquee onMousever (0=no. 1=yes)?


var copyspeed=marqueespeed;
var pausespeed=(pauseit==0)? copyspeed: 0;
var actualheight1='';

function initializemarquee(){
    cross_marquee=document.getElementsByClassName("vmarquee");
    cross_marquee[0].style.top=0;
    cross_marquee[1].style.top=0;
    marquees=document.getElementsByClassName("marqueecontainer");
    marquee1height=marquees[0].offsetHeight;
    marquee2height=marquees[1].offsetHeight;
    actualheight1=cross_marquee[0].offsetHeight;
    actualheight2=cross_marquee[1].offsetHeight;
    
    if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ //if Opera or Netscape 7x, add scrollbars to scroll and exit
        cross_marquee[0].style.height=marquee1height+"px";
        cross_marquee[1].style.height=marquee2height+"px";
        cross_marquee[0].style.overflow="scroll";
        cross_marquee[1].style.overflow="scroll";
        return;
    }
    setTimeout('lefttime=setInterval("scrollmarquee()",30)', 2000);
}

function scrollmarquee(){
    if (parseInt(cross_marquee[0].style.top)>(actualheight1*(-1)+8)){
    cross_marquee[0].style.top=parseInt(cross_marquee[0].style.top)-copyspeed+"px";
    cross_marquee[1].style.top=parseInt(cross_marquee[1].style.top)-copyspeed+"px";
    }
    else{
    cross_marquee[0].style.top=parseInt(marquee1height)+8+"px";
    cross_marquee[1].style.top=parseInt(marquee2height)+8+"px";
    }
}

if (window.addEventListener){
    window.addEventListener("load", initializemarquee, false);
}
else if (window.attachEvent){
    window.attachEvent("onload", initializemarquee);
}
else if (document.getElementById){
    window.onload=initializemarquee;
}

