 				//JQuery Validate
                $('#fomulariologin').validate();
                $('#insert_form').validate();
                //Menu Toggle Script
                $("#menu-toggle").click(function (e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });
        // DataTable
                 $(document).ready(function() {
                  $('#listar-usuario').DataTable({      
                    "processing": true,
                    "serverSide": true,
                    "ajax": {
                      "url": "proc_pesq_user.php",
                      "type": "POST"
                    }
                  });
                } );
              
        // Bootstrap Notify
                 
// (function(){
// 	//Pesquisar os cursos sem refresh na página
// 	("#pesquisa").keyup(function(){
		
// 		var pesquisa = $(this).val();
		
// 		//Verificar se há algo digitado
// 		if(pesquisa != ''){
// 			var dados = {
// 				palavra : pesquisa
// 			}		
// 			$.post('load.php', dados, function(retorna){
// 				//Mostra dentro da ul os resultado obtidos 
// 				$(".resultado").html(retorna);
// 			});
// 		}else{
// 			$(".resultado").html('');
// 		}		
// 	});
// });
// });

// $(document).ready(function(){

//     $('#pesquisa').keyup(function(){

//         $('form').submit(function(){
//             var dados = $(this).serialize();

//             $.ajax({
//                 url: 'load.php',
//                 method: 'post',
//                 dataType: 'html',
//                 data: dados,
//                 success: function(data){
//                     $('#resultado').empty().html(data);
//                 }
//             });

//             return false;
//         });

//         $('form').trigger('submit');

//     });
// });



