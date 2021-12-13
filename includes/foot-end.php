<!-- main-js -->
<script src="<?= $url;?>js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= $url;?>js/script.js"></script>
<script src="<?= $url;?>js/custom.js"></script>
<!-- jequery plugins -->
<script src="<?= $url;?>js/jquery.js"></script>
<script src="<?= $url;?>js/popper.min.js"></script>
<script src="<?= $url;?>js/bootstrap.min.js"></script>

<script src="<?= $url;?>js/owl.js"></script>
<script src="<?= $url;?>js/wow.js"></script>
<script src="<?= $url;?>js/validation.js"></script>
<script src="<?= $url;?>js/jquery.fancybox.js"></script>
<script src="<?= $url;?>js/appear.js"></script>
<script src="<?= $url;?>js/parallax.min.js"></script>
<script src="<?= $url;?>js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= $url;?>js/owl.carousel.min.js"></script>
<!--Revolution Slider-->
<script src="<?= $url;?>revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?= $url;?>revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= $url;?>revolution/js/revolution.extension.actions.min.js"></script>
<script src="<?= $url;?>revolution/js/revolution.extension.carousel.min.js"></script>
<script src="<?= $url;?>revolution/js/revolution.extension.kenburn.min.js"></script>
<script src="<?= $url;?>revolution/js/revolution.extension.layeranimation.min.js"></script>
<script src="<?= $url;?>revolution/js/revolution.extension.migration.min.js"></script>
<script src="<?= $url;?>revolution/js/revolution.extension.navigation.min.js"></script>
<script src="<?= $url;?>revolution/js/revolution.extension.parallax.min.js"></script>
<script src="<?= $url;?>revolution/js/revolution.extension.slideanims.min.js"></script>
<script src="<?= $url;?>revolution/js/revolution.extension.video.min.js"></script>
<script src="<?= $url;?>js/main-slider-script.js"></script>

<!-- main-js -->
<script src="<?= $url;?>js/script.js"></script>
<script src="<?= $url;?>js/custom.js"></script>
<script>
	function showHideInfoContent(option){
		if(option==='hide'){
			$('.info-content.details').hide(500, 'linear',function(){
				$('.info-content.bg-transparent').show();
			});		
		}else{
			$('.info-content.bg-transparent').hide();
			$('.info-content.details').show(500, 'linear');
		}
	}
	$(document).ready(function(){
		if($('.info-content').length){
			$('.info-content').each(function(){
				if($(this).hasClass('details')){
					setTimeout(function(){						
						showHideInfoContent('hide')
					},7000);
				}
			})
		}
	})
</script>
</body><!-- End of .page_wrapper -->
</html>