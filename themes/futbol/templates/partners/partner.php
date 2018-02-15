<?php
	global $v;
	$link = get_post_meta($v->ID, 'f_link', true); 
	$site_link = (!empty($link)) ? $link : "#"; 
?>
<div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451">
   <a href="<?php echo $site_link; ?>" target="_blank">
	   <div class="player-article">
	        <div class="wrapper">
	            <div class="img-wrap">
	                    <img src="<?php echo ici__featured_image($v->ID,'medium') ?> " class="img-polaroid" alt="<?php echo $v->post_title; ?>" title="<?php echo $v->post_title; ?>">
	            </div>
	        </div>
	   </div>
   </a>
</div>
