$(document).ready(function() {

//Guardar el comentario en la bd
$(document).on('click', '#btn_comentario', function(e) {
    e.preventDefault();
    var nombre = $('#name').val();
    var correo = $('#email').val();
    var telefono = $('#phone').val();
    var comentario = $('#comment').val(); 
    var fec = new Date();
    var fecha = fec.getFullYear() + "-" + (fec.getMonth()+1) + "-" + fec.getDate();
    $.ajax({
        url: '../layout/funciones_php/funciones.php',
        type: 'POST',
        data: {
            'save': 1,
            'name': nombre,
            'email': correo,
            'phone': telefono,
            'comment': comentario,
            'date': fecha,
        }, 
        success: function(respuesta){
            $('#name').val('');
            $('#email').val('');
            $('#telefono').val('');
            $('#comentario').val('');
            $('#area_comentarios').append(respuesta);
        }
    })
});

});