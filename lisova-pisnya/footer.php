<div id="footer">
	<div class="container-fluid">
		<div class="footer-widget">
			<p class="social">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : endif;?>
			</p>
		</div>
		<div class="footer-widget">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) : endif;?>
		</div>
		<div class="footer-widget">

			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) ) : endif;?>

		</div>
	</div><!-- .container-fluid -->
	<div>
		<p class="footnote center"><?php echo bloginfo('description');?></p>
	</div>
</div>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
</body>
</html>