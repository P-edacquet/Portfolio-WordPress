<?php
/*
Template Name: HomePage
*/
?>


<?php include ('header.php');?>

<?php if( have_posts() ) { ?>
    <?php while ( have_posts() ) { ?>
        <?php the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_content(); ?>
        </article>
    <?php } ?>
<?php } ?>


<?php include ('footer.php');?>