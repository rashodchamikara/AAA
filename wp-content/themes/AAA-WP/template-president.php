<?PHP

/**
 * Template Name: President Page
 *
 * @package WordPress
 * @subpackage TetrisWP
 *
 */
get_header();
?>
<!-- Hero banner -->
<div class="hero-image">
			<img src="<?PHP echo get_field('hero_image');?>" alt="" />
			<div class="hero-title"><?PHP echo get_the_title();?></div>
		</div>
		<!-- End Hero banner -->
		<section class="about-page__history" style="background-color: #ffffff;">
			<div class="history-wrapper">
				<div class="history-wrapper__main-image">
                    <?PHP if(get_field('president_image')!=""){?>
					<img src="<?PHP echo get_field('president_image');?>" alt="" />
                    <?PHP }?>
				</div>
				<div class="history-wrapper__content">
					<div class="history-wrapper__content-title"><?PHP echo get_field('president_name');?></div>
					<div class="history-wrapper__content-des">
                        <?PHP echo get_field('president_message');?>
					</div>
				</div>
			</div>
		</section>



<?PHP get_footer(); ?>