<?PHP

/**
 * Template Name: About Page
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
		<section class="about-page__history">
			<div class="history-wrapper">
				<div class="history-wrapper__main-image">
                    <?PHP if(get_field('sub_section_image')!=""){?>
					<img src="<?PHP echo get_field('sub_section_image');?>" alt="" />
                    <?PHP }?>
				</div>
				<div class="history-wrapper__content">
					<div class="history-wrapper__content-title"><?PHP echo get_field('sub_heading_text');?></div>
					<div class="history-wrapper__content-des">
                        <?PHP echo get_field('sub_heading_long_text');?>
					</div>
				</div>
			</div>
		</section>

		<section class="vision-mission">
			<div class="vision-mission__wrapper">
            <?PHP if (have_rows('multi_section')) { 
                     while (have_rows('multi_section')) : the_row(); ?>
				<div class="section-item">
					<img src="<?PHP echo get_sub_field('section_icon'); ?>" alt="" />
					<div class="section-item__title"><?PHP echo get_sub_field('section_title'); ?></div>
					<div class="section-vision__des">
                        <?PHP echo get_sub_field('section_text'); ?>
					</div>
				</div>
			<?PHP 
                endwhile;
            }
            ?>
			</div>
		</section>
		<section class="highlights">
			<div class="highlights-wrapper">
				<div class="highlights-title">Highlights</div>
				<div class="arrow-align">
					<div class="arrow-wrapper">
						<div class="left-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></div>
						<div class="right-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
					</div>
				</div>

				<div class="hightlights-items-wrapper">
                <?PHP if (have_rows('highlights_images')) { 
                     while (have_rows('highlights_images')) : the_row(); ?>
                     <div class="hightlights-item">
						<img src="<?PHP echo get_sub_field('highlights_image'); ?>" alt="" />
					</div>
                <?PHP 
                endwhile;
                }
                ?>   
				</div>
			</div>
		</section>
        <?PHP if(get_field('location_map_code')!=""){?>
		<section class="location">
			<div class="location-wrapper">
				<div class="location_title">Location</div>
				<div class="location-wrapper">
                    <?PHP echo get_field('location_map_code');?>
				</div>
			</div>
		</section>
        <?PHP }?>

<?PHP get_footer(); ?>