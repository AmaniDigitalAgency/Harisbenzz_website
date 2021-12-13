<?php 

include "dbh.inc.php";
		
			
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
				$post_title = mysqli_real_escape_string($conn, $_POST["post_title"]); 
				
				$post_category = mysqli_real_escape_string($conn, $_POST["post_category"]); 
				
				$post_tags = mysqli_real_escape_string($conn, $_POST["post_tags"]);  
				
				$post_details = mysqli_real_escape_string($conn, $_POST["post_details"]); 


			if (isset($_FILES['post_pic']) && $_FILES['post_pic']['error'] === UPLOAD_ERR_OK)  {    
			// get details of the uploaded file    
				$fileTmpPath = $_FILES['post_pic']['tmp_name'];    
				$fileName = $_FILES['post_pic']['name'];    
				$fileSize = $_FILES['post_pic']['size'];    
				$fileType = $_FILES['post_pic']['type'];    
				$fileNameCmps = explode(".", $fileName);    
				$fileExtension = strtolower(end($fileNameCmps));    
				// sanitize file-name    
				$newFileName = md5(time() . $fileName) . '.' . $fileExtension;     
				// check if file has one of the following extensions    
				$allowedfileExtensions = array('jpg', 'gif', 'png' );    
				
				if (in_array($fileExtension, $allowedfileExtensions))    {    
				// directory in which the uploaded file will be moved      
				$uploadFileDir = '../post-uploads/';     
				$dest_path = $uploadFileDir . $newFileName;       
					if(move_uploaded_file($fileTmpPath, $dest_path))       {        
						?>
							<script>
							// window.alert("Image Upload Success");
							</script>
						<?php	

						$sql = "INSERT INTO posts  (post_title, post_category, post_tags, post_details, post_picture, post_date )
							VALUES ('$post_title', '$post_category', '$post_tags', '$post_details', '$newFileName', NOW() )";

						if ($conn->query($sql) === TRUE) {
							?>
							<script>
							window.alert("post Published Successfully");
							window.location.href = "../";
							</script>
						<?php	
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
							?>
							<script>
							window.alert("Post Publishing Failed");
							//window.history.back();
							</script>
						<?php	
						}

					}      
					else      {       
						?>
							<script>
							window.alert("Cant Find Folder");
							window.history.back();
							</script>
						<?php	  
					}   										
				}   else    {     
					?>
							<script>
							window.alert("Unsupported File Type");
							//window.history.back();
							</script>
						<?php	  
				} 
			}  else  {    
				?>
							<script>
							window.alert("Post Publishing Failed");
							//window.history.back();
							</script>
						<?php	
				//echo 'There is some error in the file upload. Please check the following error.<br>'. $_FILES['post_pic']['error'];  
			}
		} else {
			?>
							<script>
							window.alert("Fill In Form First");
							window.history.back();
							</script>
						<?php	
		}