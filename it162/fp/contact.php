<?php include 'includes/header.php'; ?>
<!--<p>Contact Form Goes Here</p>-->
        <?php
        include 'includes/contact_include.php'; #site keys & code here
                $toAddress = "myitskillsnahum@yahoo.com";  //place your/your client's email address here
                $toName = "Nahum"; //place your client's name here
                $website = "IT162 CONTACT FORM";  //place NAME of your client's website
                //echo loadContact('simple.php');#demonstrates a simple contact form
                echo loadContact('multiple.php');#demonstrates multiple form elements
	?>
<?php include 'includes/footer.php'; ?>