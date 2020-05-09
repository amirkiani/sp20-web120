<!-- see Bill's training video to learn how to add and use a config.php file -->

<?php include "includes/header.php";?>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "ameerkiani@icloud.com";  //place your/your client's email address here
        $toName = "Hamza Kiani"; //place your client's name here
        $website = "ameercodes.com/web120";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

</section>

<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Right Column</h3>
 <img src="images/tablet.jpg" class="tablet" alt="Picture of Ameer at Gasworks Park" />

</aside>
<!-- END RIGHT COL -->
 
<?php include "includes/footer.php";?>



