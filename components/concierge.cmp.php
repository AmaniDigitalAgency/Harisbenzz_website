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
                                We are the house-renovating team that will transform your
                                home into a luxurious gets results experience. We offer
                                customised solutions for all types and budgets, so don't
                                hesitate to reach out!
                            </div>
                            <p>
                                With Harisbenzz’s Concierge package, you won't have to spend 
                                your time on the market. Once we have fronted the cost of select 
                                services to remodel and remake your home into a completive threat 
                                on the market, your return on sale will be worthwhile.
                        </p>
                        
                        </div>
                    </div>
                    <div class="title-box sec-title mt-3">
						<div class="content-box wow fadeInDown animated" data-wow-delay="200ms" data-wow-duration="1500ms"> 
                            <div class="text">  
                                <p>
                                    <h5 class="mb-3" style="color: #d5af36;font-weight: bold;font-family: cursive;">We have no hidden fees or interest charged.</h5>
                                    We empower you to focus on your business and not worry about the little things. 
                                    By preparing your property for sale, we can ensure that it has all of its potential 
                                    shining through without holding back any punches!. <br><br><strong>A team effort: </strong>
                                    our dedicated concierges will walk through every inch with their deep cleaning services 
                                    or ornamental improvements so when prospective buyers come they're taken aback by what's 
                                    ready-to go... And because Harisbenzz finances these hand picked upgrades upfront at no 
                                    cost until after closing day - there are less worries than ever before about cash flow.

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
    