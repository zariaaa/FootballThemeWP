<?php
	get_header();
	get_template_part('templates/post/breadcrumbs');
?>


<div class="uk-container uk-container-center">
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div class="tm-main uk-width-medium-3-4 uk-push-1-4" style="min-height: 1611px;">
                    <div class="contentpaneopen">
                       <main id="tm-content" class="tm-content">
                            <div class="uk-grid" data-uk-grid-match="">
                            	<?php
	                            	while(have_posts()){
	                            		the_post();
										get_template_part('templates/post/article');									
									}
									
									
								?>
                             </div>
                             
                             
                            <div class="pagination">
                            	<?php
                            		the_posts_pagination( array(
										'prev_text' => '<span> << </span>',
										'next_text' => '<span> >> </span>',
										'screen_reader_text' => '&nbps'
									) );
                            	?>
                            </div>
                            <div class="clearfix"></div>
                            
                        </main>
                    </div>
                </div>
                <?php get_sidebar(); ?>
              </div>
        </div>

<?php
	get_footer();
	
