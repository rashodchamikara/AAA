<?PHP

/**
 * Template Name: Contact Page
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
    <div class="hero-title">Contact Us</div>
</div>
<!-- End Hero Banner -->
<section class="contact">
    <div class="contact-wrapper">
        <div class="contact-wrapper__details">
            <div class="contact-page-title">Contact us</div>
            <div class="contact-contact-details">
                <div class="footer-contact__item">
                    <span><i class="fa fa-map-marker" aria-hidden="true" style="font-size: 20px; color: white"></i><?PHP echo get_field('address');?></span>
                </div>
                <div class="footer-contact__item">
                    <span><i class="fa fa-phone" aria-hidden="true" style="font-size: 20px; color: white"></i><?PHP echo get_field('contact_number');?></span>
                </div>
                <div class="footer-contact__item">
                    <span><i class="fa fa-envelope" aria-hidden="true" style="font-size: 18px; color: white"></i><?PHP echo get_field('email_address');?></span>
                </div>
            </div>

            <div class="contact-social">
            <?PHP if(get_field('facebook_link')!=""){?>
                <a href="<?PHP echo get_field('facebook_link');?>" target="_blank">
                    <div class="contact-page-social__item"><i class="fa fa-facebook fa-3x" style="font-size: 24px; color: #d74c4b"></i></div
                ></a>
            <?PHP }?>
            <?PHP if(get_field('instagram_link_')!=""){?>
                <a href="<?PHP echo get_field('instagram_link_');?>" target="_blank">
                    <div class="contact-page-social__item"><i class="fa fa-instagram fa-3x" style="font-size: 24px; color: #d74c4b"></i></div
                ></a>
            <?PHP }?>
            <?PHP if(get_field('whatsapp_link')!=""){?>
                <a href="<?PHP echo get_field('whatsapp_link');?>" target="_blank">
                    <div class="contact-page-social__item"><i class="fa fa-whatsapp fa-3x" style="font-size: 24px; color: #d74c4b"></i></div
                ></a>
            <?PHP }?>
            <?PHP if(get_field('twitter_link',83)!=""){?>
                <a href="<?PHP echo get_field('twitter_link');?>" target="_blank">
                    <div class="contact-page-social__item"><i class="fa fa-twitter fa-3x" style="font-size: 24px; color: #d74c4b"></i></div
                ></a>
            <?PHP }?>
            </div>
        </div>
        <div class="contact-form-wrapper">
            <div class="contact-form__title"><?PHP echo get_field('form_title');?></div>
            <div class="contact-page__des">
                <?PHP echo get_field('form_description');?>
            </div>
            <div class="contact-form">
                <form action="">
                    <div class="form-input__item">
                        <input type="text" placeholder="Name" />
                    </div>
                    <div class="form-input__item">
                        <input type="text" placeholder="Contact number" />
                    </div>
                    <div class="form-input__item">
                        <input type="email" placeholder="E-mail" />
                    </div>
                    <div class="form-input__item">
                        <input type="text" placeholder="Address" />
                    </div>
                    <div class="form-input__message">
                        <textarea name="" id="" cols="30" rows="10">Message</textarea>
                    </div>
                    <div class="join-us__submit-btn">Submit</div>
                </form>
            </div>
        </div>
    </div>
</section>

<?PHP get_footer(); ?>