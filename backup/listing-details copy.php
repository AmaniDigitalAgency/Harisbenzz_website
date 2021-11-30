<?php
	$listing_id = $_GET["listing"];
	$page = "Kingdom Kampala";  
	include "header.php";  

getlistingdetails("listings", $listing_id);

?>  

    <section class="single-project single-project-2">
        <div class="container border-top">
            <div class="inner-content"> 
                <div class="lower-content">
                    <div class="row">

                        <div class="col-12 col-sm-12">
                            <div class="content-box">
								<div class = "row">
                                
<?php getimages("images", $listing_id); ?>
								</div>
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