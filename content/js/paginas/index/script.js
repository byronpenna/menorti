$(document).ready(function(){
	setInterval(
		function(){ 
			$(".navRight").click(); 
		}, 
		8000);
	var clicknav = false;
	$(document).on("click",".nav",function(){
		$(this).disabled = true;
		var direccion = $(this).attr("direccion");
		var actual 	= $(".seccionLibros").find(".libro.actual");
		var next = null;
		if (direccion == 1){
			// derecha
			//actual.css("background","pink")
			next 	= actual.next()
			if (!next.hasClass("libro")){
				console.log("entro aqui")
				next = $(".libro:first-child");
			}
		}
		if (direccion == 0){
			next 	= actual.prev()	
			if (!next.hasClass("libro")){
			
				next = $(".libro:last-child");
			}
		}
		console.log(next)
		if (next !== undefined && !next.is(":visible")){
			actual.fadeOut("slow",function(){
				var url = next.find(".txtHDUrlCompra").val();
				$(".botonComprar").attr("href",url);
				next.fadeIn("slow");
			});
		}


		$(".actual").removeClass("actual");
		next.addClass("actual");
		$(this).disabled = false;
	})
})