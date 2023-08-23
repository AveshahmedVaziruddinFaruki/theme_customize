<?php
//Short Code : For Displaying post of supplier at supplier page

$args = array(
	'post_type' => 'Supplier',
	'post_status'  =>  'publish',
	'order'       => 'DESC',
	'posts_per_page' => -1,
);



//echo "category id is ".print_r($atts);
//print_r($atts['category_id']);
?>
<style type="text/css">
    .cstm_supplier_post {
    display: none;
}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-12 padd_rght cust_supp_div">
			<div class="row">
	<?php
		$blog = new WP_Query($args);
	while ($blog->have_posts()) : $blog->the_post();
		$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		$logo = get_field('logo',$post->ID);
		$category = get_the_category( $post->ID );
		$subtitle = get_field('subTitle', $post->ID );
		$approvedPartner = get_field('approved',$post->ID);
		$Defvalues = get_field_object('approved',$post->ID);
		$Defaultvalues = $Defvalues['default_value'][0];	
	?>
  		<div class="col-sm-3">
			<div class="cstm_supplier_post">
			<div class="supplier_post_approved">
				<p><span><?php echo (empty($approvedPartner[0])) ? $Defaultvalues : $approvedPartner[0] ; ?></span></p>
			</div>
			
			<div class="supplier_post_img">
				<div class="supplier_post_logo">
					
					<a href="<?=get_permalink(); ?>"><img src="<?=$logo['url']; ?>" alt=""></a>
				</div>
			</div>
			
			<div class="supplier_post_title">
				<div class="supplier_post_contain_title">
					<a href="<?=get_permalink(); ?>"><?php the_title(); ?></a>
				</div>
			</div>
			
			<div class="supplier_post_subtitle">
				<p><?php echo $subtitle; ?></p>
			</div>
			
			<div class="supplier_post_content">
				<p><?php echo wp_trim_words( get_the_content(), 20 ); ?></p>
			</div>
			
			<div class="supplier_readMoreLink">
				<a href="<?=get_permalink(); ?>"><button>Read More</button></a>
			</div>
 			<!--<div class="supplier_post_date">
				<span><?php //the_time('d, M Y ') ?></span>
			</div> -->
			<!--<div class="supplier_post_category">
				<span><?php //echo $category[0]->cat_name; ?></span>
			</div> -->
		</div>
		</div>
	  <?php
 	endwhile;
	wp_reset_postdata();
?>	
		</div>
	</div>
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
    jQuery(".cstm_supplier_post").slice(0,16).show();
      
	jQuery("#loadMoreSupplier").click(function(e){
        e.preventDefault();
        jQuery(".cstm_supplier_post:hidden").slice(0,16).fadeIn("slow");

        if(jQuery(".cstm_supplier_post:hidden").length == 0){
           jQuery("#loadMoreSupplier").fadeOut("slow");
       }
   });
  })
</script>
