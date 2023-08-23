<?php
// Short Code : For Displaying 4 Post type at Home Page
$args = array(
	'post_type' => 'technicalpapers',
	'post_status'  =>  'publish',
	'order'       => 'DESC',
	'posts_per_page' => 4
);
?>
<div class="container">
	<div class="row">
	<?php
		$count = 1;
		$divcount = 1;
		$blog = new WP_Query($args);
while ($blog->have_posts()) : $blog->the_post();
		$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		//$category = get_the_category( $post->ID );
		$category = get_the_terms( $post->ID, 'Technical_Category' );
		//echo "<pre>";
		//print_r($category);
	?>
  
	  <?php if($count==1){ ?>
		<div class="col-sm-4 forth_blog">
			<div class="blog_post_img">
				<div class="blog_img_feature">
					<a href="<?=get_permalink(); ?>"><img src="<?=$image; ?>" alt=""></a>
				</div>
			</div>
			<div class="blog_post_titleDate">
				<div class="blog_post_title">
					<div class="blog_contain_title">
						<a href="<?=get_permalink(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
				<div class="blog_date">
						<i class="fa fa-clock-o" aria-hidden="true"></i><span><?php the_time('d, M Y ') ?></span>
				</div>
			</div>
			<div class="blog_category">
				
				<span><?php
				//echo $category->term_id;
				 //$childTerms = get_terms(['taxonomy' => "Technical_Category", 'orderby' => 'term_id', 'parent' => $category->term_id, 'hide_empty' => false]);
				 //echo "<pre>";
				 //print_r($childTerms);
				//echo $category[0]->cat_name; 
				//echo $category[0]->name;
				?></span>
			</div>
		</div>
	  <?php } ?>
		<?php if($divcount == 2){
		?>
		<div class="col-sm-8 eigth_blog">
				<div class="col">
					<div class="blog_post_img">
						<div class="blog_img_feature">
							<a href="<?=get_permalink(); ?>"><img src="<?=$image; ?>" alt=""></a>
						</div>
					</div>
					<div class="blog_post_titleDate">
						<div class="blog_post_title">
							<div class="blog_contain_title">
								<a href="<?=get_permalink(); ?>"><?php the_title(); ?></a>
							</div>
						</div>
						<div class="blog_date">
							<i class="fa fa-clock-o" aria-hidden="true"></i><span><?php the_time('d, M Y ') ?></span>
						</div>
					</div>
					<div class="blog_category">
						<span><?php echo $category[0]->cat_name; ?></span>
					</div>
				</div>
		<?php } ?>
		
	  <?php if($count==3 || $count==4){ ?>
		<div class="col-sm-6 sixth_blog">
			<div class="blog_post_img">
				<div class="blog_img_feature">
					<a href="<?=get_permalink(); ?>"><img src="<?=$image; ?>" alt=""></a>
				</div>
			</div>
			<div class="blog_post_titleDate">
				<div class="blog_post_title">
					<div class="blog_contain_title">
						<a href="<?=get_permalink(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
				<div class="blog_date">
					<i class="fa fa-clock-o" aria-hidden="true"></i><span><?php the_time('d, M Y ') ?></span>
				</div>
			</div>
			<div class="blog_category">
				<span><?php echo $category[0]->cat_name; ?></span>
			</div>
		</div>
	  	<?php } ?>
		<?php if($divcount == 4){ ?>	
		</div>	
		<?php } ?>	
  
<?php
	  $count++;
		$divcount++;
 endwhile;
	wp_reset_postdata();
?>	
	</div>
</div>
