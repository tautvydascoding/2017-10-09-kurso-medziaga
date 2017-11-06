


<?php
    get_header(); // include('./header.php');
 ?>

     <h1>Mano Home</h1>
<?php
    // ar turime Straipsniu
    if( have_posts() ) :
        while ( have_posts()) :
            the_post();
             ?>
             <h2> <?php the_title(); ?> </h2>
             <p>
                 <?php the_content(); ?>
             </p>
             <p>
                 <?php the_date(); ?>
             </p>
             <?php
        endwhile;
    endif;


    get_footer(); // include('./footer.php');
 ?>
