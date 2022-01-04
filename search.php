<?php
	$page = "Search Page";  
	include "header.php";
    include "components/breadcrumb.php"; 
	include "components/whatsapp-button.php";
?> 


<section class="service-style-two alternate-2">
        <div class="container">
            <div class="inner-content">             				
                <div class="row">               
                    <?php 
                        if(isset($_POST['search-form'])){
                            $price_range = mysqli_real_escape_string($conn, $_POST['price_range']);
                            $search_value = mysqli_real_escape_string($conn, $_POST['searchTxt']);
                            $property_location = mysqli_real_escape_string($conn, $_POST['property_location']);
                            $property_size = mysqli_real_escape_string($conn, $_POST['property_size']);
                            $list_type = mysqli_real_escape_string($conn, $_POST['list_type']);
                            $search_value = mysqli_real_escape_string($conn, $_POST['searchTxt']);
                            $sql_query = "SELECT * FROM listings WHERE listing_location = '%$search_value%' OR listing_location LIKE '%$property_location%'
                             OR listing_type LIKE '%$list_type%' OR listing_amenities LIKE '%$property_size%' OR listing_price LIKE '%$price_range%'";
                            $results = mysqli_query($conn, $sql_query);
                            $queryResults = mysqli_num_rows($results);
                            if ($queryResults > 0) {
                                foreach ($results as $row) {
                                    $slug = slugify($row['listing_title']);
                                    $location = substr($row['listing_location'], 0, 13);
                                    echo'<div class="col-lg-4 col-md-6 col-sm-12 service-block wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1100ms">
                                    <div class="service-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box">
                                                <img src="dashboard/listing-uploads/'.$row['listing_picture'].'" alt="">
                                            </figure>
                                            <div class="caption-box">
                                                <div class="count-text"> -  '.$location.'..  </div>
                                                <h4><a href = "property/'.$row['listing_id'].'/'.$slug.'"> '.$row['listing_title'].' </a></h4> 
                                            </div>
                                            
                                            <div class="caption-box2">
                                                <h4><a href = "property/'.$row['listing_id'].'/'.$slug.'"> '.$row['listing_title'].' </a></h4> 
                                                <button class = "btn bg-black h-100"><a href = "property/'.$row['listing_id'].'/'.$slug.'"> View Details + </a></button> 
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>' ;
                                }
                            } 
                            else{
                                echo "There are no results matching your search";
                            }
                        }
                    ?> 
                </div>
            </div>
        </div>
    </section>


<?php
	include "footer.php";
?>