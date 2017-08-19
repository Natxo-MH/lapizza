

<?php  get_header();    ?>

	<?php while(have_posts()): the_post(); ?>		



			<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
					<div class="contenido-hero ">

						<div class="texto-hero">
							<h1> <?php echo esc_html( get_option('blogdescription')); ?> </h1>

							<?php the_content(); ?>

							<?php  $url = get_page_by_title('Sobre Nosotros'); ?>
							<a class="button naranja" href="<?php echo get_permalink($url->ID); ?>">Leer más</a>
						</div>

					</div>				
			</div>

	<?php endwhile; ?>




			<div class="principal contenedor">

				<main class="texto-centrado contenedor-grid">

					<h2 class="texto-rojo">Nuestras Especialidades</h2>

					<?php $args = array (
							'posts_per_page'   =>   3,
							'orderby'   =>    'rand',
							'post_type'   =>  'especialidades'

					); 

					$especialidades = new WP_Query($args);
					while($especialidades->have_posts()): $especialidades->the_post();

					?>

					<div class="especialidad columnas1-3">

						<div class="contenido-especialidad">
						
							<?php the_post_thumbnail('especialidades_portrait'); ?>
								<div class="informacion-platillo">
									
									<?php the_title('<h3>', '</h3>'); ?>
									<?php the_content(); ?>
									<p class="precio"><?php the_field('precio'); ?>€</p>
									<a href="<?php the_permalink(); ?>" class="button">Leer más</a>
								</div>

						</div>

					</div>

					<?php endwhile; ?>

				</main>

			</div>



			<section class="ingredientes">
				<div class="contenedor clear">
					<div class="contenido-grid">
					<?php while(have_posts()): the_post(); ?>
						<div class="columnas2-4">
							<?php the_field('contenido'); ?>
								<?php  $url = get_page_by_title('Sobre Nosotros'); ?>
								<a class="button" href="<?php echo get_permalink($url->ID); ?>">Leer más</a>
						</div>
						<div class="columnas2-4  imagen">
							<img src="<?php the_field('imagen'); ?>">
						</div>
					<?php endwhile; ?>
					</div>	
				</div>			
			</section>


			<section class="contenedor">
				
				<h2 class="texto-rojo texto-centrado">Galería de Imágenes</h2>
				<?php  $url = get_page_by_title('Galería'); ?>
				<?php echo get_post_gallery($url->ID) ?>

			</section>



			<section class="ubicacion-reservacion">
				<div class="contenedor-grid">
					<div class="columnas2-4">
						<div id="mapa">



							


						</div>
						
					</div>
					<div class="columnas2-4">						

						<?php get_template_part('templates/formulario', 'reservacion'); ?> <!-- Para utilizar esta función es necesario crear los archivos como en el ejemplo (1ªpartearchivo-2ªpartearchivo.php) para que la función pueda entender donde buscar -->

					</div>

				</div>

			</section>





<?php  get_footer();    ?>




