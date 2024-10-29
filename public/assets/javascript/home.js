const workSection = document.querySelector("#work");
const homeSection = document.querySelector(".container-home");
const suportSection = document.querySelector(".container-suporte");
const contactSection = document.querySelector(".container-contato");
const comeceJa = document.querySelector("#comece-ja");

document.querySelector("#trabalhe-conosco").addEventListener("click", function(e){
    e.preventDefault();
    workSection.style.display = "block";
    contactSection.style.display = "none";
    suportSection.style.display = "none";
    homeSection.style.display = "none";
    comeceJa.style.display = "none";
});

document.querySelector("#home").addEventListener("click", function(e){
    e.preventDefault();
    homeSection.style.display = "block";
    contactSection.style.display = "none";
    workSection.style.display = "none";
    suportSection.style.display = "none";
    comeceJa.style.display = "none";
});

document.querySelector("#contato").addEventListener("click", function(e){
    e.preventDefault();
    contactSection.style.display = "block";
    workSection.style.display = "none";
    homeSection.style.display = "none";
    comeceJa.style.display = "none";
    suportSection.style.display = "none";
});

document.querySelector("#suporte").addEventListener("click", function(e){
    e.preventDefault();
    suportSection.style.display = "block";
    workSection.style.display = "none";
    homeSection.style.display = "none";
    contactSection.style.display = "none";
    comeceJa.style.display = "none";
});
document.querySelector("#comecar").addEventListener("click", function(e){
    e.preventDefault();

    //mostrar a pag index comece ja
    
    comeceJa.style.display = "block";
    suportSection.style.display = "none";
    workSection.style.display = "none";
    homeSection.style.display = "none";
    contactSection.style.display = "none";
});

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
