<?php
  
if($_POST) {
    $persons_name = "";
    $persons_number = "";
    $persons_email = "";
    $persons_chosen_date = "";
    $persons_package = "";
    $email_body = "<div>";
      
    if(isset($_POST['persons_name'])) {
        $persons_name = filter_var($_POST['persons_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Person Name:</b></label>&nbsp;<span>".$persons_name."</span>
                        </div>";
    }

    if(isset($_POST['persons_number'])) {
        $persons_name = filter_var($_POST['persons_number'], FILTER_SANITIZE_NUMBER_INT);
        $email_body .= "<div>
                           <label><b>Contact Number:</b></label>&nbsp;<span>".$persons_number."</span>
                        </div>";
    }
 
    if(isset($_POST['persons_email'])) {
        $persons_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['persons_email']);
        $persons_email = filter_var($persons_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Person Email:</b></label>&nbsp;<span>".$persons_email."</span>
                        </div>";
    }

    if(isset($_POST['persons_chosen_date'])) {
        $persons_chosen_date = preg_replace("([^0-9])", "", $_POST['persons_chosen_date']);
        $email_body .= "<div>
                           <label><b>Booking Date:</b></label>&nbsp;<span>".$persons_chosen_date."</span>
                        </div>";
    }

    if(isset($_POST['persons_package'])) {
        $concerned_department = filter_var($_POST['persons_package'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Package:</b></label>&nbsp;<span>".$persons_package."</span>
                        </div>";
    }

    $mail_body = "<div><label><b>Visitor Name:</b></label>&nbsp;<span>".$_POST['persons_name']."</span></div><div><label><b>Contact Number:</b></label>&nbsp;<span>".$_POST['persons_number']."</span></div><div><label><b>Visitor Email:</b></label>&nbsp;<span>".$_POST['persons_email']."</span></div><div><label><b>Booking Date:</b></label>&nbsp;<span>".$_POST['persons_chosen_date']."</span></div><div><label><b>Package:</b></label>&nbsp;<span>".$_POST['persons_package']."</span></div>";




    $subject = "Mail regarding booking";
    
      
    $email_body .= "</div>";
 
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=iso-8859-1' . "\r\n"
    .'From: ' . $persons_email . "\r\n" 
    .'X-Mailer: PHP/' .phpversion();

      
    if(mail('rishabhm1974@gmail.com', $subject ,$mail_body, $headers)) {
        $final_response =  "<p>Thank you for contacting us, $persons_name. You will get a reply within 24 hours.</p>";
        var_dump(http_response_code(200));
    } else {
        $final_response = '<p>We are sorry but the email did not go through.</p>';
        var_dump(http_response_code(404));
        
    }
      
} else {
    $final_response = '<p>Something went wrong</p>';
    var_dump(http_response_code(404));
}
?>