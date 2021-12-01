<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
    $name = mysqli_real_escape_string($conn, $_POST["name"]); 
    $email = mysqli_real_escape_string($conn, $_POST["email"]); 
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]); 
    $subject = mysqli_real_escape_string($conn, $_POST["subject"]); 
    $message = mysqli_real_escape_string($conn, $_POST["message"]); 

    $sql = "INSERT INTO feedbacks  (name, email, phone, subject, message)
			VALUES ('$name', '$email', '$phone', '$subject', '$message')";

	if ($conn->query($sql) === TRUE) {
        ini_set("SMTP","mail.gmail.com");
        ini_set("smtp_port","25");
        ini_set('sendmail_from', 'samclerkson@gmail.com');
        ini_set('auth_username', 'samclerkson@gmail.com');
        ini_set('auth_password', '0770700426');
        $toEmail = "ssebagalanathan@gmail.com";
            $mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
            if(mail($toEmail, $_POST["subject"], $_POST["mesaage"], $mailHeaders)) {
            // echo"<p class='success'>Contact Mail Sent.</p>";
            } else {
            // echo"<p class='Error'>Problem in Sending Mail.</p>";
            }
		?>
        <p class="artdeco-toast-message">Something went wrong. Please try using username and password.</p>
        <div classs="container p-5">
            <div class="row no-gutters">
                <div class="col-lg-5 col-md-12 ml-auto">
                    <div class="alert alert-success fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="True">&times;</span>
                        </button>
                        <h4 class="alert-heading">Message Sent</h4>
                        <p>Thanks for reaching out to us. We will get back to you shortly.</p>
                    </div>
                </div>
            </div>
        </div>
        	<!-- <script>
							window.alert("Message Sent Successfully");
							</script> -->
						<?php	
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
							?>
							<script>
							window.alert("Post Publisin Failed");
							//window.history.back();
							</script>
						<?php	
						}
}

?>