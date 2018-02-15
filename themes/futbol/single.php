<?php 
	get_header();
	get_template_part('templates/post/breadcrumbs');
	
?>

<div class="uk-container uk-container-center">
<div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
	<?php 
	if(have_posts()){
		while(have_posts()){
			the_post();
	?>
	
    <div class="tm-main uk-width-medium-3-4 uk-push-1-4">
        <main id="tm-content" class="tm-content">
            <div class="contentpaneopen">
            	<?php get_template_part('templates/post/single-content');?>   
           	</div>
   		</main>
    </div>
    <?php } } ?>
    
    <?php get_sidebar(); ?>
</div>
</div>

<?php 

get_footer(); ?>
