<?php
	$page = "Blog";  
	include "header.php"; 
	include "components/breadcrumb.php";
?> 

    <section class="news-section bg-white blog-grid">
        <div class="container">
            <div class="row">
        <?php
            getallposts("posts");
        ?>				
				
            </div>
        </div>
    </section>
	
<?php
	include "components/inquire.cmp.php";
?> 
<?php
	include "footer.php";
?>