
<?php  get_header();    ?>

	<?php while(have_posts()): the_post(); ?>		


			<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
					<div class="contenido-hero">

						<div class="texto-hero">
							<?php the_title('<h1>', '</h1>'); ?>
						</div>

					</div>				
			</div>


			<div class="principal contenedor contacto">

				<main class="contenido-paginas">						

						<?php get_template_part('templates/formulario', 'reservacion'); ?> <!-- Para utilizar esta función es necesario crear los archivos como en el ejemplo (1ªpartearchivo-2ªpartearchivo.php) para que la función pueda entender donde buscar -->

				</main>

			</div>

	<?php endwhile; ?>


<?php  get_footer();    ?>