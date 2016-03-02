<?php get_header(); ?>
<div id="page-content">
<div id="device-container">
	<div class="marvel-device iphone4s silver">
		
	    <div class="speaker">
	    	<h1 id="logo">
				<a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?> - <?php bloginfo('description') ?>">
					<?php bloginfo('name') ?>
				</a>
			</h1>
	    </div>

	    <div class="screen">
	    	<a href="<?php the_permalink(); ?>" class="partage home"><img src="<?= get_template_directory_uri(); ?>/images/partage.svg" alt="bouton partage"></a>
	    </div>
    
	</div>
</div>
</div>
<?php get_footer(); ?>
