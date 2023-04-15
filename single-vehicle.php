<?php get_header(); ?>
<?php if (have_posts()):while (have_posts()):	the_post();

if ( has_term( 'rental', 'vehicle_type' ) ) {
    echo "Rental";
    get_template_part( 'template-parts/single', 'rent' );

} else {
  get_template_part( 'template-parts/single', 'leasing' );
}




?>

<?php endwhile; endif; ?>
<?php get_footer(); ?>