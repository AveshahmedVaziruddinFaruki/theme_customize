<?php
/**
 * Template Name: Single Journals
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-journal
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
$contents = get_the_content($post->ID);
?>

<style>
	.cust_post_mainImage{
	background-image:url(<?php echo $image; ?>);
	width:100%;
	height:400px;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
</style>
</div>
<div class="elementor-section-wrap cust_post_mainImage">
</div>
<div class="container">
	<div class="row">
		<div class="col-sm">
			<div class="col-sm-12">
				<div class="cust_postTitle dot_line">
					<h2><?php echo $title; ?></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm">
			<div class="col-sm-12 cust_post_contents">
				<p>
					<?php echo $contents; ?>	
				</p>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
