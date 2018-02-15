<?php
	// Template Name: Partners 
	global $post;
	get_header();
	get_template_part('templates/post/breadcrumbs');
	
	$partners = new WP_Query(array(
		'post_type' => 'ic_partners',
		'status' => 'publish',
		'posts_per_page' => -1
	));
	
	if(count($partners) > 0) :
?>

<div class="tm-bottom-b-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-b" class="tm-bottom-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="our-team-main-wrap">
                                <div class="uk-container uk-container-center">
                                    <div class="uk-grid" data-uk-grid-match="">
                                        <div class="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                            <div class="our-team-wrap">
                                                <div class="our-team-title">
                                                	
                                                    <h3><?php echo the_title(); ?></h3>
                                                </div>
                                                <div class="our-team-text">
                                                	<p><?php echo the_content();?> </p>
                                                </div>
                                            </div>
                                        </div>
										
										<?php
											foreach($partners->posts as $k=>$v) : 
												get_template_part("templates/partners/partner");
											endforeach; 
										?>

                                    </div>
                                </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
</div>

<?php endif; ?>
<?php
	get_footer();
?>