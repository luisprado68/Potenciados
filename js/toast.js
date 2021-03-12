// $('#comenta').click(function(){
//     const div = document.querySelector('.toast');
//     setTimeout(function(){
//                     $('.toast').removeClass('toast--visible');
                    
//                     while(div.hasChildNodes()){
//                         div.removeChild(div.firstChild);
//                         div.classList.remove('toast--error');
//                         div.classList.remove('toast--success');
//                     }
//                 },3000);
    
// });

$('.cerrar-btn').click(function(){
    
    $('.toast').removeClass('toast--visible toast--error toast--success');
   
    location.reload()
});

$('#cierre-contacto').click(function(){
    
    $('.toast').removeClass('toast--visible toast--error toast--success');
   
    window.location.replace("https://potenciados.000webhostapp.com/contacto.php");
});

$('#cierre-registro').click(function(){
    
    $('.toast').removeClass('toast--visible toast--error toast--success');
   
    window.location.replace("https://potenciados.000webhostapp.com");
});

$('#cierre-login').click(function(){
    
    $('.toast').removeClass('toast--visible toast--error toast--success');
   
    window.location.replace("https://potenciados.000webhostapp.com/login.php");
});

/**  comentario */

// $('#registro').click(function(){
    
//     const div = document.querySelector('.toast');

//     if(document.getElementById('si').checked ){
//         const mensaje = document.createElement('span');
//         const texto = document.createTextNode("Comentario enviado!");
//         mensaje.classList.add('msg');
//         mensaje.appendChild(texto);
//         div.appendChild(mensaje);

//         $('.toast').addClass('toast--visible toast--success');

//         setTimeout(function(){
//             $('.toast').removeClass('toast--visible');
            
//             while(div.hasChildNodes()){
//                 div.removeChild(div.firstChild);
//                 div.classList.remove('toast--success');
//             }
//         },5000);
//     }
//     else{
//         $('.toast').addClass('toast--visible toast--error');

//         const mensaje = document.createElement('span');
//         const texto = document.createTextNode("No se pudo enviar el comentario!");
//         mensaje.classList.add('msg');
//         mensaje.appendChild(texto);
//         div.appendChild(mensaje);

//         setTimeout(function(){
//             $('.toast').removeClass('toast--visible');
            
//             while(div.hasChildNodes()){
//                 div.removeChild(div.firstChild);
//                 div.classList.remove('toast--error');
//             }
//         },3000);
//     }
    
// });