<?php include ('header.php');?>

<?php if( have_posts() ) { ?>
    <?php while ( have_posts() ) { ?>
        <?php the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        </article>
    <?php } ?>
<?php } ?>

<?php include ('footer.php');?>