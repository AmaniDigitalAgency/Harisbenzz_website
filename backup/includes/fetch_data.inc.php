<?php

function getalllistings($table){ 
	require("includes/dbh.inc.php");
	$sql="SELECT * FROM $table ORDER BY listing_id ASC LIMIT 7";
	if ($result=mysqli_query($conn,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	$i = 1;
		foreach ($result as $alllistings => $all) {
			$location = substr($all['listing_location'], 0, 13);
			
			echo'<div class="col-lg-4 col-md-6 col-sm-12 service-block wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1100ms">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="dashboard/listing-uploads/'.$all['listing_picture'].'" alt="">
                                </figure>
                                <div class="caption-box">
                                    <div class="count-text"> -  '.$location.'..  </div>
                                    <h4><a href = "listing-details.php?listing='.$all['listing_id'].'"> '.$all['listing_title'].' </a></h4> 
                                </div>
                            </div>
                        </div>
                    </div>' ;
		$i++;
		}
	}

	mysqli_close($conn); 
}


function getlistingdetails($table, $listing_id){ 
	require("includes/dbh.inc.php");
	$sql="SELECT * FROM $table WHERE listing_id = '$listing_id' ";
	if ($result=mysqli_query($conn,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'Listin Not Found';
		} 
		foreach ($result as $listingdetails => $ld) {
			$price = number_format($ld['listing_price']);
			
			echo'    <section class="page-title page-title-small centred" style="background-image: url(dashboard/listing-uploads/'.$ld['listing_picture'].'); min-height: 100vh;"> 
        <div class="container-fluid">
            <div class="content-box">
                <h1><?php echo $page; ?> </h1>
            </div>
			<div class = "row">
				<div class = "col-md-4">
					<div class = "breadcrumb-overview">
						<h2> '.$ld['listing_title'].' </h2>
						<h5><small>In: </small> '.$ld['listing_location'].' </h5> 
						<h3 class = "price-details"> <small>Available: </small>  '.$ld['listing_type'].'  </h3> <hr>
						<h3 class = "price-details"><small>Price: </small>  '.$price.'  <small></small> </h3>
						
					</div>
				</div>
				<div class = "col-md-8"></div>
			</div>
        </div>
    </section>

    
    <section class="single-project single-project-2">
        <div class="container">
            <div class="inner-content"> 
                <div class="lower-content">
                    <div class="row">

                        <div class="col-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h4><u> '.$ld['listing_title'].' </u></h4>
                                <div class="text">
                                    <p>  '.$ld['listing_details'].' </p>
                                  <h6> <b> Amenities </h6>
								  <p> '.$ld['listing_amenities'].' </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>' ; 
		}
	}

	mysqli_close($conn); 
}


function getimages($table, $listing_id){ 
	require("includes/dbh.inc.php");
	$sql="SELECT * FROM $table WHERE listing_id = '$listing_id' ";
	if ($result=mysqli_query($conn,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	$i = 1;
		foreach ($result as $getimages => $gi) {
			
			echo'<div class="col-md-3">
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="dashboard/listing-uploads/'.$gi['file_name'].'" style = "height: 250px; object-fit: cover;"  alt=""></figure>
                                    <div class="caption-box"><h4> </h4></div>
                                    <div class="text">  </div>
                                    <div class="icon-box"><a href="dashboard/listing-uploads/'.$gi['file_name'].'" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-expanding-two-opposite-arrows-diagonal-symbol-of-interface"></i></a></div>
                                </div>
                            </div>
                        </div>' ;
		$i++;
		}
	}

	mysqli_close($conn); 
}