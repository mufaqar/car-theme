<?php /*  Template Name:  Search */

get_header();



if (isset($_REQUEST['brand'])) {
    $brand = $_REQUEST['brand'];
}
if (isset($_REQUEST['body_type'])) {
    $body_type= $_REQUEST['body_type'];
}
if (isset($_REQUEST['color'])) {
    $color = $_REQUEST['color'];
}
if (isset($_REQUEST['engine_type'])) {
    $engine_type = $_REQUEST['engine_type'];
}


if (isset($_REQUEST['transmission'])) {
    $transmission = $_REQUEST['transmission'];
}

$tax_query = array('relation' => 'AND');
    if (!empty($brand))
    {
        $tax_query[] =  array(
                'taxonomy' => 'brand',
                'field' => 'slug',
                'terms' => $brand
            );
    }
    if (!empty($body_type))
    {
        $tax_query[] =  array(
                'taxonomy' => 'body_type',
                'field' => 'slug',
                'terms' => $body_type
            );
    }
  
    if (!empty($color))
    {
        $tax_query[] =  array(
                'taxonomy' => 'color',
                'field' => 'slug',
                'terms' => $color
            );
    }
	if (!empty($engine_type))
    {
        $tax_query[] =  array(
                'taxonomy' => 'engine_type',
                'field' => 'slug',
                'terms' => $engine_type
            );
    }

    if (!empty($transmission))
    {
        $tax_query[] =  array(
                'taxonomy' => 'transmission',
                'field' => 'slug',
                'terms' => $transmission
            );
    }

  
  

  
?>

<section class="search_header container mx-auto">
    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/logo.svg"
            alt="logo" /></a>
</section>
<section class="container row mx-auto search">
    <?php 
    
     
    get_sidebar()?>
    <div class="col-md-9 listing">

        <?php query_posts(array(
            'post_type' => 'vehicle',
            'posts_per_page' => -1,
            'order' => 'desc',
            'tax_query' => $tax_query	
            
        )); 
        if (have_posts()) :  while (have_posts()) : the_post();  
                 get_template_part( 'template-parts/vehicle', 'card' ); endwhile; wp_reset_query(); else : ?>
        <h2><?php _e('Nothing Found','lbt_translate'); ?></h2>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>