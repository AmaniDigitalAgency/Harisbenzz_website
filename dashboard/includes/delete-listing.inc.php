<?php 

include "dbh.inc.php";

		$listing_id = $_GET["listing_id"];
		$sql = "DELETE FROM images WHERE listing_id = '$listing_id' ";

		if ($conn->query($sql) === TRUE) {
			
			$sql = "DELETE FROM listings WHERE listing_id = '$listing_id' ";

				if ($conn->query($sql) === TRUE) {
					?>
					<script>
					window.alert("listing Deleted Successfully");
					window.location.href = "../";
					</script>
				<?php	
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				} 
				
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	?>
			