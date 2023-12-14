// $(function(){
//     // let edit = false;

//     console.log('hello world, funciona jquery');
//     //$('#task-result').hide();
//     //feetchTasks();

//     $('#search').keyup(function(){
//         if($('#search').val()){
//             let numsolicitud = $('#search').val();
//             console.log(numsolicitud);

//             $.post('../Controllers/searchUser.controller.php',{numsolicitud}, function(response){
//                 console.log(response);
//                 const dato = JSON.parse(response);

//                 $('#solicitud').val(dato.id);
//                 $('#dni').val(dato.dni);
//                 $('#tipoEscritura').val(dato.tipoEscritura);
//                 $('#telefono').val(dato.telefono);

//                 $('#solicitud').text('Solicitud buscada: ' + dato.id);
//                 $('#dni').text(dato.dni);
//                 $('#tipEscritura').text(dato.tipoEscritura);
//                 $('#telefono').text(dato.telefono);





//                 $('#numsoli').val(dato.id);
//                 $('#txtnombre').val(dato.usuario);    
//                 $('#notario').val(dato.notario);  
//                 $('#fecharecepcion').val(dato.fecCreacion);
//                 $('#fechaatendida').val(dato.fecha);  
//             });
//         }
//     })
// })

