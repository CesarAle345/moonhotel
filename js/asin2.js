$(document).ready(function(){
    ocultar();
    mostrar();
    ocultar2();
    mostrar2();
  });
  
  
  //Callback
  function ocultar(){
      setTimeout(function(){
          $('#img_arriba').hide(2, function(){
              console.log("Ya aparecio :)");
          });
      }, 3000)
  }
  
  function mostrar(){
      setTimeout(function(){
          $('#img_arriba').show(3000); //linear
      }, 3000);
      flecha();
  }
  
  function ocultar2(){
      setTimeout(function(){
          $('#img_abajo').hide(3000, function(){
              console.log("Ya aparecio :)");
          });
      }, 3000)
  }
  
  function mostrar2(){
      setTimeout(function(){
          $('#img_abajo').show(3000); //linear
      }, 3000);
      flecha();
  }
  