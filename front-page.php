<?php

get_header();  ?>

	<div class="hero">
		<div class="container">
			<h1>cj reyes</h1>
			<h3>front-end web developer</h3>
		</div>
	</div>

	<div class="about" id="about">
		<div class="container">
			<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="aboutText">
				<h4>about me.</h4>
				<p><?php the_content(); ?></p>
				<div class="skills">
					<span class="devicons devicons-html5"></span>
					<span class="devicons devicons-css3"></span>
					<span class="devicons devicons-javascript_badge"></span>
					<span class="devicons devicons-jquery"></span>
					<span class="devicons devicons-responsive"></span>
					<span class="devicons devicons-wordpress"></span>
					<span class="devicons devicons-sass"></span>
					<span class="devicons devicons-sublime"></span>
					<span class="devicons devicons-gulp"></span>
					<span class="devicons devicons-github"></span>
					<span class="devicons devicons-w3c"></span>
					<span class="devicons devicons-photoshop"></span>
				</div> <!-- .skills -->
			</div> <!-- .aboutText -->
			<div class="aboutImg">
				<?php $headshot = get_field('headshot') ?>
				<img src="<?php echo $headshot['url']?>" alt="">
			</div>
		</div>
	</div>


	<div class="portfolio" id="portfolio">
		<div class="container">
		<h4>my work.</h4>
		<div class="groupWorks">
			<?php 
				$portArgs = array(
					'post_type' => 'portfolio',
					'posts_per_page' => -1,
					'order' => 'ASC',
					'orderby' => 'date'
					);
				$portQuery = new WP_Query($portArgs);
				if( $portQuery->have_posts() ) {
					while( $portQuery->have_posts() ) {
						$portQuery->the_post();
						?>
						<?php $portImage = get_field('images_group')[0]['port_img']; ?>
						<figure>
							<img src="<?php echo $portImage['url'] ?>" alt="">
							<figcaption>
								<div class="wrapper">
									<h3><?php the_title() ?></h3>
									<p><?php the_field('short_desc') ?></p>
									<button class="viewMore"><a href="<?php the_permalink(); ?>">View More</button>
									<button class="viewLive"><a href="<?php the_field('website') ?>">View Live</a></button>
								</div>
							</figcaption>
						</figure>

						<?php
					}
				}
				wp_reset_postdata();
				 ?>
				<?php endwhile; // end the loop?>
				

			</div><!-- /.groupWorks -->
		</div> <!-- /.container -->
	</div> <!-- /.portfolio -->

	<div class="contact" id="contact">
		<div class="container">
			<h4>get in touch.</h4>
			<div class="wrapper">
				<div class="contactInfo">
						<h5>contact info</h5>
						<p><a class="email" href="mailto:hello@cjreyes.ca">hello@cjreyes.ca</a></p>
						<ul>
							<li><a href="https://github.com/itscjreyes"><i class="fa fa-github"></i></a></li>
							<li><a href="https://ca.linkedin.com/in/reyescj"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://twitter.com/itscjreyes"><i class="fa fa-twitter"></i></a></li>
						</ul>
				</div>
				<form action="" class="contactForm">
					<input type="text" name="Name" id="contactForm" placeholder="Name*" required>
					<input type="text" name="Email" id="contactForm" placeholder="Email*" required>
					<textarea name="Message" id="contactForm" placeholder="Say Hello!"></textarea>
					<input type="submit" name="Submit" id="contactForm" value="Send">
				</form>
			</div>
		</div>
	</div>

<?php get_footer(); ?>