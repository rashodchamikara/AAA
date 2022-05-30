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
                <div class="image1"><img src="./assets/images/image2.png" alt="" /></div>
                <div class="image2"><img src="./assets/images/image1.png" alt="" /></div>
            </div>
        </div>

        <div class="section-content">
            <div class="section-title how-to-join">How to join with us</div>
            <div class="section-des">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it
                has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing
                packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
            </div>
            <div class="join-now">Join now</div>
        </div>
    </div>
</section>

<?PHP get_footer(); ?>