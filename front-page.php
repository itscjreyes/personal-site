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
				<div class="aboutImg responsiveImg">
					<?php $headshot = get_field('headshot') ?>
					<img src="<?php echo $headshot['url']?>" alt="">
				</div>
				<p><?php the_field('bio') ?></p>
				<div class="skills">
					<span class="devicons devicons-html5"></span>
					<!-- <p>HTML5</p> -->
					<span class="devicons devicons-css3"></span>
					<!-- <p>CSS3</p> -->
					<span class="devicons devicons-sass"></span>
					<!-- <p>Sass</p> -->
					<span class="devicons devicons-javascript_badge"></span>
					<!-- <p>JavaScript</p> -->
					<span class="devicons devicons-jquery"></span>
					<!-- <p>jQuery</p> -->
					<i class="fa fa-mobile"></i>
					<!-- <p>Responsive</p> -->
					<span class="devicons devicons-wordpress"></span>
					<!-- <p>WordPress</p> -->
					<span class="devicons devicons-sublime"></span>
					<!-- <p>Sublime</p> -->
					<span class="devicons devicons-terminal"></span>
					<!-- <p>Command Line</p> -->
					<span class="devicons devicons-gulp"></span>
					<!-- <p>Gulp</p> -->
					<span class="devicons devicons-git"></span>
					<!-- <p>Git</p> -->
					<span class="devicons devicons-github"></span>
					<!-- <p>GitHub</p> -->
					<span class="devicons devicons-photoshop"></span>
					<!-- <p>Photoshop</p> -->
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
						<?php $portImage = get_field('images_group') ?>
						<?php $portImageArray = $portImage[0]['port_img'] ?>

						<figure>
							<img src="<?php echo $portImageArray['url'] ?>" alt="">
							<figcaption>
								<div class="wrapper">
									<h3><?php the_title() ?></h3>
									<p><?php the_field('short_desc') ?></p>
									<div class="tags">
										<?php 
										  $field = get_field_object('tags');
										  $value = $field['value'];
										  $choices = $field['choices'];

										  if( $value ): ?>
										  <ul>
										    <?php foreach( $value as $v ): ?>
										    <li>
										      <?php echo $choices[ $v ]; ?>
										    </li>
										    <?php endforeach; ?>
										  </ul>
										<?php endif; ?>
									</div>
									<button class="viewMore"><a href="<?php the_permalink(); ?>">View More</a></button>
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
							<li><a href="https://medium.com/@cjreyes"><i class="fa fa-medium"></i></a></li>
						</ul>
				</div>
				<div class="contactForm">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>