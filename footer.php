<footer>
	<div id="footerTop">
	    <div class="container">
		    <div class="row">
			    <div class="col col-lg-4 col-md-12 col-sm-12">
				    <div>
					    <div>
						    <?php dynamic_sidebar('footer-left'); ?>
					    </div>
				    </div>
			    </div>
			    <div class="col col-lg-4 col-md-12 col-sm-12">
				    <div>
					    <div>
						    <?php dynamic_sidebar('footer-center'); ?>
					    </div>
				    </div>
			    </div>
			    <div class="col col-lg-4 col-md-12 col-sm-12">
				    <div>
					    <div>
						    <?php dynamic_sidebar('footer-right'); ?>
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
	</div>

    <div id="footerBottom" class="clearfix">
        <div id="footerCopyInfo" class="container">
            <div>
                <p id="footercopy">Copyright© <a href="https://www.yellowpages.ca/bus/Ontario/Niagara-Falls/Niagara-Hearing-Solutions-Inc/5962683.html" target="_blank">Niagara Hearing Solutions Inc</a> <?php echo date('Y'); ?></p>
            </div>
        </div>
    </div>
</footer>
<a href="#" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
<?php
/*--- if boxed open wrapper---*/
if(get_option('modular_wp_site_style') == "Boxed"){ echo '</div>'; }
?>

<?php if(get_option('modular_wp_footer_js') != ''){ echo '<script>'.get_option('modular_wp_footer_js').'</script>'; } ?>
<?php wp_footer(); ?>

</body>
</html>
