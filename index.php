<?php
include "header.php";

include "connection.php";

$wv="SELECT * FROM `cca`";
$st=mysqli_query($check,$wv);


?>
<!--header end-->


<!--hero section start-->

<section>
  <div class="container">
    <div class="row justify-content-center mb-8">
      <div class="col-12 col-lg-8 text-center">
        <!-- Heading -->
        <h4>Computer Courses <span class="typer text-primary" data-words="ACIT,ADIT,Computerized Accounting,Web Desingning,Web Development,Digital Marketing,2d & 3d Animation,Graphics Desingning,AutoCad,Revit,Vray,Lumion,Architectural Visualization,Game Development,Motion Graphics" ></span>
        <span style="font-size:1.2em;vertical-align:middle;" class="cursor" data-cursorDisplay="|" data-owner="some-id"></span></h4>
        <h1 class="display-4 mt-3 font-w-5">
            	Wellcome To Arman Teacher Institute.            
            </h1>
        <!-- Text -->
        <p class="lead text-muted">Arman Teacher is the Best It and Multimedia Institute in Karachi that is offering Computer, Digital Marketing, IT and Mulimedia, Engineering Courses in Karachi by the Best Industry Professionals Having Experience up to 10 years.</p>
      </div>
    </div>
    <!-- / .row -->
  
  <!-- / .container -->

</section>

<!--hero section end--> 


<!--body content start-->

<div class="page-content">



<!--Popular Course start-->

<section class="p-0">
  <div class="container">
  	<h1 style="color:red;font-weight: bold;">Most Popular Courses</h1>
    <div class="row">
      <div class="col-12">
        <div class="owl-carousel no-pb" data-dots="false" data-items="6" data-md-items="4" data-sm-items="3" data-xs-items="2" data-margin="30" data-autoplay="true">
          <div class="item">

            <div class="clients-logo">
             <a href="rivet.html"> <img class="img-fluid" src="images/13.jfif" alt="rivet"></a>

            </div>
          </div>
          <div class="item">
            <div class="clients-logo">
             <a href="autocad.html"> <img class="img-fluid" src="images/14.png" alt="autocad"></a>
            </div>
          </div>
          <div class="item">
            <div class="clients-logo">
             <a href="3D Studio Max.html"> <img class="img-fluid" src="images/15.png" alt="3D Studio Max"></a>
            </div>
          </div>
          <div class="item">
            <div class="clients-logo">
              <a href="Maya.html"><img class="img-fluid" src="images/16.png" alt="Maya"></a>
            </div>
          </div>
          <div class="item">
            <div class="clients-logo">
            <a href="Lumion.html">  <img class="img-fluid" src="images/17.png" alt="Lumion"></a>
            </div>
          </div>
          <div class="item">
            <div class="clients-logo">
           <a href="google sktech.html">   <img class="img-fluid" src="images/18.png" alt="google sktech"> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Popular Course end-->


<!--It and Multimedia Courses 1 Start-->
<section>
  <div class="container">
    <div class="row align-items-end mb-5">
      <div class="col-12 col-md-12 col-lg-4">
        <div> 
          <h2 class="mt-4 mb-0 font-w-5" style="font-weight: bold;">It and Multimedia Courses</h2>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-6 ms-auto">
        <div>
          <p class="lead mb-0">All types of businesses need access to development resources, so we give you the option to decide how much you need to use.</p>
        </div>
      </div>
    </div>
    <!-- / .row -->



    <div class="row">
<?php

    while($er=mysqli_fetch_assoc($st)){
?>
      <div class="col-12 col-lg-4 mb-6 mb-lg-0">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
         
          <img class="card-img-top shadow rounded" src="<?php echo $er['image'] ?>" alt="">
         <div class="card-body pt-0">
            <h2 class="h5 font-weight-medium">
               <?php echo $er['title'] ?>
              </h2>
            <p class="mb-5"><?php echo $er['description'] ?></p>
            <div class="d-flex justify-content-between align-items-center">
            	<div><a class="text-dark bg-light px-3 py-1 rounded" href="#"><?php echo $er['teacher name'] ?></a>
              </div>
              <a class="btn-link" href="Full Stack deve.html"><?php echo $er['button'] ?></a>
            </div>
            
          </div>

          <div></div>
        </div>
        <!-- End Blog Card -->
      </div>
      <?php

    }

?>





<!--about start-->

<section>
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-12 col-lg-6 order-lg-1 mb-8 mb-lg-0">
        <img src="images/3.jpg" alt="Computer Lab" class="img-fluid" style="height: 500px;object-fit: cover;">
      </div>
      <div class="col-12 col-lg-6 col-xl-5">
        <div class="mb-5"> <span class="h6 text-primary">
                  About Arman Teacher
              </span>
          <!-- <h2 class="mt-3 font-w-5">Arman Teacher Institute is the best institute in Karachi.</h2> -->

		 <h2 class="mt-3 font-w-5">Our Mission.</h2>          

          <p class="lead">Arman Teacher Institue is a dynamic Computer Institution of Professional Courses located in Karachi. Our mission is to craft and cultivate entrepreneurs […]</p>
        </div>

         <h2 class="mt-3 font-w-5">Our Vision.</h2>          

          <p class="lead">Arman Teacher Institute envisions being not only a superior higher education institution in Pakistan but also an incubator of innovative ideas and a hub for entrepreneurship […]</p>
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

<!--about end-->





<!--team start-->

<section class="custom-py-2 position-relative bg-dark parallaxie" data-bg-img="assets/images/bg/02.png">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-12 col-md-12 col-lg-8 mb-8 mb-lg-0">
        <div class="mb-8">
          <h2 class="mt-3 font-w-5 text-white">Meet Our Team Of Expert</h2>
          <p class="lead mb-0"></p>
        </div>
      </div>
    </div>
    <!-- / .row -->
    <div class="row justify-content-center">
      <div class="col">
        <div class="owl-carousel" data-dots="false" data-nav="true" data-items="3" data-md-items="2" data-sm-items="2" data-margin="30" data-autoplay="true">
          <div class="item">
            <div class="bg-primary-soft rounded text-center p-5">
              <div class="mb-3">
                <img class="img-fluid rounded-top d-inline" src="assets/images/team/01.png" alt="Male Character">
              </div>
              <div>
                <h5 class="mb-1 text-light">Sir Arman</h5>
                <small class="text-primary mb-3 d-block">Founder</small> 
                <p>Build a Beautiful, Clean & Modern Design website.</p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item"><a class="text-muted" href="#"><i class="la la-facebook h4"></i></a>
                  </li>
                  <li class="list-inline-item"><a class="text-muted h6" href="#"><i class="la la-dribbble h4"></i></a>
                  </li>
                  <li class="list-inline-item"><a class="text-muted h6" href="#"><i class="la la-twitter h4"></i></a>
                  </li>
                  <li class="list-inline-item"><a class="text-muted h6" href="#"><i class="la la-linkedin h4"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="bg-primary-soft rounded text-center p-5">
              <div class="mb-3">
                <img class="img-fluid rounded-top d-inline" src="assets/images/team/02.png" alt="female Character">
              </div>
              <div>
                <h5 class="mb-1 text-light">Miss Ruqia</h5>
                <small class="text-primary mb-3 d-block">Ceo</small> 
                <p>Build a Beautiful, Clean & Modern Design website.</p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item"><a class="text-muted" href="#"><i class="la la-facebook h4"></i></a>
                  </li>
                  <li class="list-inline-item"><a class="text-muted h6" href="#"><i class="la la-dribbble h4"></i></a>
                  </li>
                  <li class="list-inline-item"><a class="text-muted h6" href="#"><i class="la la-twitter h4"></i></a>
                  </li>
                  <li class="list-inline-item"><a class="text-muted h6" href="#"><i class="la la-linkedin h4"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="bg-primary-soft rounded text-center p-5">
              <div class="mb-3">
                <img class="img-fluid rounded-top d-inline" src="assets/images/team/03.png" alt="Male Character">
              </div>
              <div>
                <h5 class="mb-1 text-light">Sir Zain</h5>
                <small class="text-primary mb-3 d-block">Instructor</small> 
                <p>Build a Beautiful, Clean & Modern Design website.</p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item"><a class="text-muted" href="#"><i class="la la-facebook h4"></i></a>
                  </li>
                  <li class="list-inline-item"><a class="text-muted h6" href="#"><i class="la la-dribbble h4"></i></a>
                  </li>
                  <li class="list-inline-item"><a class="text-muted h6" href="#"><i class="la la-twitter h4"></i></a>
                  </li>
                  <li class="list-inline-item"><a class="text-muted h6" href="#"><i class="la la-linkedin h4"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="bg-primary-soft rounded text-center p-5">
              <div class="mb-3">
                <img class="img-fluid rounded-top d-inline" src="assets/images/team/02.png" alt="female Character">
              </div>
              <div>
                <h5 class="mb-1 text-light">Huzaifa</h5>
                <small class="text-primary mb-3 d-block">Instructor</small> 
                <p>Build a Beautiful, Clean & Modern Design website.</p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item"><a class="text-muted" href="#"><i class="la la-facebook h4"></i></a>
                  </li>
                  <li class="list-inline-item"><a class="text-muted h6" href="#"><i class="la la-dribbble h4"></i></a>
                  </li>
                  <li class="list-inline-item"><a class="text-muted h6" href="#"><i class="la la-twitter h4"></i></a>
                  </li>
                  <li class="list-inline-item"><a class="text-muted h6" href="#"><i class="la la-linkedin h4"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  
</section>

<!--team end-->


<!--faq end-->







<!--It and Multimedia Courses 1 start-->


</div>

<!--body content end--> 


</div>

<!-- page wrapper end -->

 
<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="las la-angle-up"></i></a></div>

<!--back-to-top end-->

<!-- inject js start -->

<script src="assets/js/theme-plugin.js"></script>
<script src="assets/js/theme-script.js"></script>

<!-- inject js end -->

</body>

</html>
 
<?php

include "footer.php";

        
?>