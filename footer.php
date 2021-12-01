    <footer class="main-footer" style="background-image: url(images/background/footer-bg-a.jpg); background-position: top center; background-attachment: fixed; background-size: cover;">
        <div class="container">
            <div class="widget-section">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="contact-widget footer-widget">
                            <h4 class="widget-title"> Properties </h4>
                            <div class="widget-content">
                                <ul class="list"> 
                                        <li><a href="./"> Home </a></li> 
                                        <li><a href="listings/php"> Our Listngs </a></li> 
                                        <li><a href="javascript:void(0)"> Recent Sales  </a></li>  
                                        <li><a href="javascript:void(0)"> New Development  </a></li>  
                                        <li><a href="javascript:void(0)"> Interactive Map  </a></li>  
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="contact-widget footer-widget">
                            <h4 class="widget-title"> Buyers </h4>
                            <div class="widget-content">
                                <ul class="list"> 
                                        <li><a href="javascript:void(0)"> Buy With Us </a></li> 
                                        <li><a href="listings.php"> Our Listngs </a></li>   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="contact-widget footer-widget">
                            <h4 class="widget-title"> Sellers </h4>
                            <div class="widget-content">
                                <ul class="list"> 
                                        <li><a href="javascript:void(0)"> List With Us</a></li> 
                                        <li><a href="javascript:void(0)"> Concierge </a></li> 
                                        <li><a href="javascript:void(0)"> Marketing </a></li> 
                                        <li><a href="javascript:void(0)"> Our Numbers </a></li> 
                                        <li><a href="javascript:void(0)"> Local Exposure </a></li> 
                                        <li><a href="javascript:void(0)"> Global Exposure </a></li> 
                                        <li><a href="javascript:void(0)"> An Online Experience </a></li> 
                                        <li><a href="javascript:void(0)"> Press </a></li> 
                                        <li><a href="javascript:void(0)"> Industry Recognition </a></li>  
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="contact-widget footer-widget">
                            <h4 class="widget-title"> About Us  </h4>
                            <div class="widget-content">
                                <ul class="list">
                                        <li><a href="harisbenzz-group"> The Haris Benzz Group </a></li> 
                                        <li><a href="javascript:void(0)"> Our Team  </a></li>  
                                        <li><a href="javascript:void(0)"> Our Offices  </a></li> 
                                        <li><a href="javascript:void(0)"> In The Media  </a></li> 
                                        <li><a href="javascript:void(0)">Blogs </a></li> 
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="footer-bottom centred border-top pt-3">
                <div class="copyright">&copy; <a href="javascript:void(0)"> HARIS BENZZ </a> 2021. All Rights Reserved. </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>

	<div class = "social-media">
		<ul class = "social-icons">
			<li class = "facebook" style = "margin-bottom: 25px;"><a href= "#" target  = "_blank"><i class = "fab fa-facebook"></i></a></li> 
			<li class = "facebook"><a href ="#" target  = "_blank"> <i class = "fab fa-twitter"></i></a></li> 
			<li class = "facebook"><a href= "#" target  = "_blank"> <i class = "fab fa-youtube"></i></a></li> 
			<li class = "facebook"><a href ="#" target  = "_blank"> <i class = "fab fa-linkedin"></i></a></li> 
			<li class = "facebook"><a href= "#" target  = "_blank"> <i class = "fab fa-instagram"></i></a></li> 
		</ul>
	</div>



<!-- jequery plugins -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!--Revolution Slider-->
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/revolution.extension.actions.min.js"></script>
<script src="revolution/js/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/revolution.extension.migration.min.js"></script>
<script src="revolution/js/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>

<!-- main-js -->
<script src="js/script.js"></script>
<script src="js/custom.js"></script>
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
	
<script>

</body><!-- End of .page_wrapper -->
</html>
