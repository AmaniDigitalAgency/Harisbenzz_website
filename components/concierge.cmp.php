   <section class="about-section " data-aios-staggered-child="true" data-aios-animation="slideInLeft" data-aios-animation-delay="0s" data-aios-reveal-mobile="false" style="animation-delay: 0s;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 title-column card p-5">
                    <div class="title-box sec-title"> 
                        <span class="top-title animated slideInUp"  data-aios-staggered-child="true" data-aios-animation="slideInLeft" data-aios-animation-delay="0s" data-aios-reveal-mobile="false" style="animation-delay: 0s;"> Sellers </span>
                        <h1 class="animated slideInLeft"> concierge  </h1>
						<div class="content-box mt-5 wow fadeInDown animated" data-wow-delay="00ms" data-wow-duration="1500ms"> 
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
                        
                        </div>
                    </div>
                    <div class="title-box sec-title mt-3">
						<div class="content-box wow fadeInDown animated" data-wow-delay="200ms" data-wow-duration="1500ms"> 
                            <div class="text">  
                                <p>
                                    <h5 class="mb-3" style="color: #d5af36;font-weight: bold;font-family: cursive;">We have no hidden fees or interest charged.</h5>
                                    Our Concierge aims to prepare your home/property 
                                    for the finest unveiling on the market. After evaluating 
                                    your property’s needs via a walkthrough, we work together 
                                    in crafting prospects to increase its value and profitability.
                                    From deep-cleaning to ornamental improvements, Harisbenzz will 
                                    cover the upfront costs of hand-picked services and not collect 
                                    payment until the sale/ hire of your property. By financing your 
                                    property’s potential, we seek to leverage a swifter and worthwhile 
                                    sale.

                                </p>
                                <br>
                            </div>
                        
                        </div>
                    </div>
                </div> 
                
                <div class="col-lg-5 col-md-12 col-sm-12 image-column" >
                    <div class="wrapper wow fadeInDown animated" data-wow-delay="00ms" data-wow-duration="1500ms">
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

                    <div class="wrapper wow fadeInDown animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="imgs">
                            <div class="img3"></div>
                            <div class="img5"></div>
                            
                        </div>
                        <div class="slider slid">
                            <div class="drag-line dragline">
                                <span></span>
                            </div>
                            <input type="range" min="0" maxlength="100" value="50" />
                        </div>
                    </div>
                    
                    
                   
                </div>
            </div>

            <div class="concierge-services visible mt-5  animated wow fadeInDown animated" data-wow-delay="100ms" data-wow-duration="1500ms">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-md-12 col-sm-12 m-auto">
                            <h2>Select Services Might Include:</h2>
                            <ul>                                                
                                <li><i class="fa fa-check"></i> Deep Cleaning</li>
                                <li><i class="fa fa-check"></i> Ornamental Renovations</li>
                                <li><i class="fa fa-check"></i> Decluttering</li>
                                <li><i class="fa fa-check"></i> Pest Control</li>
                                <li><i class="fa fa-check"></i> Staging</li>
                                <li><i class="fa fa-check"></i> Painting</li>
                                <li><i class="fa fa-check"></i> Landscaping</li>
                                <li><i class="fa fa-check"></i> Closet Buildout</li>
                                <li><i class="fa fa-check"></i> Window Replacement</li>
                                <li><i class="fa fa-check"></i> Lavatory Remodel</li>
                                <li><i class="fa fa-check"></i> New Flooring</li>
                                <li><i class="fa fa-check"></i> Home Automation</li>
                                <li><i class="fa fa-check"></i> Roof Repair</li>
                                <li><i class="fa fa-check"></i> Mold Remediation</li>
                            </ul>
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
    