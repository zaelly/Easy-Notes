
const background = document.querySelector(".invitation");

const imagens = [
    "/imgs/img3.jpg",
    "/imgs/imgs2.jpg",
    "/imgs/imgs4.jpg"
]

let i = 0;

setInterval(function(){
    background.style.backgroundImage = `linear-gradient(rgba(14, 14, 14, 0.692), rgba(0, 81, 255, 0.712)), url('${imagens[i]}')`;
    i = (i + 1) % imagens.length;
},8000)


const btn1 = document.querySelector("#btn1");
const btn2 = document.querySelector("#btn2");

const infoSlideMensal = document.querySelector("#infoSlideMensal");
const infoSlideAnual = document.querySelector("#infoSlideAnual");

btn1.addEventListener("click", clickBtn1);
btn2.addEventListener("click", clickBtn2);

function clickBtn1(){
    btn2.style.background = 'transparent';
    btn2.style.color = '#fff';
    infoSlideAnual.style.display = 'none';

    btn1.style.background = '#006eb3';
    btn1.style.color = "#fff";
    btn1.style.borderRadius = '2rem';
    infoSlideMensal.style.display = 'block';
    console.log("teste1")

};

function clickBtn2(){

    btn1.style.background = 'transparent';
    btn1.style.color = '#fff';
    infoSlideMensal.style.display = 'none';

    btn2.style.color = "#fff";
    btn2.style.background = '#006eb3';
    btn2.style.borderRadius = '2rem';
    infoSlideAnual.style.display = 'block';
    console.log("teste2")

};

clickBtn1();

window.onload = function() {
    if (window.location.hash) {
        const target = document.querySelector(window.location.hash);
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    }
};
