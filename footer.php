<?php
/**
* 	@author Amilkhael Chávez Delgado;
*	Documento: Footer para las páginas
*/
?>
	<footer>
		<div class="container">
		<div class="row elegir">
			<div class="col-sm-6">
				<figure>
					<img src="images/contenido/porqueLaSalle.png" alt="Porque elegir universidad La Salle" class="img-responsive">
				</figure>
			</div>
			<div class="col-sm-6">
				<ul>
					<li>Formación integral</li>
					<li>Atención Personalizada</li>
					<li>Potenciación de la innovación, creatividad y etrepreneurship</li>
					<li>Planes de estudio y vanguardia</li>
					<li>Docentes con posgrado y experiencia práctica</li>
					<li>Egresados distinguidos</li>
					<li>Importe vinculación empresarial nacional e internacional</li>
					<li>Excelentes instalaciones académicas, deportivas y culturales</li>
					<li>Programas de becas y financiamientos</li>
					<li>Hospitales escuelas</li>
					<li>Parques de Innovación</li>
					<li>Clínicas de rehabilitación</li>
					<li>Más de 100 talleres y laboratorios especializados</li>
				</ul>
			</div>
		</div>
		</div>
		<div class="bgBlack">
			<div class="container">
				<figure class="col-sm-2 col-xs-5"><img src="images/footer/LogosWeb1.png" alt="" class="img-responsive"></figure>
				<figure class="col-sm-2 col-xs-5"><img src="images/footer/LogosWeb2.png" alt="" class="img-responsive"></figure>
				<figure class="col-sm-2 col-xs-5"><img src="images/footer/LogosWeb3.png" alt="" class="img-responsive"></figure>
				<figure class="col-sm-2 col-xs-5"><img src="images/footer/LogosWeb4.png" alt="" class="img-responsive"></figure>
				<figure class="col-sm-2 col-xs-5"><img src="images/footer/LogosWeb5.png" alt="" class="img-responsive"></figure>
				<a href="http://lasalle-vinc.mx/?q=certificacion_conocer#.WX8oc62WwiQ"><figure class="col-sm-2 col-xs-5"><img src="images/footer/LogosWeb6.png" alt="" class="img-responsive"></figure></a>
				<figure class="col-sm-2 col-xs-5"><img src="images/footer/LogosWeb7.png" alt="" class="img-responsive"></figure>
				<figure class="col-sm-2 col-xs-5"><img src="images/footer/LogosWeb8.png" alt="" class="img-responsive"></figure>
				<figure class="col-sm-2 col-xs-5"><img src="images/footer/LogosWeb9.png" alt="" class="img-responsive"></figure>
				<figure class="col-sm-2 col-xs-5"><img src="images/footer/LogosWeb10.png" alt="" class="img-responsive"></figure>
				<figure class="col-sm-2 col-xs-5"><img src="images/footer/LogosWeb11.png" alt="" class="img-responsive"></figure>
				<figure class="col-sm-2 col-xs-5"><img src="images/footer/RED_LA_SALLE_2.png" alt="" class="img-responsive"></figure>
			</div>
		</div>
	</footer>

	<!-- Google -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-1700556-2', 'auto');
		ga('send', 'pageview');

	</script>
	<!--js-->
	<script type="text/javascript" charset="utf-8"  src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" charset="utf-8"  src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		(function($) {
		   $.fn.fixMe = function() {
		      return this.each(function() {
		         var $this = $(this),
		            $t_fixed;
		         function init() {
		            
		            $t_fixed = $this.clone();
		            $t_fixed.find("tbody").remove().end().addClass("fixed").insertBefore($this);

		            resizeFixed();
		         }
		         function resizeFixed() {
		            $t_fixed.find("th").each(function(index) {
		               $(this).css("width",$this.find("th").eq(index).outerWidth()+"px");
		            });
		           
		         }
		         function scrollFixed() {
		            var offset = $(this).scrollTop(),
		            tableOffsetTop = $this.offset().top,
		            tableOffsetBottom = tableOffsetTop + $this.height() - $this.find("thead").height();
		            if(offset < tableOffsetTop || offset > tableOffsetBottom)
		               $t_fixed.hide();
		            else if(offset >= tableOffsetTop && offset <= tableOffsetBottom && $t_fixed.is(":hidden"))
		               $t_fixed.show();
		         }
		         $(window).resize(resizeFixed);
		         $(window).scroll(scrollFixed);
		         init();
		      });
		   };
		})(jQuery);

		$(document).ready(function(){
		   $("table").fixMe();
		   $(".up").click(function() {
		      $('html, body').animate({
		      scrollTop: 0
		   }, 2000);
		 });
		});
	</script>
</body>
</html>