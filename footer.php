	</main>
	<footer class="footer">
		<div class="footer__container">
			<div class="footer__brand">
				<img class="light-mode-only" src="<?php echo get_theme_file_uri('/assets/images/brand/soujava-brand-full.svg'); ?>" alt="" />
				<img class="dark-mode-only" src="<?php echo get_theme_file_uri('/assets/images/brand/soujava-brand-full-pb.svg'); ?>" alt="" />
			</div>
			<div class="footer__sitemap">
				<div class="footer__section">
					<div class="footer__title">Sou Java</div>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'footer-menu-sou-java',
						'menu_class' => 'footer__links',
					))
					?>
				</div>
				<div class="footer__section">
					<div class="footer__title">Comunidade</div>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'footer-menu-community',
						'menu_class' => 'footer__links',
					))
					?>
				</div>
				<div class="footer__section">
					<div class="footer__title">Redes Sociais</div>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'footer-menu-social',
						'menu_class' => 'footer__links',
					))
					?>
				</div>

			</div>
		</div>
		<div class="footer__rights">
			SouJava 2023 - Todos os direitos reservados
		</div>
	</footer>
	<script type="module" src="<?php echo get_theme_file_uri('/assets/js/main.js'); ?>"></script>

	</body>

	</html>