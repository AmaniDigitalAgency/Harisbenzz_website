<?php
    
	require('includes/dbh.inc.php');
	if(isset($_GET['name'])){
		$postId = (int)$_GET["id"];
		$getPosts = $conn->query("SELECT * FROM posts WHERE post_id = '$postId'");
		if($getPosts->num_rows == 1){
			$l = $getPosts->fetch_object();
			$pageTitle = $l->post_title; 
		}else{
			header('Location: '.$url.'blog');
			exit();
		}		
	}else{
		header('Location: '.$url.'blog');
		exit();
	}
	
?>	
<?php 
    $page = "Blog : $l->post_title";  
    include ('includes/head-start.php');
?> 

<?php include ('includes/head-end.php');?>
<?php 
    include ('components/breadcrumb.php'); 
	include "components/whatsapp-button.php";
?>
<style>
    .content-box h2 {
    color: white;
    letter-spacing: 2px;
    font-size: 16px !important;
    top: 50px;
    text-transform: uppercase;
}
</style>
    <section class="blog-single pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="blog-single-content">
                        <div class="inner-box">
                            <div class="content-style-one">
                                <div class="news-block-one p-3">
                                    <figure class="image-box"><img src="<?=$url;?>dashboard/post-uploads/<?=$l->post_picture;?>" style = "height: 600px; object-fit:cover;" alt=""></figure>
                                    <div class="lower-content">
                                        <ul class="post-info">
                                            <li><i class="far fa-calendar-alt"></i> <?=$l->post_date;?> </li>
                                            <li><i class="fa fa-tag"></i><?=$l->post_tags;?></li>
                                        </ul>
                                        <h4><?=$l->post_title;?></h4>
                                        <div class="text" style = "font-family: Gopher, Poppins, Oswald, sans-serif;">
                                           <?=$l->post_details;?>
                                        </div>
                                    </div>
									
                            <div class="post-share-option clearfix">
                                <div class="pull-left">
                                    <ul class="tags">
                                        <li><i class="fas fa-tags"></i>Tags:</li>
                                        <li><a href="#"> <?=$l->post_tags;?> </a></li>
                                    </ul>
                                </div>
								
                            </div>
                            
							
                                </div> 
                            </div>
							

							
							
							
                        </div>
                    </div>
                </div>
				
            </div>
        </div>
    </section>
	
    <?php include ('components/inquire.cmp.php');?> 

	
	
<?php include ('includes/foot-start.php');?> 
<script src="<?=$url;?>js/jquery.fancybox.js"></script>
<script src="<?=$url;?>js/appear.js"></script>
<script src="<?=$url;?>js/parallax.min.js"></script>  


<?php include ('includes/foot-end.php');?>