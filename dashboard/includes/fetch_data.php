<?php

function getalllistings($table){
	require("includes/dbh.inc.php");
	$sql="SELECT * FROM $table ORDER BY listing_id ASC LIMIT 38";
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
			
			echo'<tr>
						<td>'.$all['listing_title'].'</td>
						<td>'.$all['listing_location'].'</td>
						<td>'.$all['listing_price'].'</td>
						<td>
							<div class="form-button-action"> 
								<a href = "includes/delete-listing.inc.php?listing_id='.$all['listing_id'].'" type="button" data-toggle="tooltip" title="" class="btn btn-sm  btn-danger" data-original-title="Remove">
									<i class="fa fa-times"></i> Delete 
								</a>
							</div>
						</td>  
					</tr>' ;
		$i++;
		}
	}

	mysqli_close($conn); 
}


function getallposts($table){
	require("includes/dbh.inc.php");
	$sql="SELECT * FROM $table ORDER BY post_id ASC LIMIT 38";
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
		foreach ($result as $alllposts => $all) {
			
			echo'<tr>
						<td>'.$all['post_title'].'</td>
						<td>'.$all['post_category'].'</td>
						<td>'.$all['post_date'].'</td>
						<td>
							<div class="form-button-action"> 
								<a href = "includes/delete-post.inc.php?post_id='.$all['post_id'].'" type="button" data-toggle="tooltip" title="" class="btn btn-danger btn-sm" data-original-title="Delete Post">
									<i class="fa fa-times"></i> DELETE 
								</a>
							</div>
						</td>  
					</tr>' ;
		$i++;
		}
	}

	mysqli_close($conn); 
}

?>