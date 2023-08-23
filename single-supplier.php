<?php
/**
 * Template Name: Single supplier
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$post = get_post();
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
$category = get_the_category( $post->ID );
$title = get_the_title($post->ID);
$subtitle = get_field('subTitle', $post->ID );
$approvedPartner = get_field('approved',$post->ID);
$Defvalues = get_field_object('approved',$post->ID);
$Defaultvalues = $Defvalues['default_value'][0];
$logo = get_field('logo',$post->ID);
$phone = get_field('phone',$post->ID);
$email = get_field('email',$post->ID);
$degree = get_field('degree',$post->ID);
$address = get_field('address',$post->ID);
$facebook = get_field('facebook',$post->ID);
$linkdin = get_field('linkdin',$post->ID);
$twitter = get_field('twitter',$post->ID);
$youtube = get_field('youtube',$post->ID);
$overview = get_field('overview',$post->ID);
//$products = get_field('products',$post->ID);//Discussion Pending
$technicalPaper = get_field('technicalPaper',$post->ID);
$videos = get_field('videos',$post->ID);
$brochures = get_field('brochures',$post->ID);
$pressRelease = get_field('pressRelease',$post->ID);


?>

<style>
	.mainImage{
		background-image:url(<?php echo $image; ?>);
		width:100%;
		height:400px;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	.subMenu{
		display:none;	
	}
	.RemoveSubmenu{
		display:none;
	}
	.logoSection{
		background-image:url(<?php echo $logo; ?>);
	}
	.logoTitle{
		margin-top:8%
	}
</style>
</div>
<div class="elementor-section-wrap mainImage">
	<div class="back_supply_icon">
		<i class="fas fa-chevron-circle-left"></i>
		<a href="/supplier-directory">Back to Directory</a>
	</div>
</div>
<div class="container">
	<div class="row logoTitle">
		<div class="col-sm">
			<div class="col-sm-3">
				<div class="logoSection">
					<img src="<?php echo $logo['url']; ?>" width=100% height=100% />
				</div>
			</div>
			<div class="col-sm-9">
				<div class="titleSection">
					<h3 class="sup_dir_title"><?php echo $title; ?></h3>
					<p class="sup_dir_subtitle"><?php echo $subtitle;?></p>
					<div class="row supp_mb_mt">
						<div class="col-sm-4 sup_dir_address">
							<div class="supp_flex">
								<p class="sup_dir_addressIcon"><img title="address" alt="address" src="/wp-content/uploads/2021/02/Frame.png" width="25px"></p><p class="sup_dir_address"><?php echo $address; ?></p>
							</div>
						</div>
						<div class="col-sm-4 sup_dir_phoneEmail">
							<div class="supp_flex">
								<p class="sup_dir_phoneIcon"><img title="phone" alt="phone" src="/wp-content/uploads/2021/02/Group-26.png" width="30px"></p><p class="sup_dir_phone"><?php echo $phone; ?></p>
							</div>
							<div class="supp_flex">
								<p class="sup_dir_emailIcon"><img title="email" alt="email" src="/wp-content/uploads/2021/02/Vector-1.png" width="25px"></p><p class="sup_dir_email"><?php echo $email; ?></p>
							</div>
							<p class="sup_dir_degree"><?php echo $degree; ?></p>
						</div>

						<div class="col-sm-4 sup_dir_socialSection">
							<div class="sup_dir_social_head">
								<h3 class="sup_dir_social_heading">Stay In Touch</h3>
							</div>
							<a href="<?php echo $facebotechnicalPapers; ?>"><img title="facebook" alt="facebook" src="/wp-content/uploads/2021/02/face_bg_whole.png" width="30px"></a> 
							<a hreh="<?php echo $linkdin ?>"><img title="linkdin" alt="linkdin" src="/wp-content/uploads/2021/02/Group-272.png" width="30px"></a>
							<a hreh="<?php echo $twitter ?>"><img title="twitter" alt="twitter" src="/wp-content/uploads/2021/02/Group-273.png" width="30px"></a>
							<a hreh="<?php echo $youtube ?>"><img title="youtube" alt="youtube" src="/wp-content/uploads/2021/02/Group-274.png" width="30px"></a>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--  tab and Inquiery form section Section -->
	<div class="row tabsSection">
		<div class="sup_dir_tabs">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#overview">Overview</a></li>
				<li><a data-toggle="tab" href="#videos">Videos</a></li>
				<li><a data-toggle="tab" href="#brochures">Brochures</a></li>
				<li><a data-toggle="tab" href="#pressRelease">Press Release</a></li>

			</ul>
		</div>

		<div calss="row tabsInquiery">
			<div class="col-sm-9 sup_p_none">
				<div class="sup_dir_tabs_details">
				<div class="tab-content">
					<div id="overview" class="tab-pane fade in active sup_dir_overview">
						<h3 class="summary">Summary</h3>
						<p class="description">
							<?php echo $overview; ?>
						</p>
						<h3 class="maphead">Find Us On Map</h3>
						<span class="mapoverview">
							<img title="youtube" alt="youtube" src="http://logistic-wp.decodeup-projects.com/wp-content/uploads/2021/02/image-46.png" width="60%">
						</span>
					</div>

					<div id="products" class="tab-pane fade  sup_dir_products">
						<h3 class="summary">Summary</h3>
						<p class="description">
							<?php echo "Discussion Pending"; ?>
						</p>

					</div>

					<div id="technicalPapers" class="tab-pane fade sup_dir_technicalPapers">
						<h3 class="summary">Summary</h3>
						<p class="description">
							<?php echo $technicalPaper; ?>
						</p>

					</div>

					<div id="videos" class="tab-pane fade sup_dir_videos">
						<!-- <h3 class="summary">Summary</h3> -->
						<p class="description">
							<?php //echo $videos; ?>

							<video width="320" height="240" controls>
							<source src="http://logistic-wp.decodeup-projects.com/wp-content/uploads/2021/03/WordPress-Tutorial_-How-to-Embed-a-YouTube-Video-in-Your-Website.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>

							<video width="320" height="240" controls>
							<source src="http://logistic-wp.decodeup-projects.com/wp-content/uploads/2021/03/WordPress-Tutorial_-How-to-Embed-a-YouTube-Video-in-Your-Website.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
							
							<video width="320" height="240" controls>
							<source src="http://logistic-wp.decodeup-projects.com/wp-content/uploads/2021/03/WordPress-Tutorial_-How-to-Embed-a-YouTube-Video-in-Your-Website.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>

							<video width="320" height="240" controls>
							<source src="http://logistic-wp.decodeup-projects.com/wp-content/uploads/2021/03/WordPress-Tutorial_-How-to-Embed-a-YouTube-Video-in-Your-Website.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						</p>

					</div>

					<div id="brochures" class="tab-pane fade sup_dir_brochures">
						<h3 class="summary">Summary</h3>
						<p class="description">
							<?php echo $brochures; ?>
						</p>

					</div>

					<div id="pressRelease" class="tab-pane fade sup_dir_pressRelease">
						<h3 class="summary">Summary</h3>
						<p class="description">
							<?php echo $pressRelease; ?>
						</p>

					</div>

				</div>
			</div>
			</div>
			<div class="col-sm-3">
				<div class="sup_dir_tabs_details_right">
				<div class="sup_dir_EnquiryFormTitle">
					<h3>
						<span class="dot_line">Send a Enquiry</span>
					</h3>
				</div>
				<div class="sup_dir_EnquiryForm">
					<p><?php echo do_shortcode('[contact-form-7 id="832" title="Contact Us"]'); ?></p>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
