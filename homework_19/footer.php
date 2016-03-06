</div>
<?php if(get_option('show_footer')) { ?>
<div class="container-fluid row">
	<div class="text-bottom">
		<h2>Do you need a Website?</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.</p>
	</div>
	<div class="bottom">
		<a href="#">Get a Free Quote</a>
	</div>
</div>
<footer id="footer">
	<div class="container-fluid row">
		<div class="footer-center row">
			<div class="footer-left">
				<img src="http://deliver.ua/wp-content/uploads/2016/03/logo-footer.jpg" alt="Logo">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida quam quis nunc rutrum placerat. Proin eu mi vitae neque veh interdum id nec turpis nam auctor faucibus sollicitudin.</p>
			</div>
			<div class="social">
				<ul>
					<li><a href="#" class="fa fa-rss"><?php echo get_post_meta($post->ID, 'twitter ', true); ?></a></li>
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
				</ul>
			</div>
			<div class="contact">
				<h1>Contact info</h1>
				<span>222 Ave C South</span>
				<span>Saskatoon, Saskatchewan</span>
				<span>Canada S7K 2N5</span>
				<span class="email">info@deliver.ca</span>
				<span>1.306.222.3456</span>
			</div>
			<div class="links">
				<h1>Quick Links</h1>
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
				</nav>
			</div>
			<div class="news">
				<h1>Newsletter</h1>
				<p>Lorem ipsum dolor sit amet dolor consectetur adipiscing elit. </p>
				<form>
					<input type="email"  placeholder="Email">
					<button type="button" ">ok</button>
				</form>
			</div>
		</div>
		<div class="footer-bottom">
			<p>Copyright 2013 <a href="#" class="link-footer"> Deliver.</a> All Rights Reserved.</p>
		</div>
		<div class="links-bottom">
			<ul>
				<li><a href="http://deliver.ua/about">about / </a></li>
				<li><a href=" http://deliver.ua/portfolio/portfolio">Privacy Policy / </a></li>
				<li><a href="http://deliver.ua/contact-us">contact</a></li>
			</ul>
		</div>
	</div>
</footer>
<?php } // Конец конструкции if ?>
<?php wp_footer(); // Необходимо для нормальной работы плагинов
?>
</body>
</html>