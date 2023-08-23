<?php
//Short Code : For Displaying Latest News Section at Home Page
$args = array(
	'post_type' => 'journals',
	'post_status'  =>  'publish',
	'order'       => 'DESC',
	'posts_per_page' => -1
);
?>
<style type="text/css">
    .cstm_main_blog_page {
    display: none;
}
</style>
<div class="container latest_post_main_container latest_news_txt">
	<div class="row">
		<div class="col-sm-10 post_late_padd">
	<div class="row">
	<?php
		$blog = new WP_Query($args);
	while ($blog->have_posts()) : $blog->the_post();
		$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		$category = get_the_category( $post->ID );
	?>
  		<div class="col-sm-4 cstm_main_blog_page post_late_padd">
			<div class="news_post_img">
				<div class="news_post__feature">
					<a href="<?=get_permalink(); ?>"><img src="<?=$image; ?>" alt=""></a>
				</div>
				<!-- <div class="news_post_category">
					<span><?php //echo $category[0]->cat_name; ?></span>
				</div> -->
			</div>
			<div class="news_post_title">
				<div class="news_post_contain_title">
					<a href="<?=get_permalink(); ?>"><?php the_title(); ?></a>
				</div>
			</div>
			<div class="news_post_content">
				<p><?php echo wp_trim_words( get_the_content(), 20 ); ?>
					<a href="<?=get_permalink(); ?>">Read more... </a>
				</p>
			</div>
			<div class="new_post_authDate">
				<div class="new_post_authorname">
					<p class="author_name">
						<?=get_the_author(); ?>
					</p>
				</div>
				<div class="news_post_date">
					<i class="fa fa-clock-o" aria-hidden="true"></i>
					<span><?php the_time('d, M Y ') ?></span>
				</div>
			</div>
		</div>
	  <?php
 	endwhile;
	wp_reset_postdata();
?>	
		</div>
		</div>
	</div>
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
    jQuery(".cstm_main_blog_page").slice(0,6).show();
      
	jQuery("#loadMore").click(function(e){
        e.preventDefault();
        jQuery(".cstm_main_blog_page:hidden").slice(0,6).fadeIn("slow");

        if(jQuery(".cstm_main_blog_page:hidden").length == 0){
           jQuery("#loadMore").fadeOut("slow");
       }
   });
  })
</script>
