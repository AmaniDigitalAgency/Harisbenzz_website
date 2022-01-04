<?php
require "dbh.inc.php";
function contactSubmit($conn){
    if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['submit-form'])) {
        $name = mysqli_real_escape_string($conn, $_POST["name"]); 
        $email = mysqli_real_escape_string($conn, $_POST["email"]); 
        $phone = mysqli_real_escape_string($conn, $_POST["phone"]); 
        $subject = mysqli_real_escape_string($conn, $_POST["subject"]); 
        $message = mysqli_real_escape_string($conn, $_POST["message"]);

        $sql = "INSERT INTO feedbacks  (name, email, phone, subject, message)
		VALUES ('$name', '$email', '$phone', '$subject', '$message')";
        if ($conn->query($sql) === TRUE) 
        {
                ini_set("SMTP","mail.supremecluster.com");
                ini_set("smtp_port","465");
                ini_set('sendmail_from', 'info@harisbenzz.com');
                ini_set('auth_username', 'info@harisbenzz.com');
                ini_set('auth_password', 'info@Harisbenzz2021');
                $toEmail = $_POST["email"];
                $mailHeaders = "From: " ." info@harisbenzz.com";
                if(mail($toEmail, "Thank You!!.", "Thank you for reaching out to harisbenzz. We will get back to you shortly.", "$mailHeaders"))
                {
                         //echo"<p class='success'>Contact Mail Sent.</p>";
                } 
                else {
                        // echo"<p class='Error'>Problem in Sending Mail.</p>";    
                     }
                $toharis= "info@harisbenzz.com";
                $fromUser = "From: " . $_POST["email"]." ". $_POST["phone"];
                if(mail($toharis, $_POST["subject"], $_POST["message"], "$fromUser"))
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
contactSubmit($conn);
?>