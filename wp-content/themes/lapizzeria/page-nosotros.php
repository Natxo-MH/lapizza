
<?php  get_header();    ?>

	<?php while(have_posts()): the_post(); ?>		



			<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
					<div class="contenido-hero">

						<div class="texto-hero">
							<?php the_title('<h1>', '</h1>'); ?>
						</div>

					</div>				
			</div>


			<div class="principal contenedor">

				<main class="texto-centrado contenido-paginas">

					<?php the_content(); ?>

				</main>

			</div>



			<div class="informacion-cajas contenedor clear">

				
						<div class="caja">
									<?php 
										$id_imagen = get_field('imagen_1');  // get_field es para asignar el valor a otra variable. Si queremos imprimir																		 // directamente utilizamos the_field (como se ve más abajo en las 																							 // descripciones que van en las otras cajas)

										$imagen = wp_get_attachment_image_src($id_imagen, 'nosotros'); // Aquí 'nosotros' se refiere al tamaño de imagen 																																// que registramos en el archivo 'functions.php'

									?>
									
									<img src="<?php echo $imagen[0] ?>" class="imagen-caja">

									<div class="contenido-caja">
										<?php the_field('descripcion_1'); ?>
									</div>

							</div><!--caja-->



							<div class="caja">

									<div class="contenido-caja">
										<?php the_field('descripcion_2'); ?>
									</div>


									<?php 
										$id_imagen = get_field('imagen_2');  // get_field es para asignar el valor a otra variable. Si queremos imprimir																		 // directamente utilizamos the_field (como se ve más abajo en las 																							 // descripciones que van en las otras cajas)

										$imagen = wp_get_attachment_image_src($id_imagen, 'nosotros'); // Aquí 'nosotros' se refiere al tamaño de imagen 																																// que registramos en el archivo 'functions.php'
										
									?>
									
									<img src="<?php echo $imagen[0] ?>" class="imagen-caja">									

							</div><!--caja-->



							<div class="caja">
									<?php 
										$id_imagen = get_field('imagen_3');  // get_field es para asignar el valor a otra variable. Si queremos imprimir																		 // directamente utilizamos the_field (como se ve más abajo en las 																							 // descripciones que van en las otras cajas)

										$imagen = wp_get_attachment_image_src($id_imagen, 'nosotros'); // Aquí 'nosotros' se refiere al tamaño de imagen 																																// que registramos en el archivo 'functions.php'
										
									?>
									
									<img src="<?php echo $imagen[0] ?>" class="imagen-caja">

									<div class="contenido-caja">
										<?php the_field('descripcion_3'); ?>
									</div>

							</div><!--caja-->

			</div><!--contenedor-caja-->


	<?php endwhile; ?>


<?php  get_footer();    ?>