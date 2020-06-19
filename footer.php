		<!-- Footer -->
        <footer id="footer">
				<div class="inner">
					<ul class="icons">

						<?php foreach( $settings["social"] as $link ) : ?>
							<li><a href="<?php echo $link["url"] ?>" class="icon brands fa-<?php echo $link["icon"] ?>"><span class="label"><?php echo $link["text"] ?></span></a></li>
						<?php endforeach ?>

					</ul>
					<ul class="copyright">
						<li><a href="https://jkhone.github.io/jasper/">Portfolio</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>