<?php include "includes/header.php"?>



<?php
        

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "ameerkiani@icloud.com";  //place your/your client's email address here
        $toName = "Hamza Kiani"; //place your client's name here
        $website = "ameercodes.com/web120";  //place NAME of your client's website

        echo loadContact('multiple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

</section>

<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Basic Website Design Cycle</h3>
    <p>Provide at least 3 (linked) resources that help you and/or your web team with steps found in very basic website design and development cycle. For example, client surveys, wireframing tools, etc.</p>
    <p>Here's a website to help get you started, <a href="https://business.tutsplus.com/articles/how-to-extract-the-facts-with-a-web-design-client-questionnaire--fsw-1830" target="_top">Web Design Client Questionnaire</a></p>
<?php include "includes/footer.php"?>