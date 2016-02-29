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
    <div class="screen <?php $category = get_the_category(); echo $category[0]->slug;?>">
        <article class="slider">
			<?php if (have_posts()):
				while (have_posts()) : the_post() ?>

					<div class="texto">
						
						<a href="/category/<?php $category = get_the_category(); echo $category[0]->slug;?>" class="category camera"><img src="<?= get_template_directory_uri(); ?>/images/back.svg" alt="bouton unlike"></a>
						<a href="#" class="facebook home right"><div class="fb-share-button" data-href="<?php echo get_permalink( $post->ID ); ?>" data-layout="button"></div><img src="<?= get_template_directory_uri(); ?>/images/partage-fb.svg" alt="bouton unlike"></a>
    					<div class="facebook home left"><div class="fb-like" data-layout="button" data-href="<?php echo get_permalink( $post->ID ); ?>"></div><img src="<?= get_template_directory_uri(); ?>/images/like-fb.svg" alt="bouton like facebook"></div>

						<a href="#" class="commentaire home show-comments"><img src="<?= get_template_directory_uri(); ?>/images/commentaire.svg" alt="bouton commentaire"></a>
						
						<div class="texto-wrapper">

							<div class="comments-wrapper hidden">
							
								<div class="comments">
									
									<div class="form hidden">
										<?php

										$commenter = wp_get_current_commenter();
										$req = get_option( 'require_name_email' );
										$aria_req = ( $req ? " aria-required='true'" : '' );

											$fields =  array(

															'author' =>
																'<div class="input-wrap text"><p class="comment-form-author"><label for="author">' . __( 'Nom', 'domainreference' ) . '</label> ' .
															    ( $req ? '<span class="required">*</span>' : '' ) .
															    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
															    '" size="30"' . $aria_req . ' /></p></div>',

															'email' =>
															    '<div class="input-wrap text"><p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
															    ( $req ? '<span class="required">*</span>' : '' ) .
															    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
															    '" size="30"' . $aria_req . ' /></p></div>',
															);

											$comments_args = array(
									      
									        'label_submit'=>'COMMENTER',
									        'title_reply'=>'',
									        'comment_notes' => '',
									        'comment_notes_before' => '',
									        'comment_notes_after' => '',
									        'comment_field' => '<div class="input-wrap text"><p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' . '</textarea></p></div>',
									        'fields' => $fields
									        
											);

											comment_form($comments_args); 
										?>
									</div>
									

									<a href="#" class="show-form normal">+</a>

									<h3 class="title">Commentaires :</h3>

									<?php
										$post_id = get_the_ID();

										$args = array(
											'status' => 'approve',
											'post_id' => $post_id,
											'order' => 'DESC'
										);

										// The Query
										$comments_query = new WP_Comment_Query;
										$comments = $comments_query->query( $args );

										if ($comments) {
											
											foreach($comments as $comment) :
											?>
											
												<p class="comment"><?=($comment->comment_content); ?></p>
												<p class="comment-author"><span><?=($comment->comment_author); ?></span>, le <?=  comment_date('j-n-Y');  ?></p>

											<?php
											endforeach;

										}else{
											?>

											<p class="comment">AUCUN COMMENTAIRE ... :'(</p>

											<?php
										}
									?>


								</div>

							</div>

							<h2 class="title"><?= the_title(); ?></h2>
							

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
