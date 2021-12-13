<div class="page-inner mt--5"> 
				
					<div class="row">
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-12 col-stats">
											<div class="numbers">
												<p class="card-category"> All Posts  </p>
												<h4 class="card-title">  
              <?php
                $sql="SELECT post_id FROM posts";
	if ($result=mysqli_query($conn,$sql))
	{
      	
		$rowcount=mysqli_num_rows($result);
		echo $rowcount; 
	}
              ?>
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-12 col-stats">
											<div class="numbers">
												<p class="card-category"> Blogs </p>
												<h4 class="card-title">
              <?php
                $sql="SELECT post_id FROM posts WHERE post_category = 'Blogs' ";
	if ($result=mysqli_query($conn,$sql))
	{
      	
		$rowcount=mysqli_num_rows($result);
		echo $rowcount; 
	}
              ?>												
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-12 col-stats">
											<div class="numbers">
												<p class="card-category"> Real Estate Tips</p>
												<h4 class="card-title">
              <?php
                $sql="SELECT post_id FROM posts WHERE post_category = 'Real Estate Tips' ";
	if ($result=mysqli_query($conn,$sql))
	{
      	
		$rowcount=mysqli_num_rows($result);
		echo $rowcount; 
	}
              ?>													
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-primary card-round">
								<div class="card-body ">
									<div class="row"> 
										<div class="col-12 col-stats">
											<div class="numbers">
												<p class="card-category">  Design Tips </p>
												<h4 class="card-title">
              <?php
                $sql="SELECT post_id FROM posts WHERE post_category = 'Design Tips' ";
	if ($result=mysqli_query($conn,$sql))
	{
      	
		$rowcount=mysqli_num_rows($result);
		echo $rowcount; 
	}
              ?>													
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title"> All Listings  </h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Add Property
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->


<?php
	include "modals/addpropertymodal.php";
?>
									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Name</th>
													<th>Position</th>
													<th>Office</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>Name</th>
													<th>Position</th>
													<th>Office</th>
													<th>Action</th>
												</tr>
											</tfoot>
											<tbody>
											
											
											<?php getallposts("posts");?> 

       
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div> 
 
					</div>
				</div>