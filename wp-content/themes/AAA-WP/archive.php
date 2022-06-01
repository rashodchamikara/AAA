<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage AAA-WP
 * @since AAA-WP
 */

get_header();

?>
<div class="hero-image">
	<img src="<?PHP echo get_template_directory_uri();?>/images/news-event.png" alt="">
	<div class="hero-title">
		<?PHP echo get_the_archive_title();?>
	</div>
</div>
<section class="news-events">
<div class="new-event__title"></div>
	<div class="news-event__wrapper">
		<div class="news__events">
		<?PHP
            while ( have_posts() ) : the_post();
            ?>
			<a href="<?php the_permalink(); ?>">
					<div class="news-event__card">
						<img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'full')); ?>" alt="" />
						<div class="news-event-title"><?PHP the_title();?></div>
						<div class="news-event__des">
							<?PHP echo get_the_excerpt();?>
						</div>
					</div>
				</a>
			<?PHP  endwhile;?>
		  <?PHP $template_dir =  get_template_directory_uri(); ?>
          <?PHP $args = array(
            'prev_text'          => __('<i class="fa fa-caret-left p-arrow"></i>'),
            'next_text'          => __('<i class="fa fa-caret-right p-arrow-two"></i>'),
            'type'               => 'array',
            'screen_reader_text' => 'a'
           );
            $paginetaion =get_the_posts_pagination($args);
            $paginetaion = str_replace('<h2 class="screen-reader-text">a</h2>', '', $paginetaion);
            echo $paginetaion;
           ?>
		</div>
		
		<div class="recent-post__wrapper">
			<div class="recent-post__title">Recent posts</div>
			<div class="recent__posts">
				<?PHP 
					$category = get_queried_object();
					$allCourses = new WP_Query(array(
						'posts_per_page' => 10,
						'cat' => $category->term_id
					  ));
					  while($allCourses->have_posts()){
						 $allCourses->the_post(); 	
					?>
					<div class="recent-post__item"><a href="<?php the_permalink(); ?>"><?PHP the_title();?></a></div>
					<?PHP }?>
				

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
