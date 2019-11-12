<?php get_header(); ?>

<?php

  if (have_posts()) :
    while (have_posts()) :the_post(); ?>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <?php endwhile;

    else :
      echo '<p>No Content found</p>';

    endif;
    ?>

    <table>
      <tr>
        <th>Expense</th>
        <th>Cost</th>
      </tr>
      <tr>
        <td>Flight</td>
        <td>£30</td>
      </tr>
      <tr>
        <td>Hotel</td>
        <td>£80</td>
      </tr>
      <tr>
        <td>Vietnamese Restaurant</td>
        <td>£15</td>
      </tr>
    </table>

<?php get_footer(); ?>
