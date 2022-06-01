<?PHP

/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage TetrisWP
 *
 */
get_header();
?>
<div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?PHP if (have_rows('main_slider')) {
            $x = 1;
            while (have_rows('main_slider')) : the_row(); ?>
                <div class="carousel-item <?PHP if ($x == 1) {
                                                echo 'active';
                                            } ?> ">
                    <img src="<?PHP echo get_sub_field('slider_image'); ?>" class="d-block w-100" alt="..." />
                    <div class="carousel-caption-custom">
                        <h5><?PHP echo get_sub_field('slider_title'); ?></h5>
                        <p>
                            <?PHP echo get_sub_field('slider_text'); ?>
                        </p>
                        <?PHP if (get_sub_field('slider_cta_text') != "" && get_sub_field('slider_cta_link') != "") { ?>
                            <a class="call-to-action" href="<?PHP echo get_sub_field('slider_cta_link'); ?>"><?PHP echo get_sub_field('slider_cta_text'); ?></a>
                        <?PHP } ?>
                    </div>
                </div>
        <?PHP
                $x++;
            endwhile;
        } ?>
    </div>
    <button class="left-arrow-custom" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="right-arrow-custom" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<section class="home-about grey">
    <div class="home-section__wrapper">
        <img src="<?PHP echo get_field('about_section_image'); ?>" alt="" />
        <div class="section-content">
            <div class="section-title"><?PHP echo get_field('about_section_title'); ?></div>
            <div class="section-des">
                <?PHP echo get_field('about_section_text'); ?>
            </div>
        </div>
    </div>
</section>
<section class="home-about">
    <div class="home-section__wrapper">
        <div class="section-content">
            <div class="section-title"><?PHP echo get_field('section_2_title'); ?></div>
            <div class="section-des">
                <?PHP echo get_field('section_2_text'); ?>
            </div>
        </div>
        <img src="<?PHP echo get_field('section_2_image'); ?>" alt="" />
    </div>
</section>
<section class="home-about orange">
    <div class="home-section__wrapper">
        <div class="image-wrapper">
            <div class="images-flex">
                <div class="image1"><img src="<?PHP echo get_field('join_with_us_image_1'); ?>" alt="" /></div>
                <div class="image2"><img src="<?PHP echo get_field('join_with_us_image_2'); ?>" alt="" /></div>
            </div>
        </div>

        <div class="section-content">
            <div class="section-title how-to-join"><?PHP echo get_field('join_with_us_title'); ?></div>
            <div class="section-des">
                <?PHP echo get_field('join_with_us_text'); ?>
            </div>
            <a href="<?PHP echo get_field('join_with_us_cta_link'); ?>" class="join-now"><?PHP echo get_field('join_with_us_cta_text'); ?></a>
        </div>
    </div>
</section>
<?PHP if(get_field('block_section_title')!=""){?>
<section class="how-we-help">
    <div class="section-main-title"><?PHP echo get_field('block_section_title'); ?></div>
    <div class="how-we-help__section-items">
    <?PHP if (have_rows('block_items')) {
        while (have_rows('block_items')) : the_row(); ?>
        <div class="how-we-help_item">
            <div class="item-image-wrapper"><img src="<?PHP echo get_sub_field('block_image'); ?>" alt="" /></div>

            <div class="how-we-help__content">
                <?PHP echo get_sub_field('block_text'); ?>
            </div>
        </div>
        <?PHP endwhile;
        }
        ?>
    </div>
</section>
<?PHP }?>
<section class="news">
    <div class="news-wrapper">
        <div class="news-wrapper__controls">
            <div class="sub-title"><?PHP echo get_field('post_slider_title'); ?></div>
            <div class="arrow-wrapper">
                <div class="left-arrow" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></div>
                <div class="right-arrow" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
            </div>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="false" data-pause="hover">
            <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div> -->
            <div class="carousel-inner">
                <?PHP 
                    $category = get_queried_object();
					$allCourses = new WP_Query(array(
						'posts_per_page' => 10,
						'cat' => 5
					  ));
                      $x=1;
                      $start = true;
                      while($allCourses->have_posts()){
					  $allCourses->the_post(); 	
                 if($x==1){
                    ?>
                    <div class="carousel-item <?PHP if($start==true){ echo "active"; }?>">
                        <div class="news-cards">
                            <div class="news-cards__wrapper">
                    <?PHP
                } ?>
                                <div class="news-card">
                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'post-thumbnail')); ?>" alt="" />
                                    <div class="news-title"><?PHP the_title();?></div>
                                    <div class="news-content">
                                        <?PHP echo get_the_excerpt();?>
                                    </div>
                                    <div class="read-more"><a href="<?php the_permalink(); ?>">Read more</a></div>
                            </div>
                    
                <?PHP if($x==2){
                    ?>
                            </div>
                        </div>
                    </div>
                    <?PHP
                    $start = false;
                    $x=1;
                }else{
                    $x++;
                }
                
            }?>
            </div>
        </div>
    </div>
</section>

<?PHP get_footer(); ?>