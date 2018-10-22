<?php
/*
Template Name: Front
*/
get_header(); ?>

<header id="front-hero" role="banner">
<div class="grid-container">
	<div class="grid-x grid-margin-x">
		<div class="cell">
			<!-- Orbit Gallery -->
				<div class="orbit clean-hero-slider" role="region" aria-label="Favorite Space Pictures" data-orbit>
			  <div class="orbit-wrapper">
			    <div class="orbit-controls">
			      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
			      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
			    </div>
			    <ul class="orbit-container">
			      <li class="orbit-slide">
			        <figure class="orbit-figure">
			          <img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/01.jpg" alt="image alt text">
			          <figcaption class="orbit-caption">
			            <p>Copyright &copy; Sound On Sound Publications</p>
			          </figcaption>
			        </figure>
			      </li>
			      <li class="orbit-slide">
			        <figure class="orbit-figure">
			          <img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/02.jpg" alt="image alt text">
			        </figure>
			      </li>
			      <li class="orbit-slide">
			        <figure class="orbit-figure">
			          <img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/03.jpg" alt="image alt text">
			        </figure>
			      </li>
			    </ul>
			  </div>
			  <nav class="orbit-bullets">
			    <button class="is-active" data-slide="1"><span class="show-for-sr"></span></button>
			    <button data-slide="1"><span class="show-for-sr"></span></button>
			    <button data-slide="2"><span class="show-for-sr"></span></button>
			  </nav>
			</div>
			<!-- / Cell -->
		</div>
		<!-- / Grid-x -->
	</div>
	<!-- / Grid Container -->
</div>
<div class="grid-container">
	<div class="grid-x">
		<div class="cell text-center">
			<a class="button hollow large text-center" href="/events">Book For Stephen Taberner Events</a>
		</div>
	</div>
</div>

</header>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
