<?php get_header(); ?>
  <!-- JUMBOTRON START -->
    <div class="jumbotron">
      <div class="overlay">
        <div class="showcase-text">
          <h1 class="front-title">I am Isabel Valente</h1>
        </div>
      </div>
    </div>
  <!-- JUMBOTRON END -->

  <!-- GALLERY START -->
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
          <img class="img-responsive" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/grid2.jpg"/>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <img class="img-responsive" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/grid7.jpg"/>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <img class="img-responsive" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/grid8.jpg"/>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
          <img class="img-responsive" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/grid1.jpg"/>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <img class="img-responsive" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/grid6.jpg"/>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <img class="img-responsive" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/grid9.jpg"/>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
          <img class="img-responsive" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/grid3.jpg"/>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <img class="img-responsive" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/grid4.jpg"/>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <img class="img-responsive" src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/grid5.jpg"/>
        </div>
      </div>
    </div>
  <!-- GALLERY END -->
  <!--- MAP START -->

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>

  <!-- MAP END -->

<?php get_footer(); ?>
