<?php
	require('includes/config.php');
	$listing_id = $_GET["listing"];
	if(isset($_GET['listing'])){
		$listingId = (int)$_GET["listing"];
		$getListing = $db->query("SELECT * FROM listings WHERE listing_id = '$listingId'");
		if($getListing->num_rows == 1){
			$l = $getListing->fetch_object();
			$pageTitle = $l->listing_title;
			$getListingImages  = $db->query("SELECT * FROM images WHERE listing_id = '$listingId'");
			$listingImages = [];
			if($getListingImages->num_rows){
				while($img = $getListingImages->fetch_object()){
					$listingImages[] = $img;
				}
			}			
		}else{
			header('Location: listings');
			exit();
		}		
	}else{
		header('Location: listings');
		exit();
	} 
	include "header.php";  
//getlistingdetails("listings", $listing_id);

?>  

	<section class="page-title page-title-small centred" style="background-image: url('<?=$url;?>dashboard/listing-uploads/<?=$l->listing_picture;?>'); min-height: 100vh;">
	<div class="container-fluid">
		<div class="content-box">
		     <!--<h1><?=$l->listing_title;?></h1>-->
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="listing-summary" style="background: black; color:white;width: fit-content;text-align: start;padding: 5px;margin: 0px;">
				   <a href="javascript:;" onclick="showHideListingDetails()" id="showHideListingDetails" data-option="hide" style="text-decoration: none;color: #fff; text-transform: uppercase;">Hide Details</a>
				</div>
				<div class="breadcrumb-overview listing-summary" id="listingSummary">
					<h2><?=$l->listing_title;?></h2>
					<h5><?=$l->listing_location;?></h5> 
					<h3 class="price-details">$<?=number_format($l->listing_price);?> USD</h3>
					<p></p>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section class="single-project single-project-2" style="margin-top:-120px;">
	    <div class="container">
		<div class="inner-content">
			<div class="lower-content">
				<div class="row content-column">
					<div class="col-md-6 col-sm-12">
						<div class="content-box" style="background: #ffffffe8;padding: 11px;">
							<h4><u><?=$l->listing_title;?></u></h4>
							<div class="text">
                                    <p> <?=$l->listing_details;?></p>
                                  <h6> <b> Amenities</b> </h6>
				<p><?=$l->listing_amenities;?></p>
</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="row">
						<? if(count($listingImages)): foreach($listingImages as $img):?>
							<div class="col-md-6">
                            	<div class="project-block-one">
									<div class="inner-box">
										<figure class="image-box">
											<img src="<?=$url;?>dashboard/listing-uploads/<?=$img->file_name;?>" style="height: 250px; object-fit: cover;" alt="">
										</figure>
										<div class="caption-box">
											<h4> </h4>
										</div>
										<div class="text"></div>
										<div class="icon-box"><a href="<?=$url;?>dashboard/listing-uploads/<?=$img->file_name;?>" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-expanding-two-opposite-arrows-diagonal-symbol-of-interface"></i></a>
										</div>
									</div>
								</div>
							</div>
						<? endforeach; endif;?>
						</div>
						<div class="px-5"> 
							<a href= "javascript:;" class = "btn line-button"> Request More Details </a>
							<a href= "javascript:;" class = "btn line-button"> Schedule a showing </a>
							<a href= "javascript:;" class = "btn line-button"> View More listing </a>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
    </section>
<?php	
	include "footer.php";
?>