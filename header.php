<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.cycle.min.js"></script>
<?php wp_head(); ?>
<!-- inicio do analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39022276-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- fim -->
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?2AR4IH3ImXal9DgGIIOw9J865dvqcbKr';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
</head>

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php flush(); ?>
<body>
<?php if(is_page( 'obrigado' )){?>
<!-- Google Code for LS-Contato Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1001028942;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "TatgCNqvvQQQzvqp3QM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1001028942/?label=TatgCNqvvQQQzvqp3QM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Fim Adwords -->
<?php } ?>
<?php global $classic_opcoes_tema; ?>
<header>
		<div class="container">
			<a href="<?php echo home_url(); ?>/">
			<figure class="float-left">
				<?php 
				if ( classic_chk( $classic_opcoes_tema, 'logo' ) ) {
				    echo '<img src="' . classic_chk( $classic_opcoes_tema, 'logo') . '" alt="Classic Persianas">';
				} else{
					?>
					<img src="<?php bloginfo('template_url'); ?>/imgs/logo-classic-persianas-preto.png" alt="Classic Persianas" />
					<?php
				}
				?>
			
			</figure>
			</a>
			<nav class="float-right">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</nav>
		</div>
	</header>
				
	<!--CONTAINER-->
	