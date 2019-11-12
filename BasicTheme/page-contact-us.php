<?php
/* Template Name: Contact Us */
$name = $_POST['name'];
$from = $_POST['email'];
$message = $_POST['message'];
$subject = "Received Mail from '$name'";
$to = "isabellvalente@hotmail.co.uk";

?>


<?php get_header(); ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header>
            <h1 class="entry-title"><<?php the_title(); ?></h1>
          </header>
          <div class="entry-content">
              <
            <div class="container">
              <div class="row">
                  <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-contact my-5">
                      <div class="card-body" id="respond">
                        <h5 class="card-title text-center">Get in Touch</h5>
                        <form class="form-contact" action="<?php the_permalink(); ?>" method="post">
                          <div class="form-label-group">
                            <label for="name">Name</label> <span>*</span>
                            <input type="text" name="name" id="name" class="form-control" >
                          </div>
                          <div class="form-label-group">
                            <label for="email">Email address</label>
                            <input type="email" id="email" class="form-control">
                          </div>
                          <div class="form-label-group">
                            <label for="Message">Message</label>
                            <textarea type="text" class="form-control" rows="5"></textarea>
                          </div>
                          <button type="submit" name="submit" class="btn">Send</button>
                          <?php if (isset($_POST['submit'])) {
                            if (mail($to, $subject, $message )) {
                              echo "Success";
                            }
                            else {
                              echo "Failed to send email";
                            }
                          } ?>

                        </form>
                      </div>
                    </div>
            </article>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

<?php get_footer(); ?>
