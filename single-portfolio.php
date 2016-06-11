<?php get_header(); ?>

<div class="singlePage">
  <div class="container">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>



        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="singleTitle">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <button class="viewLive"><a href="<?php the_field('website') ?>">View Live</a></button>
          </div>
        <div class="singleContent">
          <div class="fullDescription">
                
                <div class="tags">
                <!-- foreach to separate tags -->
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

            <div class="entry-content">
              <?php the_content(); ?>
              <?php wp_link_pages(array(
                'before' => '<div class="page-link"> Pages: ',
                'after' => '</div>'
              )); ?>
            </div><!-- .entry-content -->
            <div id="nav-below" class="navigation">
              <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
              <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
            </div><!-- #nav-below -->
          </div><!-- .fullDescription -->
          
          <div class="fullImages">
            <?php $portImage = get_field('images_group') ?>
            <?php $portImageArray = $portImage[1]['port_img'] ?>
            <img src="<?php echo $portImageArray['url'] ?>" alt="">
          </div><!-- .fullImages -->
        </div><!-- .singleContent -->

        </div><!-- #post-## -->

        

      <?php endwhile; // end of the loop. ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>