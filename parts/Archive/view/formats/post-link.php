<?php
	global $TheChameleon; 	
	global $TheChameleonTermOption;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col100 post-loop'); ?> itemscope itemtype="http://schema.org/Article">
	
<!-- Post Content -->
<section class="col100 post-content post-content-loop post-content-no-title-loop">
	<?php if ( has_post_thumbnail() ) : ?>	
		<figure class="post-media post-media-standard post-media-loop post-media-standard-loop alignleft">				
			<?php echo $TheChameleon->get_post_featured_media(  $post->ID, 'standard', array() ); ?>
		</figure>
	<?php endif; 

	$get_post_meta = get_post_meta( get_the_ID(), 'the_chameleon_meta', TRUE );		
	$link 	   = ! empty( $get_post_meta['link'] ) ? $get_post_meta['link'] : ''; ?>

	<a href="<?php echo $link ?>" target="_blank"><strong><?php echo get_the_title() ?></strong></a><br />
	
	<?php the_content(); ?>
	
	<!-- Post Tags -->
	<span itemprop="keywords"><?php echo get_the_term_list( $post->ID, 'post_tag', '<i class="fa fa-tags"></i> ', ', ', '' ); ?></span>
</section>

</article>