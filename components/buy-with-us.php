<section class="about-section animated slideInLeft"  data-aios-staggered-child="true" data-aios-animation="slideInLeft" data-aios-animation-delay="0s" data-aios-reveal-mobile="false" style="animation-delay: 0s;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 title-column card p-5">
                    <div class="title-box sec-title"  data-aios-staggered-child="true" data-aios-animation="slideInLeft" data-aios-animation-delay="0s" data-aios-reveal-mobile="false" style="animation-delay: 0s;"> 
                        <span class="top-title animated slideInUp"  data-aios-staggered-child="true" data-aios-animation="slideInLeft" data-aios-animation-delay="0s" data-aios-reveal-mobile="false" style="animation-delay: 0s;"> Buyers </span>
                        <h1 class="animated slideInLeft pt-3 "> Why buy with Us </h1>
						<div class="content-box mt-5 animated slideInLeft"> 
                            <div class="text"> 
                                <b>Not happy with the way your building/home looks?.</b><br>
                                We swiftly and commendably upsurge your home’s 
                                market value with our custom-made improvement 
                                services.
                            </div>
                            <p>
                                With Harisbenzz’s Concierge package, we will recommend and
                                even front the cost of select services to refurbish your
                                property’s appearance and heighten its prestige. This 
                                means less time on the market, with an even advanced return on sale.</p>
                                <a href="<?= $url?>listings" class = "btn line-button"> View Listings </a>
                        
                        </div>
                    </div>
                </div> 
                
                <div class="col-lg-5 col-md-12 col-sm-12 image-column" >
                    <div class="wrapper animated slideInUp">
                        <div class="images">
                            <div class="img1"></div>
                            <div class="img2"></div>
                            
                        </div>
                        <div class="slider">
                            <div class="drag-line">
                                <span></span>
                            </div>
                            <input type="range" min="0" maxlength="100" value="50" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
        <script>
            const slider = document.querySelector(".slider input");
            const img = document.querySelector(".images .img2");
            const dragLine = document.querySelector(".slider .drag-line");
            slider.oninput = ()=>{
                let sliderVal = slider.value;
                dragLine.style.left = sliderVal + "%";
                img.style.width = sliderVal + "%";
            }
            const slider2 = document.querySelector(".slid input");
            const img2 = document.querySelector(".imgs .img5");
            const drag = document.querySelector(".slid .dragline");
            slider2.oninput = ()=>{
                let sliderVal = slider2.value;
                drag.style.left = sliderVal + "%";
                img2.style.width = sliderVal + "%";
            }
            
        </script>
    