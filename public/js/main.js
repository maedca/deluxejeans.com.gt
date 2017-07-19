btnIrArriba = document.querySelector('#ir-arriba');

function arriba(){
    $("body, html").animate({
        scrollTop: "0px"
    },300);
}

function pedidos(evento){
    evento.preventDefault();

    var url = '../send.php';
    $.ajax({
        type: "POST",
        url: url,
        data: $("#pedidos_frm").serialize(),
        beforeSend : function (){      
        $("#respuesta").html("<img src='../img/loading.gif'></img>");     
        },
        success: function(datos)
        {
            arriba();
            $("#pedidos_frm")[0].reset();
        	$("#banner").html(datos);
        }
    });

}

function enviar(evento){
    evento.preventDefault();
    var formData = new FormData($("#enviar_frm")[0]);
    var ruta = "../enviar.php";
    $.ajax({
        url: ruta,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        beforeSend : function (){      
        $("#respuesta").html("<img src='../img/loading.gif'></img>");     
        },
        success: function(datos)
        {
        $("#respuesta").html(datos);
        $("#enviar_frm")[0].reset();
        }
    });
}

function contactos(evento){
    evento.preventDefault();

    var url = '../send_2.php';
    $.ajax({
        type: "POST",
        url: url,
        data: $("#contacto_frm").serialize(),
        beforeSend : function (){      
        $("#respuesta").html("<img src='../img/loading.gif'></img>");     
        },
        success: function(datos)
        {
            arriba();
            $("#contacto_frm")[0].reset();
            $("#banner").html(datos);
        }
    });

}

function main(){
	btnIrArriba.addEventListener('click',arriba);
	$(window).scroll(function(){
		if ( $(this).scrollTop() > 0 ) {
			$("#ir-arriba").slideDown(300);
		} else{
			$("#ir-arriba").slideUp(300);
		};
	});
}

window.addEventListener('load',main);