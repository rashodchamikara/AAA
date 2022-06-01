<?PHP

/**
 * Template Name: Team Page
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
        <br/>
		<!-- End Hero banner -->
        <?PHP if (have_rows('members')) {
            $x = 1;
            while (have_rows('members')) : the_row(); ?>
		<section class="team-page-block">
			<div class="history-wrapper">
				<div class="history-wrapper__main-image" style="min-width: 25%;">
                    <?PHP if(get_sub_field('member_image')!=""){?>
					<img src="<?PHP echo get_sub_field('member_image');?>" alt="" />
                    <?PHP }?>
				</div>
				<div class="history-wrapper__content">
					<div class="history-wrapper__content-title"><?PHP echo get_sub_field('member_name');?> - <?PHP echo get_sub_field('member_title');?></div>
					<div class="history-wrapper__content-des hightext">
                        <?PHP echo get_sub_field('member_description');?>
					</div>
				</div>
			</div>
		</section>
        <br/>
        <?PHP 
            endwhile;
        }
        ?>
		



<?PHP get_footer(); ?>