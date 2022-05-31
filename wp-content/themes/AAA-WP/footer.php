<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage AAA-WP
 * @since AAA-WP
 */

?>

<footer>
	<div class="footer-section">
		<div class="footer-section__one">
			<div class="footer-logo">
				<img src="<?PHP echo get_field('site_footer_logo',27);?>" alt="" />
			</div>
			<div class="footer-des">
				<?PHP echo get_field('footer_text',27);?>
			</div>
			<div class="footer-social">
				<?PHP if(get_field('facebook_link',83)!=""){?>
				<div class="social-item"><a href="<?PHP echo get_field('facebook_link',83);?>" target="_blank"><i class="fa fa-facebook fa-1x"></i></a></div>
				<?PHP }?>
				<?PHP if(get_field('instagram_link_',83)!=""){?>
				<div class="social-item"><a href="<?PHP echo get_field('instagram_link_',83);?>" target="_blank"><i class="fa fa-instagram fa-1x"></i></a></div>
				<?PHP }?>
				<?PHP if(get_field('whatsapp_link',83)!=""){?>
				<div class="social-item"><a href="<?PHP echo get_field('whatsapp_link',83);?>" target="_blank"><i class="fa fa-whatsapp fa-1x"></i></a></div>
				<?PHP }?>
				<?PHP if(get_field('twitter_link',83)!=""){?>
				<div class="social-item"><a href="<?PHP echo get_field('twitter_link',83);?>" target="_blank"><i class="fa fa-twitter fa-1x"></i></a></div>
				<?PHP }?>
			</div>
		</div>
		<div class="footer-section__two">
			<div class="footer-section__title">Contact us</div>
			<div class="footer-contact-details">
				<div class="footer-contact__item">
					<span><i class="fa fa-map-marker" aria-hidden="true" style="font-size: 20px; color: black"></i>320/3 lorem,ipsum</span>
				</div>
				<div class="footer-contact__item">
					<span><i class="fa fa-phone" aria-hidden="true" style="font-size: 20px; color: black"></i>+94113652235</span>
				</div>
				<div class="footer-contact__item">
					<span><i class="fa fa-envelope" aria-hidden="true" style="font-size: 18px; color: black"></i>hello@gmail.com</span>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-credits">Copyright <?PHP echo date('Y');?> | <?PHP echo get_bloginfo();?> All rights reserved  
		| Solution By  <a href="https://www.tetris.lk" style="color: #2ca1d5 !important; font-weight: 600; margin-left:5px;" target="_blank">TETRIS</a> </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
