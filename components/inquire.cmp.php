<?php
function inquirySubmit($conn){
    if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['inquiry-form'])) {
        $name = mysqli_real_escape_string($conn, $_POST["username"]); 
        $email = mysqli_real_escape_string($conn, $_POST["email"]); 
        $message = mysqli_real_escape_string($conn, $_POST["message"]);

        $sql = "INSERT INTO inquiries  (name, email, message)
		VALUES ('$name', '$email','$message')";
        if ($conn->query($sql) === TRUE) 
        {
                ini_set("SMTP","mail.supremecluster.com");
                ini_set("smtp_port","465");
                ini_set('sendmail_from', 'info@harisbenzz.com');
                ini_set('auth_username', 'info@harisbenzz.com');
                ini_set('auth_password', 'info@Harisbenzz2021');
                $toEmail = $_POST["email"];
                $mailHeaders = "From: " ." info@harisbenzz.com";
                if(mail($toEmail, "Thank You for Inquiry!.", "We will get back to you shortly.", "$mailHeaders"))
                {
                         //echo"<p class='success'>Contact Mail Sent.</p>";
                } 
                else {
                        // echo"<p class='Error'>Problem in Sending Mail.</p>";    
                     }
                $toharis= "info@harisbenzz.com";
                $fromUser = "From: " . $_POST["email"];
                if(mail($toharis, $_POST["phone"], $_POST["subject"], $_POST["message"], "$fromUser"))
                     {
                       //echo"<p class='success'>Contact Mail Sent.</p>";
                     } 
                     else 
                     {
                       // echo"<p class='Error'>Problem in Sending Mail.</p>";
                     }
        }
    }
}
inquirySubmit($conn);
?>
<section class="contact-section form-inquire pb-0  animated wow fadeInUp animated" data-wow-delay="100ms" data-wow-duration="1500ms">
        <div class="container">
            <div class="row animated fadeInLeft"> 
            <div class="col-lg-4 offset-lg-2 col-md-12 content-column">
                <div class="sec-title">
                    <h1 style = "margin-bottom: 40px; color: #FFFFFF;">  Inquire <span style="margin-top:12px;">About</span>  <br><span> Our Services  </span></h1>
                </div>
            </div>
                <div class="col-lg-8 offset-lg-2 col-sm-12 form-column">
                    <div class="contact-form-area">
                        <form method="post" action="" id="inquiry-form"> 
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="your name" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="your mail" required>
                                </div>  
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message here..."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button type="submit" name="inquiry-form">Inquire Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>