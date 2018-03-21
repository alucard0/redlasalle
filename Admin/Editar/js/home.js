
jQuery(function($){
	$("div.resumenTerminos").hide();
	$("div.resumenAviso").hide();
	
	$("p.aviso").click(function(){
		if($("div.resumenAviso").is(":visible"))
		{
			$( "p.aviso" ).removeClass( "active" );
			$("div.resumenAviso").hide(1000);
		    $("div.resumenTerminos").hide(1000);
		}
		else
		{
			$("p.aviso").addClass("active");
			$( "p.terminos" ).removeClass( "active" );
			$("div.resumenAviso").show(1000);
		    $("div.resumenTerminos").hide(1000);
		   	$('html,body').animate({scrollTop: $("div.resumenAviso").offset().top},'slow');
		}
	});
	$("p.terminos").click(function(){
		if($("div.resumenTerminos").is(":visible"))
		{
			$( "p.terminos" ).removeClass( "active" );
			
			$("div.resumenAviso").hide(1000);
		    $("div.resumenTerminos").hide(500);
		}
		else
		{
			$("p.terminos").addClass("active");
			$( "p.aviso" ).removeClass( "active" );
			$("div.resumenTerminos").show(1000);
		    $("div.resumenAviso").hide(1000);
		    $('html,body').animate({scrollTop: $("div.resumenTerminos").offset().top},'slow');
		}
	});
});


