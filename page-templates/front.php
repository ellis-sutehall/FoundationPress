<?php
/*
Template Name: Front
*/
get_header(); ?>

<header id="front-hero" role="banner">

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
          <img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/01.jpg" alt="image alt text">
          <figcaption class="orbit-caption">
            <h3>Lorem Ipsum Etiam</h3>
            <p>Etiam porta sem malesuada magna mollis euismod. Vestibulum id ligula porta felis euismod semper.</p>
            <a href="#" class="button yellow">Mattis Elit</a>
          </figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/02.jpg" alt="image alt text">
          <figcaption class="orbit-caption">
            <h3>Ipsum Ornare Ultricies</h3>
            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#" class="button yellow">Egestas Amet</a>
          </figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/03.jpg" alt="image alt text">
          <figcaption class="orbit-caption">
            <h3>Malesuada Parturient</h3>
            <p>Fusce dapibus, tellus ac cursus commodo, sit amet risus. Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam sit amet non magna.</p>
            <a href="#" class="button yellow">Sollicitudin</a>
          </figcaption>
        </figure>
      </li>
			<li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/04.jpg" alt="image alt text">
          <figcaption class="orbit-caption">
            <h3>Malesuada Parturient</h3>
            <p>Fusce dapibus, tellus ac cursus commodo, sit amet risus. Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam sit amet non magna.</p>
            <a href="#" class="button yellow">Sollicitudin</a>
          </figcaption>
        </figure>
      </li>
			<li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/05.jpg" alt="image alt text">
          <figcaption class="orbit-caption">
            <h3>Malesuada Parturient</h3>
            <p>Fusce dapibus, tellus ac cursus commodo, sit amet risus. Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam sit amet non magna.</p>
            <a href="#" class="button yellow">Sollicitudin</a>
          </figcaption>
        </figure>
      </li>
			<li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/06.jpg" alt="image alt text">
          <figcaption class="orbit-caption">
            <h3>Malesuada Parturient</h3>
            <p>Fusce dapibus, tellus ac cursus commodo, sit amet risus. Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam sit amet non magna.</p>
            <a href="#" class="button yellow">Sollicitudin</a>
          </figcaption>
        </figure>
      </li>
    </ul>
  </div>
  <nav class="orbit-bullets">
    <button class="is-active" data-slide="1"><span class="show-for-sr">Lorem Ipsum Etiam</span></button>
    <button data-slide="1"><span class="show-for-sr">Lorem Ipsum Etiam</span></button>
    <button data-slide="2"><span class="show-for-sr">Lorem Ipsum Etiam</span></button>
		<button data-slide="3"><span class="show-for-sr">Lorem Ipsum Etiam</span></button>
		<button data-slide="4"><span class="show-for-sr">Lorem Ipsum Etiam</span></button>
		<button data-slide="5"><span class="show-for-sr">Lorem Ipsum Etiam</span></button>
  </nav>
</div>



	<!-- Remove Old Hero
	<div class="marketing">
		<div class="tagline">
			<h1><?php // bloginfo( 'name' ); ?></h1>
			<h4 class="subheader"><?php // bloginfo( 'description' ); ?></h4>
			<a role="button" class="download large button sites-button hide-for-small-only" href="/nell/events">Click here to book for Stephen Taberner singing weekends</a>
		</div>
	</div>
	Hero Removed -->
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



<!--
<div class="section-divider">
	<hr />
</div>


<section class="benefits">
	<header>
		<h2>Build Foundation based sites, powered by WordPress</h2>
		<h4>Foundation is the professional choice for designers, developers and teams. <br /> WordPress is by far, <a href="http://trends.builtwith.com/cms">the world's most popular CMS</a> (currently powering 38% of the web).</h4>
	</header>

	<div class="semantic">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/semantic.svg" alt="semantic">
		<h3>Semantic</h3>
		<p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
	</div>

	<div class="responsive">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/responsive.svg" alt="responsive">
		<h3>Responsive</h3>
		<p>You can build for small devices first. Then, as devices get larger and larger, layer in more complexity for a complete responsive design.</p>

	</div>

	<div class="customizable">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/customizable.svg" alt="customizable">
		<h3>Customizable</h3>
		<p>You can customize your build to include or remove certain elements, as well as define the size of columns, colors, font size and more.</p>

	</div>

	<div class="professional">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/professional.svg" alt="professional">
		<h3>Professional</h3>
		<p>Millions of designers and developers depend on Foundation. We have business support, training and consulting to help grow your product or service.</p>
	</div>

	<div class="why-foundation">
		<a href="/kitchen-sink">See what's in Foundation out of the box →</a>
	</div>

</section>
 -->


<?php get_footer();
