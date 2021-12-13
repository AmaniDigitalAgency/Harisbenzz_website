<?php 

include "dbh.inc.php";

		$post_id = $_GET["post_id"];
		$sql = "DELETE FROM posts WHERE post_id = '$post_id' ";

		if ($conn->query($sql) === TRUE) { 
		?>
			<script>
			window.alert("Post Deleted Successfully");
			window.location.href = "../";
			</script>
		<?php	
				
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	?>
			