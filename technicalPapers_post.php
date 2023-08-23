<?php
// ShortCode : Technical Papers Slider at Home Page
$args = array(
	'post_type' => 'technicalpapers',
	'post_status'  =>  'publish',
	'order'       => 'DESC',
	'posts_per_page' => -1
);
$get_author_id = get_the_author_meta('ID');
$get_author_gravatar = get_avatar_url($get_author_id, array('size' => 25));
?>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" rel="stylesheet" />

<div class="container">
	<div class="row">
		<div class="col-md-12 test_padd">
			<div class="row">
				<div id="owl-demo">
					<?php
					$blog = new WP_Query($args);
					//echo "<pre>";
					//print_r($blog);
					while ($blog->have_posts()) : $blog->the_post();
						$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						$category = get_the_category( $post->ID );	
						?>
						<div class="item">		
							<div class="col-sm-12">
								<div class="cstm_technicalpapers_post">
									<div class="technicalpapers_post_img">
										<div class="technicalpapers_post__feature">
											<a href="<?=get_permalink(); ?>"><img src="<?=$image; ?>" alt=""></a>
										</div>
									</div>
									<div class="testi_text">
									<div class="technicalpapers_post_title">
										<div class="technicalpapers_post_contain_title">
											<a href="<?=get_permalink(); ?>"><?php the_title(); ?></a>
										</div>
									</div>
									<div class="technicalpapers_post_content">
										<p><?php echo wp_trim_words( get_the_content(), 20 ); ?><a href="<?=get_permalink(); ?>">Read more ... </a></p>
									</div>
									<div class="test_author_dtae">
									<div class="technicalpapers_auth_imgName">
										<p class="author_img">
											<img src="<?php echo $get_author_gravatar ?>"/>
										</p>
										<p class="author_name">
											<?=get_the_author(); ?>
										</p>
									</div>
									<div class="technicalpapers_post_date">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
										<span><?php the_time('d, M Y ') ?></span>
									</div>
								</div>
							</div>
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
</div>	


<script>
	$(document).ready(function() {
		$("#owl-demo").owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    items: 3,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [979, 3]

});

	});
</script>