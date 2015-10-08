<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>

	<div class="subheader" itemscope="" itemtype="http://schema.org/HomeAndConstructionBusiness">
		<div class="container">
			<span>Ligue para nós: <a href="tel:55234598" itemprop="telephone" style="color:#FFF">(11)5523-4598</a>/<a href="tel:55243001" itemprop="telephone" style="color:#FFF">(11) 5524-3001</a></span>
			<span>contato@classicpersianas.com.br</span>
		</div>
	</div>
	<div class="banner container cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-timeout="2000" data-cycle-slides="> div" data-cycle-prev=".prevControl"  data-cycle-next=".nextControl">
		<?php 
				$args = array( 'post_type' => 'banner', 'posts_per_page' => 4 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<div>
					<?php the_post_thumbnail() ?>
					
						<div class="banner-txt">
							<strong><?php the_title(); ?></strong>
							<p><?php echo get_the_box_excerpt(); ?>[...]</p>
							<a href="<?php the_permalink()?>" class="btn">Confira</a>
						</div>
					
				</div>
				<?php

				endwhile;

			?>
			<ul class="flex-direction-nav"><li><a class="flex-prev prevControl" href="#"><</a></li><li><a class="flex-next nextControl" href="#">></a></li></ul>
		
	</div>

	<div>
		<div class="row container">
			<h1 class="title">Cortinas</h1>
			<a href="/cortina/" class="veja-todas">Veja todas as Cortinas →</a>
			<?php 
				$args = array( 'post_type' => 'cortinas', 'posts_per_page' => 4 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<div class="box-mini">
					<a href="<?php the_permalink()?>"><?php the_post_thumbnail() ?></a>
					<a href="<?php the_permalink()?>"><strong><?php the_title(); ?></strong></a>
					<p><a href="<?php the_permalink()?>"><?php echo get_the_box_excerpt(); ?>[...]</a></p>
				</div>
				<?php
				endwhile;
			?>
		</div>
		
		<div class="row container">
			<h2 class="title">Persianas</h2>
			<a href="/persiana/" class="veja-todas">Veja todas as Persianas →</a>
			<?php 
				$args = array( 'post_type' => 'persianas', 'posts_per_page' => 4 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				?>
				<div class="box-mini">
					<a href="<?php the_permalink()?>"><?php the_post_thumbnail() ?></a>
					<a href="<?php the_permalink()?>"><strong><?php the_title(); ?></strong></a>
					<p><a href="<?php the_permalink()?>"><?php echo get_the_box_excerpt(); ?>[...]</a></p>
				</div>
				<?php
				endwhile;
			?>
		</div>
	
	</div>
	
<?php get_footer(); ?>