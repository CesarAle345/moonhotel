setTimeout(function (){
    modificar();
}, 1250);

function modificar(){
    var prim = document.getElementById("titulo");
    prim.style.fontSize = "50px";
    prim.style.fontFamily = "Arial";

}


setTimeout(function (){
    modificar1();
}, 2500);


function modificar1(){
    var uno = document.getElementById("primero");
    uno.style.fontSize = "40px";
    uno.style.fontFamily = "Arial";
}

setTimeout(function (){
    modificar2();
}, 5000);

function modificar2(){
    var dos = document.getElementById("segundo");
    dos.style.fontSize = "20px";
    dos.style.fontFamily = "Italic";
    dos.style.alignContent = "justified";
}

setTimeout(function (){
    modificarp3();
}, 12500);

function modificarp3(){
    var tres = document.getElementById("tercer");
    tres.style.fontSize = "40px";
    tres.style.fontFamily = "Arial";
}

setTimeout(function (){
    modificar4();
}, 14000);

function modificar4(){
    var cuatro = document.getElementById("cuarto");
    cuatro.style.fontSize = "20px";
    cuatro.style.fontFamily = "Italic";
    cuatro.style.alignContent = "justified";
}

setTimeout(function (){
    modificar5();
}, 14000);

function modificar5(){
    var cuatro = document.getElementById("quinto");
    cuatro.style.fontSize = "20px";
    cuatro.style.fontFamily = "Allura";
    cuatro.style.alignContent = "justified";
}



const parrafo = document.createElement("p");
const span = document.createElement("span");


const div2 = document.getElementById("par");
div2.appendChild(parrafo);
parrafo.remove();

const btn1 = document.getElementById("btn1");
btn1.addEventListener("click", function(a){
    a.preventDefault();
    verMas();
})

const btn2 = document.getElementById("btn2");
btn2.addEventListener("click", function(a){
    a.preventDefault();
    verMenos();
})

function verMas() {
    parrafo.textContent = "Era el 20 de julio de 1969 cuando, después de casi dos décadas de la famosa carrera espacial, Estados Unidos colocaba su bandera sobre la luna, haciendo historia convirtiéndose en el primer país en lograrlo. Desde ese día, las misiones espaciales ya no suenan como algo de otro mundo, en 2021 tenemos empresas espaciales privadas con planes cada vez más ambiciosos y que incluso podrían considerarse una oportunidad de negocio.";
    parrafo.style.fontFamily = "italic";
    div2.appendChild(parrafo);
}

function verMenos() {
    parrafo.remove();
}