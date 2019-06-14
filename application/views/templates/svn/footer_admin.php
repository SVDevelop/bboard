		</div><!-- /.animated hiding -->
		<footer>
			<em> admin-page &copy; 2017</em>
		</footer>
                <?php
                  $scripts = array('jquery-2.2.0.min','bootstrap.min','jquery.fancybox.pack','jquery.mosaicflow.min','jquery.appear.min','nav');
                  foreach ($scripts as $script) {?>
                  <script src="<?php echo site_url();?>assets/admin/js/<?php echo $script;?>.js"></script>
                <?php } ?>
	</body>
</html>