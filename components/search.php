<section class="contact-info-section style-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-12 col-md-12 content-column">
                <div class="sec-title pt-5">
                    <h1 style = "margin-top: 120px;"> Active <br><span>Listings  </span></h1>
                </div>
            </div>
            <div class="col-xl-8 col-lg-12 col-md-12 form-column">
                <div class="contact-form-area bg-image">
                    <h2 class = "mb-5"> Search <span> Our Listings  </span></h2>
                    <form method="post" action="search" id="contact-form">
                        <div class = "row">
                            <div class = "col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <div class="slidecontainer">
                                            <input type="range" min="0" max="100M" value="50" class="slider" id="myRange" name="price_range" onchange="updateTextInput(this.value);">
                                        </div>
                                        <span  style = "color: #FFFFFF;"> $</span>  <span id = "demo" style = "color: #FFFFFF;">$</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <select class = "form-control" name = "property_location">
                                            <option> Neighbourhood </option>
                                            <option> Kampala </option>
                                            <option> Wakiso </option>
                                            <option> Mukono </option>
                                            <option> Entebbe </option>
                                            <option> Jinja </option>
                                            <option> Masaka </option>
                                            <option> Luwero </option>
                                            <option> Arua </option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <select class = "form-control" name = "property_size">
                                            <option> Min beds</option>
                                            <option> 3  </option>
                                            <option> 4 </option>
                                            <option> 5 </option>
                                            <option> 6 </option>
                                            <option> 7 </option>
                                            <option> 8 </option>
                                            <option> 9 </option>
                                            <option> 10+ </option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label class="custom-checkbox"> Both 
                                        <input type="radio" name="list_type" value="Both Sale And Rent">
                                        <span class="checkmark"></span>
                                        </label>
                                        <label class="custom-checkbox"> For Rent  
                                        <input type="radio"  name="list_type" value="For Rent">
                                        <span class="checkmark"></span>
                                        </label>
                                        <label class="custom-checkbox"> For Sale 
                                        <input type="radio" name="list_type" value="For sale">
                                        <span class="checkmark"></span>
                                        </label> 
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type = "text" name="searchTxt"  class = "form-control"  placeholder = "Search Listing By Address">
                                    </div>
                                </div>
                            </div>
                            <div class = "col-lg-4 form-group message-btn">
                                <button type="submit" class = "btn line-button" name="search-form"> Search </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>