<?php get_header(); ?>

    <div class="subheader page">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
            } ?>
        </div>

    </div>
    <div class="container page">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>            
        <?php the_content(); ?>
        <?php endwhile; endif; ?>

    </div>

    <div>
        
        <div class="row container">
            <h2 class="title">Veja Também</h2>
            <?php ll_related_posts() ?>
        </div>
    
    </div>
    
<?php get_footer(); ?>