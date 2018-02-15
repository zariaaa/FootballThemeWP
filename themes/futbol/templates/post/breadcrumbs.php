<?php
	global $post;
	if(is_page()) {
		$page_title = $post->post_title;
	}
	else {
		$page_info = get_post(get_option( 'page_for_posts' ));
		$page_title = (is_single()) ? $post->post_title : $page_info->post_title;
	}
?>
<div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
    <div class="uk-container uk-container-center">
        <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
            <div class="uk-width-1-1 uk-row-first">
                <div class="uk-panel">
                    <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('<?php echo get_template_directory_uri();?>/images/head-bg.jpg');">
                        <img class="uk-invisible" src="images/head-bg.jpg" alt="" height="290" width="1920">
                        <div class="uk-position-cover uk-flex uk-flex-center head-title">
                            <h1>
                            	<?php echo $page_title; ?>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<div class="uk-container uk-container-center alt">
	<ul class="uk-breadcrumb">
	    <li><a href="<?php echo esc_url( home_url() ); ?>">Начало</a></li>
	    
	    <?php if(is_single()) { ?>
	    	<li><a href="<?php echo esc_url( get_the_permalink($page_info->ID) ); ?>"><?php echo get_the_title($page_info->ID); ?></a></li>
	    <?php }  ?>
	    
	    <li class="uk-active"><span><?php echo $page_title; ?></span></li>
	</ul>
</div>