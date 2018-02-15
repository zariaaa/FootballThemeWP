   <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column" style="min-height: 477px;">
        <div class="wrapper">
        	
        	
            <div class="img-wrap uk-flex-wrap-top">
                <a href="<?php echo get_the_permalink(); ?>">
                	<?php if (has_post_thumbnail( get_the_ID() ) ): ?>
                		<img src="<?php echo ici__featured_image(get_the_ID(),'medium'); ?>" class="img-polaroid" alt="<?php the_title(); ?>">
                	<?php else: ?>
                		<img src="<?php echo get_template_directory_uri();?>/images/noimg.jpg"/>
                	<?php endif; ?>
                </a>        
            </div>
            
            <div class="info uk-flex-wrap-middle">
                <div class="date">
                    <?php echo get_the_date( 'D M j' ); ?>         
                </div>
                <div class="name">
                    <h4>
                        <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>        
                    </h4>
                </div>
              
            </div>
        </div>
        <div class="article-actions uk-flex-wrap-bottom">
            <div class="count"><i class="fa fa-arrow-right" aria-hidden="true" ></i><span></span></div> 
            <div class="read-more"><a href="<?php echo get_the_permalink(); ?>"><?php _e('Още','futbol'); ?></a></div>
        </div>
    </div>
