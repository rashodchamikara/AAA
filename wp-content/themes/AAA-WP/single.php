<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<div class="hero-image">
	<img src="<?PHP echo get_template_directory_uri();?>/images/news-event.png" alt="">
	<div class="hero-title">
		<?PHP 
		$cat_info = get_the_category();
		echo $cat_info[0]->name;?>
	</div>
</div>
<div class="section-single-news">
	<div class="news-wrapper-single">
		<div class="news-content-single">
			<h3 class="news-title"><?PHP the_title();?></h3>
			<div class="news-meta">
				<div class="author">By <?PHP echo get_the_author();?></div>
				<div class="date"><?php echo get_the_date(); ?></div>
			</div>
			<img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'full')); ?>" alt="" />
			<?PHP the_content();?>
		</div>
		<div class="tags-single-news">
			<div class="popular-content">
				<?PHP 
				$category = get_queried_object();
				$allCourses = new WP_Query(array(
					'posts_per_page' => 10,
					'cat' => $cat_info[0]->term_id
					));
					while($allCourses->have_posts()){
						$allCourses->the_post(); 	
				?>
				<div class="popular-content__item">
					<img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'post-thumbnail')); ?>" alt="" />
					<div class="popular-content__item-des">
						<h4><a href="<?php the_permalink(); ?>"><?PHP the_title();?></a></h4>
						<span><?php echo get_the_date(); ?></span>
					</div>
				</div>
				<?PHP }?>
			</div>
		</div>
	</div>
</div>
<?PHP
get_footer();
