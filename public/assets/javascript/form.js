
// Função para mostrar o campo de cupom de desconto
const cupomDesconto = document.getElementById("cupomDesconto");
cupomDesconto.addEventListener("click", function() {
    let showCupomInput = document.querySelector(".showCupomInput");

    if(showCupomInput.style.display === "none"){
        showCupomInput.style.display = "block";
    }else{
        showCupomInput.style.display = "none";
    }
});

//informações dinamicas de acordo com qual select é escolhido
const select = document.getElementById("select");

let spanUsers = document.getElementById('spanUsers');
let spanData = document.getElementById('spanData');
let spanImage = document.getElementById('spanImage');

function limparDiv(){
    if (spanUsers.querySelector('p')) spanUsers.querySelector('p').remove();
    if (spanData.querySelector('p')) spanData.querySelector('p').remove();
    if (spanImage.querySelector('p')) spanImage.querySelector('p').remove();
}

function select1(){
    limparDiv();
    let p = document.createElement('p');
    let pTwo = document.createElement('p');
    let pTree= document.createElement('p');

    // Icon 1
    p.textContent = '1 usuário!';
    // Icon 2
    pTwo.textContent = '20 MB de dados!';
    // Icon 3
    pTree.textContent = '1 imagem!';

    spanUsers.appendChild(p);
    spanImage.appendChild(pTwo);
    spanData.appendChild(pTree);

}

function select2(){
    limparDiv();
    let p2 = document.createElement('p');
    let pTwo2 = document.createElement('p');
    let pTree2 = document.createElement('p');

    // Icon 1
    p2.textContent = '5 usuários!';
    // Icon 2
    pTwo2.textContent = '100 MB de dados!';
    // Icon 3
    pTree2.textContent = '12 GB de anexos e imagens!';

    spanUsers.appendChild(p2);
    spanImage.appendChild(pTwo2);
    spanData.appendChild(pTree2);
}

function select3(){
    limparDiv();
    let p3 = document.createElement('p');
    let pTwo3 = document.createElement('p');
    let pTree3 = document.createElement('p');

    // Icon 1
    p3.textContent = '10 usuários!';
    // Icon 2
    pTwo3.textContent = '300 MB de dados!';
    // Icon 3
    pTree3.textContent = '12 GB de anexos e imagens!';

    spanUsers.appendChild(p3);
    spanImage.appendChild(pTwo3);
    spanData.appendChild(pTree3);
}

function select4(){
    limparDiv();
    let p4 = document.createElement('p');
    let pTwo4 = document.createElement('p');
    let pTree4 = document.createElement('p');

    // Icon 1
    p4.textContent = '15 usuários!';

    // Icon 2
    pTwo4.textContent = '800 MB de dados!';
    // Icon 3
    pTree4.textContent = '12 GB de anexos e imagens!';

    spanUsers.appendChild(p4);
    spanImage.appendChild(pTwo4);
    spanData.appendChild(pTree4);
}

function trocarInfoSelect(){
    const selectValue = select.value;

    switch (selectValue) {
        case "1":
            select1();
            break;
        case "2":
            select2();
            break;
        case "3":
            select3();
            break;
        case "4":
            select4();
            break;
        default:
            limparDiv();
            let p5 = document.createElement('p');
            p5.textContent = "Nenhum resultado encontrado";
            div.appendChild(p5);
            break;
    }
}

select.addEventListener("change", trocarInfoSelect);
trocarInfoSelect();

//btns de preço


const btn1 = document.querySelector("#btn1");
const btn2 = document.querySelector("#btn2");

const infoSlide = document.querySelector("#infoSlide");
const valor1 = "44.90";
const valor2 = "358.80";
const slider = document.querySelector('.slider');


function clickBtn11(){
    let div = infoSlide;
    div.innerHTML = "";

    let valor = document.createElement('p');
    valor.textContent = `R$${valor1}/mês`;
    valor.classList = "valorStyle";

    let p = document.createElement('p');
    p.style.color = 'gray';
    p.style.marginTop = '-15px';
    p.textContent = "pague menos no anual"

    div.appendChild(valor);
    div.appendChild(p);
}

function clickBtn22(){
    let divSlide = infoSlide;
    divSlide.innerHTML = "";

    const valor = document.createElement('p');

    const span = document.createElement('span');

    let spanValue = span.textContent = `R$${valor2}` ;
    valor.textContent = `2x ${spanValue}/mês ou ou 1x 358,80 no plano anual`;
    valor.classList = "valorStyle";

    const p = document.createElement('p');
    p.style.color = 'gray';
    p.style.marginTop = '-15px';
    p.textContent = "economize R$ 180,00"

    divSlide.appendChild(valor);
    divSlide.appendChild(p);
}

function clickBtn1(){
    clickBtn11();

    btn2.style.background = 'transparent';
    btn2.style.color = '#000';

    btn1.style.background = '#006eb3';
    btn1.style.color = "#fff";
    btn1.style.borderRadius = '2rem';
};

function clickBtn2(){

    clickBtn22();

    btn1.style.background = 'transparent';
    btn1.style.color = '#000';

    btn2.style.color = "#fff";
    btn2.style.background = '#006eb3';
    btn2.style.borderRadius = '2rem';
};

clickBtn1();

btn1.addEventListener("click", clickBtn1)
btn2.addEventListener("click", clickBtn2)


