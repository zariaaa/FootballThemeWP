 <?php
	global $v;
	$f_number = get_post_meta($v->ID, 'f_number', true);
	$f_position = get_post_meta($v->ID, 'f_position', true); 
?>
 
 
 <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451" style="min-height: 398px;">
    <div class="player-article">
        <div class="wrapper">
            <div class="img-wrap">
            	<?php if(!empty($f_number)){ ?>
                <div class="player-number">
                	<span><?php echo $f_number; ?></span>
                </div>
				<?php } ?>
                <a href="#">
                	<img src="<?php echo ici__featured_image($v->ID,'big') ?> " class="img-polaroid" alt="<?php echo $v->post_title; ?>" title="<?php echo $v->post_title; ?>">
                </a>
               
            </div>
            <div class="info">
                <div class="name">
                    <h3>
                        <a href="#"><?php echo $v->post_title; ?> </a>
                    </h3>
                </div>
                <?php if(!empty($f_position)){ ?>
                <div class="position"><?php echo choise_position($f_position); ?> </div>
                <?php } ?>
            </div>
        </div>
    </div>
	</div>
	