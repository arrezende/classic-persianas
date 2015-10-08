	<?php global $classic_opcoes_tema; ?>
	<footer>	
		<div class="container">
			<div class="col-4">
			<img src="<?php bloginfo('template_url'); ?>/imgs/logo-classic-persianas.png" alt="Classic Persianas" />
			<?php if ( is_active_sidebar( '1-widget-area' ) ) : ?>
			<?php dynamic_sidebar( '1-widget-area' ); ?>
			<?php endif; ?>
			</div>

			<div class="col-4">
				<?php if ( is_active_sidebar( '2-widget-area' ) ) : ?>
			    <?php dynamic_sidebar( '2-widget-area' ); ?>
			    <?php endif; ?>
			</div>

			<div class="col-4">
				<?php if ( is_active_sidebar( '3-widget-area' ) ) { ?>
				<?php dynamic_sidebar( '3-widget-area' ); ?>
				<?php } else{ ?>
				<strong class="title">Lorem Ipsum</strong>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
				<?php }; ?>
			</div>	

			<div class="col-4">
				<?php if ( is_active_sidebar( '4-widget-area' ) ) { ?>
				<?php dynamic_sidebar( '4-widget-area' ); ?>
				<?php } else{ ?>
				<strong class="title">Contato</strong>
				<ul>
					<li>Tel.(11)5523-4598 / 5524-3001</li>
					<li>Rua João Alphonsus, 183 – Santo Amaro</li>
					<li>São Paulo – SP</li>
					<li>CEP: 04754-040</li>
					<li>contato@classicpersianas.com.br</li>
				</ul>
				<?php }; ?>

			</div>

		</div>
		<div class="copy container">
			<?php 
				if ( classic_chk( $classic_opcoes_tema, 'rodape' ) ) {
					echo classic_chk( $classic_opcoes_tema, 'rodape');
				} else {
					echo '© Copyright 2014. Classic Persianas';
				}
			?>
			
		</div>
		
	</footer>

<a href="#" id="toTop"><i class="fa fa-angle-up"></i></a>	
<?php wp_footer(); ?>
</body>
</html>