<?php
	include "site-functions.php";
	
function getalllistings($table){ 
	require("includes/dbh.inc.php");
	$sql="SELECT * FROM $table ORDER BY listing_id ASC LIMIT 10";
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
		foreach ($result as $listing) {
			$location = substr($listing['listing_location'], 0, 13);
			$slug = slugify($listing['listing_title']);
			
			echo'<div class="col-lg-4 col-md-6 col-sm-12 service-block wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1100ms">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="dashboard/listing-uploads/'.$listing['listing_picture'].'" alt="">
                                </figure>
                                <div class="caption-box">
                                    <div class="count-text"> -  '.$location.'..  </div>
                                    <h4><a href = "property/'.$listing['listing_id'].'/'.$slug.'"> '.$listing['listing_title'].' </a></h4> 
                                </div>
								
								<div class="caption-box2">
                                    <h4><a href = "property/'.$listing['listing_id'].'/'.$slug.'"> '.$listing['listing_title'].' </a></h4> 
									<button class = "btn bg-black h-100"><a href = "property/'.$listing['listing_id'].'/'.$slug.'"> View Details + </a></button> 
                                </div>
								
                            </div>
                        </div>
                    </div>' ;
		$i++;
		}
	}

	mysqli_close($conn); 
}


function listingspage($table){ 
	require("includes/dbh.inc.php");
	$sql="SELECT * FROM $table ORDER BY listing_id ASC LIMIT 21";
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
		foreach ($result as $listingspage=> $lp) {
			$location = substr($lp['listing_location'], 0, 13);
			$slug = slugify($lp['listing_title']);
			
			echo'<div class="col-lg-4 col-md-6 col-sm-12 service-block wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1100ms">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="dashboard/listing-uploads/'.$lp['listing_picture'].'" alt="">
                                </figure>
                                <div class="caption-box">
                                    <div class="count-text"> -  '.$location.'..  </div>
                                    <h4><a href = "property/'.$lp['listing_id'].'/'.$slug.'"> '.$lp['listing_title'].' </a></h4> 
                                </div>
								
								<div class="caption-box2">
                                    <h4><a href = "property/'.$lp['listing_id'].'/'.$slug.'"> '.$lp['listing_title'].' </a></h4> 
									<button class = "btn bg-black h-100"><a href = "property/'.$lp['listing_id'].'/'.$slug.'"> View Details + </a></button> 
                                </div>
								
                            </div>
                        </div>
                    </div>' ;
		$i++;
		}
	}

	mysqli_close($conn); 
}





function getcategory($table,$cat){ 
	require("includes/dbh.inc.php");
	$sql="SELECT * FROM $table where listing_type = '$cat' ORDER BY listing_id ASC LIMIT 10";
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
		foreach ($result as $category=> $cat) {
			$location = substr($all['listing_location'], 0, 13);
			$slug = slugify($cat['listing_title']);
			
			echo'<div class="col-lg-4 col-md-6 col-sm-12 service-block wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1100ms">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="dashboard/listing-uploads/'.$cat['listing_picture'].'" alt="">
                                </figure>
                                <div class="caption-box">
                                    <div class="count-text"> -  '.$location.'..  </div>
                                    <h4><a href = "property/'.$cat['listing_id'].'/'.$slug.'"> '.$cat['listing_title'].' </a></h4> 
                                </div>
                            </div>
                        </div>
                    </div>' ;
		$i++;
		}
	}

	mysqli_close($conn); 
}

function getallposts($table){ 
	require("includes/dbh.inc.php");
	$sql="SELECT * FROM $table ORDER BY post_id DESC LIMIT 9";
	if ($result=mysqli_query($conn, $sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no posts alert
		if ($rowcount==0) {
      		# code...
			echo ' <h3 class="breadcrumb-h6">No posts available</h3> ';
		}
		
      	$i = 1;
		foreach ($result as $allposts=>$post) {
			$small_title = substr($post['post_title'], 0, 63);
			$slug = slugify($post['post_title']);
			
			$date = date_create($post['post_date']);
			$new_date = date_format($date,"dS F Y");
			
			echo'<div class="col-lg-4 col-md-6 col-sm-12 news-block wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="news-block-one">
                        <figure class="image-box"><a href="blog_deatils.php?id=$post=>post_id&name=$slug"><img src="dashboard/post-uploads/'.$post['post_picture'].'" alt=""></a></figure>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><i class="far fa-calendar-alt"></i> '.$new_date.' </li>
                                <li><i class="fa fa-tag"></i> '.$post['post_category'].' </li>
                            </ul>
                            <h4><a href="blogs/'.$post['post_id'].'/'.$slug.'"> '.$small_title.' </a></h4>
                        </div>
                    </div>
                </div>' ;
		$i++;
		}
	}

	mysqli_close($conn); 
}