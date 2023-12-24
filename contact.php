<?php

include "header.php";
include "connection.php";




?>


<!--hero section start-->

<section class="position-relative">
  <div id="particles-js"></div>
  <div class="container">
    <div class="row  text-center">
      <div class="col">
        <h1>Contact Us</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
            <li class="breadcrumb-item"><a class="text-dark" href="#">Home</a>
            </li>
           
            <li class="breadcrumb-item">Contacts</li>
          
          </ol>
        </nav>
      </div>
    </div>
    <!-- / .row -->
  </div>
  <!-- / .container -->
</section>

<!--hero section end--> 


<!--body content start-->

<div class="page-content">
<section>
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-8">
        <div class="mb-5">
          <h2 class="mt-4 mb-0">Arman Teacher Institute</h2>
          <p class="lead mb-0">Get in touch and let us know how we can help. Fill out the form and we’ll be in touch as soon as possible.</p>
        </div>
          <form   method="POST">
            <div class="messages"></div>
            <div class="form-group col-md-12">
              <input id="form_name" type="text" name="fname" class="form-control" placeholder="First Name" required="required" data-error="Name is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-12">
              <input id="form_name1" type="text" name="lname" class="form-control" placeholder="Last Name" required="required" data-error="Name is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-12">
              <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="Valid email is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-12">
              <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone" required="required" data-error="Phone is required">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-12">
              <select name="group" class="form-select form-control">
                <option>- Select Department</option>
                <option value="it">Information of IT</option>
                <option value="engineering">Engineering</option>
                <option value="animation">Animation</option>
                <option value="freelancing">FreeLancing</option>
               
              </select>
            </div>
            <div class="form-group col-md-12">
              <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Computer Coursesr" required="required" data-error="Subject is required">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-md-12">
              <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="3" required="required" data-error="Please,leave us a message."></textarea>
              <div class="help-block with-errors"></div>
            </div>
            <div class="col-md-12 mt-4">
            
              <input type="submit" class="btn btn-primary" value="Send Messages" name="button">
            
            </div>
          </form>
    </div>
     
    <?php




        

if (isset($_POST['button'])) {
   
            $fn=$_POST['fname'];
            $ln=$_POST['lname'];
            $el=$_POST['email'];
            $pn=$_POST['phone'];
            $sub=$_POST['subject'];
            $mess=$_POST['message'];
            $gr=$_POST['group'];

  $query="INSERT INTO `contact_data`(`fname`, `lname`, `email`, `phone`, `department`, `course`, `message`) VALUES ('$fn','$ln','$el','$pn','$sub','$mess','$gr')";
    $run = mysqli_query($check,$query);
//     $body= "<b> USER:</b>$fn<br> 
//                      <b> fname: </b> $fn<br> 
//                      <b> lname: </b> $ln <br> <b> email: </b> $el <br> 
//                       <b> phone: </b> $pn
//                       <b> _subj: </b> $sub <br> <b> message: </b>$mess <br> 
//                       ";
//                       $headers="FROM:$el";
    

// if(mail("atharh1678@gmail.com","CONTACT FORM",$body,$headers)){
//       <script> /*
//       var text = document.querySelector("#sent");

//       text.style.opacity="1";
//       setTimeout(function(){
//         text.style.opacity="0";
//        },6000)
      
//  </script>
// <?php
// }else{
   
    
// }

}
        
            



    ?>



    <div class="col-lg-4">
      <div class="mb-5" style="margin-top: 18px">
          <svg class="feather feather-map-pin" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#1360ef" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          <h4 class="mt-3">Address:</h4>
            <span class="text-dark">FL 4/19 2nd Floor, Main Rashid Minhas Rd, Block 5 Gulshan-e-Iqbal, Karachi, Karachi.</span>
        </div>
        <div class="mb-5">
          <svg class="feather feather-mail" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#1360ef" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          <h4 class="mt-3">Email Us</h4>
         <a href="mailto:akramarman@gmail.com">akramarman@gmail.com</a>
        </div>
        <div>
          <svg class="feather feather-phone-call" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#1360ef" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          <h4 class="mt-3">Phone Number</h4>
         <a href="tel:0341-2280528">0341-2280528</a>
         
        </div>
    </div>
    </div>
    
  </div>
</section>

<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
        <script>
          var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"","cornerRadius":80,"marginBottom":80,"marginLeft":20,"marginRight":27,"btnPosition":"right","whatsAppNumber":"+923412280528","welcomeMessage":"","zIndex":999999,"btnColorScheme":"light"};
          window.onload = () => {
            _waEmbed(wa_btnSetting);
          };
        </script>

</div>

<!--body content end--> 




<!--footer end-->

</div>

<!-- page wrapper end -->
 
<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="las la-angle-up"></i></a></div>

<!--back-to-top end-->

<!-- inject js start -->


<script src="https://smtpjs.com/v3/smtp.js"></script>

<script src="assets/js/theme-plugin.js"></script>
<script src="assets/js/theme-script.js"></script>



  
 

</body>

</html>


<?php

include "footer.php";

        
?>