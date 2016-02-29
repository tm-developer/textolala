<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes() ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes() ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes() ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes() ?>><!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title>TextOlala <?php wp_title( '|', true, 'left' ) ?></title>
		<meta name="author" content="">
		<link rel="author" href="">
		<?php wp_head() ?>
    </head>
    <body <?php body_class() ?> id="<?php $category = get_the_category(); echo $category[0]->slug; if (is_page('top')) { echo "top"; }elseif (is_page('hasard')) { echo "hasard"; }?>">
    	<div class="loader <?php $category = get_the_category(); echo $category[0]->slug; if (is_page('top')) { echo "top"; }elseif (is_page('hasard')) { echo "hasard"; }?>">
    		
    	</div>
    	
    	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<header id="page-header">
			<nav>
				<a href="#" class="menu-button mobile"></a>
				<ul>
					<li><a href="/category/romantiques" class=" romantiques <?php if (is_category('romantiques')) echo 'active'; ?>"><span>Les Romantiques</span></a></li>
					<li><a href="/category/punchlines" class="punchlines <?php if (is_category('punchlines')) echo 'active'; ?>"><span>Les Punchlines</span></a></li>
					<li><a href="/category/fails" class="fails <?php if (is_category('fails')) echo 'active'; ?>"><span>Les Fails</span></a></li>
					<li><a href="/category/sextos" class="sextos <?php if (is_category('sextos')) echo 'active'; ?>"><span>Les Sextos</span></a></li>
					<li><a href="/category/fais-moi-rire" class="fais-moi-rire <?php if (is_category('fais-moi-rire')) echo 'active'; ?>"><span>Fais moi Rire</span></a></li>
					<li><a href="/top" class="top <?php if (is_page('top')) echo 'active'; ?>"><span>Le Top</span></a></li>
					<li><a href="/hasard" class="random <?php if (is_page('hasard')) echo 'active'; ?>"><span>Au Hasard</span></a></li>
					<li><a href="/category/adultes" class="adultes <?php if (is_category('adultes')) echo 'active'; ?>"><span>18 +</span></a></li>
				</ul>
			</nav>
		</header>

		<div class="pop-up <?php $category = get_the_category(); echo $category[0]->slug; if (is_page('top')) { echo "top"; }elseif (is_page('hasard')) { echo "hasard"; }?>">
			<a href="" class="cross"></a>
			<?php echo do_shortcode('[contact-form-7 id="4" title="Formulaire de contact 1"]'); ?>
		</div>

		<a href="#" class="open-pop-up"></a>

		<div id="content-wrapper">
