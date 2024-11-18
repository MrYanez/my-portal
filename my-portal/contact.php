
<?php include 'portal-config.php';?>
<?php include 'includes/header.php'; ?>
<h2 class="subheader">Contact Me</h2> 
<!--<p>Contact Form Goes Here</p>-->

<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "mytechskills@yahoo.com"; "myeduyanez@gmail.com";  //place your/your client's email address here
        $toName = "Nahum"; //place your client's name here
        $website = "IT162 CONTACT FORM";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
<?php include 'includes/footer.php'; ?>