
setTimeout(function (){
    modificarDom();
}, 2000);


function modificarDom(){
    var form = document.getElementById("formulario");
    form.style.backgroundColor = "white";

    let nuevo = document.getElementById("news");
    nuevo.style.color = "purple";

    input = document.getElementById("name");
    input.style.color = "black";

    const inputs = document.getElementsByClassName("one_third first");
    for(i = 0; i < inputs.length; i++){
    console.log(inputs[i]);
    }   
    inputs[1].style.textAlign = "justified";

    const nombre = document.getElementsByName("nombre");
    nombre[0].style.fontSize = "22px";

    const mail = document.getElementsByName("email");
    mail[0].style.fontSize = "24px";

    const tel = document.getElementsByName("phone");
    tel[0].style.fontSize = "24px";

    const men = document.getElementsByName("comment");
    men[0].style.fontSize = "22px";

    const parrafos = document.getElementsByTagName("p");
    for(var i = 0; i < parrafos.length; i++){
        parrafos[i].style.fontStyle = "italic";
    }

    const querys = document.querySelector(".one_third"); //Es la primer clase de CSS
    querys.style.fontFamily = "Arial";

    const avanzado = document.querySelector(".sn-related #formulario ");
    avanzado.style.borderColor = "black";
    avanzado.style.borderWidth = "2px";

    const h1 = document.querySelectorAll("h1");
    const h2 = document.querySelectorAll("h2");
    const h3 = document.querySelectorAll("h3");
    const clases = document.querySelectorAll(".block");
    const nicknames = document.querySelectorAll('[name="phone"]');
    h1[0].style.textShadow = "1px 1px 1px #028fcc"; 
    h2[0].style.textShadow = "1px 1px 1px #028fcc"; 
    h3[0].style.textShadow = "1px 1px 1px #028fcc";   
    clases[1].style.textShadow = "3px 3px 3px orange"; 
    nicknames[0].style.textShadow = "3px 3px 3px #028fcc"; 
}

//Cada parrafo se cambie cada 5 segundos.
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
}, 10000);

function modificar4(){
    var cuatro = document.getElementById("cuarto");
    cuatro.style.fontSize = "20px";
    cuatro.style.fontFamily = "Italic";
    cuatro.style.alignContent = "justified";
}

//Tarea Incluir jQuery

const parrafo = document.createElement("p");
const span = document.createElement("span");

const texto = document.createTextNode("Hola Ings");
const comentario = document.createComment("Comentario");

const clon = parrafo.cloneNode();
clon.textContent = "Clon del primer parrafo";

parrafo.id = "parrafo_nodo";
parrafo.textContent = "Hola mundo como estan";
const div =  document.getElementById("divisor");
div.appendChild(parrafo);
const imagen = document.createElement("img");
//imagen.src = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.xataka.com%2Fespacio%2Fpara-crear-esta-maravillosa-imagen-110-megapixeles-luna-llena-se-necesitaron-1-5-tb-datos-dos-telescopios&psig=AOvVaw03poC28ff0I-P1zGwdoa33&ust=1645720596213000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJipzpKhlvYCFQAAAAAdAAAAABAD";
imagen.alt = "Imagen Bonita";
div.appendChild(imagen);
parrafo.remove();
imagen.remove();




const boton = document.getElementById("boton");
boton.addEventListener("click", function(e){
    e.preventDefault();
    aparecerImagen();
});

const buton = document.getElementById("buton");
buton.addEventListener("click", function(e){
    e.preventDefault();
    desaparecerImagen();
});

function aparecerImagen(){
    imagen.src = "../img/Inicio/1.jpg";
    imagen.style = "width:360px";
    div.appendChild(imagen);
    parrafo.textContent = "Una persona que pese 45 kilos, en la Luna pesaría 8,05 kilos.";
    parrafo.style.fontFamily = "italic";
    div.appendChild(parrafo);
}

function desaparecerImagen(){
    imagen.remove();
    parrafo.remove();
}





//const menu = document.getElementById("nav-bar");
//console.log(menu);
//menu.children.innerText = "contact-info";
//menu.firstElementChild.style = "Color: pink;";
//menu.lastElementChild.style = "Color: red;";
//menu.parentElement.style = "background-color: #AAAAAA;";
//menu.previousElementSibling.style = "Color:yellow;";
//document.getElementById("active").nextElementSibling.style = "Color:pink;";


//function ponerEstilo(){
  //  const parrafo = document.querySelector(".estilo1");
  //  console.log(parrafo);
  //  parrafo.className = "estilo1 estilo2 estilo3";
  //  console.log(parrafo.className);
//}

//function quitarEstilo(){
  //  const classess = document.querySelector(".estilo1");
   // console.log(classess);
    //classess.classList.remove("estilo3");
    //classess.classList.add("estilo1");
    //classess.class.toggle("estilo2");
    //classess.class.replace("estilo2","estilo3");
    //console.log(classess.classList.contains("estilo3"));
    //console.log(classess.classList.item(2));
    //console.log(classess);
//}

//console.log(parrafo.isConnected());

//tarea cuaderno
//Buscar-Investigar que otros metodos o funciones se pueden usar 
//para modificar el DOM.