<article>
<div class="clearfix"></div>
<div class="article-slider">
    <div id="carusel-11-30" class="uk-slidenav-position" data-uk-slideshow="{ height : 510 }">
        <ul class="uk-slideshow" style="height: 510px;">
            <li aria-hidden="false" class="uk-active" style="height: 510px; animation-duration: 500ms;"><div class="uk-cover-background uk-position-cover" style="background-image: url(&quot;images/slider/1448409600_2412ac1f15197bfe93d67bdd259afc94.jpg&quot;);"></div>
                <img style="width: 100%; height: auto; opacity: 0;" src="<?php echo ici__featured_image(get_the_ID(),'full'); ?>" alt="">
            </li>
            
        </ul>
        
    </div>
</div>
<div class="article-param">
    <div class="date">
        <i class="uk-icon-calendar"></i>
        <?php echo get_the_date( 'D M j' ); ?>             
    </div>
    
</div>
<div class="article-single-text">
	<p><?php the_content();?></p>
</div>
<?php get_template_part('templates/post/share'); ?>
</article>
