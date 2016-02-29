<?php get_header(); ?>
<div id="page-content">
	<div class="marvel-device iphone4s silver">
    <div class="speaker">
    	<h1 id="logo">
			<a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?> - <?php bloginfo('description') ?>">
				<?php bloginfo('name') ?>
			</a>
		</h1>
    </div>
    <div class="screen top">
        <article class="slider">

        	<?php $args = array(
        		'post_type'     => 'texto',
        		'posts_per_page'=> 10,
				'meta_key'   => 'ratings_score',
				'orderby'    => 'meta_value_num',
				'order'      => 'DESC'
			);

			$count = 1;

 			$the_query = new WP_Query( $args );

			if ($the_query->have_posts()):

				while ($the_query->have_posts()) : $the_query->the_post() ?>

					<div class="texto">

						<a href="#" class="precedent"></a>
							
						<a href="#" class="suivant"></a>

						<a href="<?php the_permalink(); ?>" class="partage home"><img src="<?= get_template_directory_uri(); ?>/images/partage.svg" alt="bouton partage"></a>

						<div class="texto-wrapper">

							<h2 class="title"><?= the_title(); ?><span><?= $count; $count++?></span></h2>

							<?php if(get_field('message')): 

							    while(the_repeater_field('message')): ?>

									<div class="message <?php the_sub_field('position_du_message'); ?>">

										<span>

								        	<?php if(get_sub_field('position_du_message') == 'gauche'): ?>

												<?php if(get_field('personnage_de_gauche')): 

						    						while(the_repeater_field('personnage_de_gauche')): ?>
												
														<?php if(get_sub_field('type_du_personnage_de_gauche') == 'perso'): ?>

															<b><?php $perso = get_sub_field('choix_du_personnage_de_gauche'); echo $perso->post_title; ?> &agrave; </b>

														<?php elseif(get_sub_field('type_du_personnage_de_gauche') == 'custom'): ?>

															<b><?= get_sub_field('nom_du_personnage_de_gauche') ?> &agrave; </b>

														<?php endif; ?>

													<?php endwhile; ?>

												<?php endif; ?>

											<?php elseif(get_sub_field('position_du_message') == 'droite'): ?>

												<?php if(get_field('personnage_de_droite')): 

						    						while(the_repeater_field('personnage_de_droite')): ?>
												
														<?php if(get_sub_field('type_du_personnage_de_droite') == 'perso'): ?>

															<b><?php $perso = get_sub_field('choix_du_personnage_de_droite'); echo $perso->post_title; ?> &agrave; </b>

														<?php elseif(get_sub_field('type_du_personnage_de_droite') == 'custom'): ?>

															<b><?= get_sub_field('nom_du_personnage_de_droite') ?> &agrave; </b>

														<?php endif; ?>

													<?php endwhile; ?>

												<?php endif; ?>

											<?php endif; ?>

											<b><?= get_sub_field('heure')?></b>

										</span>

									   	<?php if(get_sub_field('image_de_votre_message')): ?> 
											
											<div class="img">
												<img class="visuel" src="<?php $visuel = get_sub_field('image_de_votre_message'); echo $visuel['url']; ?>" alt="echo $visuel['name'];">
											</div>

										<?php endif; ?>
										
										<?php if(get_sub_field('texte_de_votre_message')): ?>

									        <p>
										        <?php the_sub_field('texte_de_votre_message'); ?>
										    </p>

									    <?php endif; ?>

									</div>
									
							    <?php endwhile; ?>

							<?php endif; ?>

							<div class="clear"></div>


						</div>

					</div><!-- END TEXTO -->

				<?php endwhile; ?>

			<?php else: ?>
				<p>Nothing matches your query.</p>
			<?php  endif; ?>

		</article>
    </div>
    
</div>
	
</div>
<?php get_footer(); ?>
