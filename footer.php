<!-- ========= Footer ========= -->
<footer id="main-footer">
	<div class="footer-container nopadding-sm">

			<!-- bottom menu -->
			<div class="col-md-3"><img src="http://localhost:8899/aoamp/wp-content/uploads/2016/08/light-long@2x.png" class="img-responsive" alt=""></div>
			<div class="col-md-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod ut molestiae ipsam rerum dolorem maiores unde tempora debitis blanditiis provident.</div>
			<div class="col-md-2">
				<h4 class="footer-heading text-uppercase">Link-uri Rapide</h4>
				<nav>
					<?php if(has_nav_menu( 'footer-menu' )):
					wp_nav_menu( array(
						'theme_location' => 'footer-menu',
						'container' => false,
						'menu_class' => 'bottom-menu'
						) );
					else:
						echo __( 'Define your footer menu in dashboard', MELICA_LG );
					endif ?>
				</nav>
				<h4 class="footer-heading text-uppercase">Social</h4>
				<div class="socials">
					<a href="https://www.facebook.com/AOAMP-259379517778356/"><i class="fa fa-facebook footer-facebook"></i></a>
					
				</div>
			</div>
			<div class="col-md-4"> <?= do_shortcode('[contact-form-7 id="413" title="Footer"]'); ?></div>

			<!-- copyright -->
			<div class="">
				&copy;
				<?php echo date('Y') ?>
				<?php echo melica_opt('footer_text', null); ?>
			</div>

	</div>
</footer>


<?php if(melica_opt('custom_js', false)) : ?>
	<!-- custom js code -->
	<script type="text/javascript"><?php echo melica_opt('custom_js') ?></script>
<?php endif ?>

<?php wp_footer(); ?></body></html>