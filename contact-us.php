<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Agriculture">
<meta name="keywords" content="JSA College of Agriculture" />
<meta name="author" content="Agriculture">

<!-- favicon -->
<!-- <link rel="icon" href="images/favicon.png"> -->
<!-- page title -->
<title>JSA College of Agriculture Research Technology</title>
<!-- bootstrap css -->

<!-- css -->

<link href="css/animate.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">
<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/linear-icons.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>

<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- css -->
<link href="css/style.css" rel="stylesheet">
<link href="css/gallery.css" rel="stylesheet">

</head>

<body class="main-demo">

<!-- wrapper -->

<div id="wrapper">

<!-- content -->
<div id="page-content-wrapper" class="header">
    <?php include 'admission-header.php';?>
    <div class="clearfix"></div>
   <?php include 'main-menu.php'; ?>
      <div class="clearfix"></div>
    <div class="container-fluid">
        <!-- header -->
        <div id="top" data-toggle="top"></div>
       
        <?php include 'carousel.php';?>
        <!-- / header -->
     

 
        <!-- about -->
        <section id="about" style="margin-top:35px;">
           
            <div class="container">
              
             
                <div class="col-md-6">
                   <div class="page-header space-left">
                    <h3>Reach us<!-- <span class="text-primary">.</span> --></h3>
                </div>
                  <div class="col-md-1 col-xs-1">
                    <i class="fa fa-map-marker" aria-hidden="true" style="float: left; font-size: 26px; margin-right: 25px;"></i>
                  </div>
                  <div class="col-md-11 col-xs-11">
                    <p>JSA College of Agriculture and Technology<br /> Avatti, Tholudur, <br />Cuddalore(Dist.) , <br />Tamil Nadu &ndash; 606 108.
                  </div>
                 
                  <div class="col-md-1 col-xs-1">
                    <i class="fa fa-mobile" aria-hidden="true" style="float: left; font-size: 26px; margin-right: 25px;"></i>
                  </div>
                  <div class="col-md-11 col-xs-11">
                    <p><a href="tel:+919566223456"> +91 95662 23456</a></p>
                    <p><a href="tel:+917305057759"> +91 73050 57759</a></p>
                    <!--<p><a href="tel:+919443370609"> +91 94433 70609</a></p>-->
                    <!-- <p><a href="tel:+918300085652"> +91 83000 85652</a></p> -->
                  </div>
                  <div class="col-md-1 col-xs-1">
                    <i class="fa fa-envelope-o" aria-hidden="true" style="float: left; font-size: 22px; margin-right: 25px;"></i>
                  </div>
                  <div class="col-md-11 col-xs-11">
                    <!--<p><a href="mailto:deanjsacat@gmail.com"> deanjsacat@gmail.com</a></p>-->
                    <!--<p><a href="mailto:jsacatdeanagri@gmail.com"> jsacatdeanagri@gmail.com</a></p>-->
                    <p><a href="mailto:deanjsacat@tnau.ac.in"> deanjsacat@tnau.ac.in</a></p>
                  </div>
                </div>
                <div class="col-md-6">
                   <div class="page-header space-left">
                    <h3>Locate us<!-- <span class="text-primary">.</span> --></h3>
                </div>
                  <iframe class="img-achiev" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15640.86293894393!2d79.0402293!3d11.4643485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa0aa952d9748b899!2sJSA%20college%20of%20Agriculture%20and%20Technology!5e0!3m2!1sen!2sin!4v1591644913546!5m2!1sen!2sin" width="100%" height="320" frameborder="0" style="" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="clearfix"></div>
             <div class="page-header space-left">
                    <h3>Enquiry Form<!-- <span class="text-primary">.</span> --></h3>
                </div>
              <div class="col-md-12">

               <?php include 'enquiry.php';?>

          </div>
         



     
    


 <!-- <ul class="nav nav-tabs">
   
    <li class="active"><a data-toggle="tab" href="#menu1">Vision &amp; Mission</a></li>
    <li><a data-toggle="tab" href="#menu2">Goal</a></li>
    <li><a data-toggle="tab" href="#menu3">Strategy</a></li>
   
  </ul> -->

                

            </div>
            
        </section>
        <!-- / about -->

      

        <!-- experience -->
        
        <!-- / experience -->

        <!-- portfolio section 3col -->
        
        <!-- / portfolio section 3col -->

        <!-- journal -->
       
        <!-- / journal -->

        <!-- contact -->
       <?php include'footer.php';?>
        <!-- / contact -->

        <!-- / light-footer -->

        <!-- scroll to top -->
        <a href="#top" class="scroll-to-top page-scroll is-hidden" data-nav-status="toggle"><i class="fa fa-angle-up"></i></a>
        <!-- / scroll to top -->

    </div><!-- / container-fluid -->
</div><!-- / page-content-wrapper -->

</div><!-- / wrapper -->

<!-- javascript -->
<!-- <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> -->

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<!-- / menu toggle script -->

<!-- nav scroll -->
<script src="js/scrolling-nav.js"></script>
<script>
$(".sidebar-nav a").on("click", function(){
   $(".sidebar-nav").find(".active").removeClass("active");
   $(this).parent().addClass("active");
});
</script>
<!-- / nav scroll -->

<!-- contact form -->
<script src="js/validator.min.js" type="text/javascript"></script>
<script src="js/form-scripts.js" type="text/javascript"></script>
<!-- / contact form -->

<!-- facts counter -->
<script src="js/jquery.countTo.js"></script>
 <script type="text/javascript">
      $('.timer').countTo({
        refreshInterval: 60,
        formatter: function (value, options) {
          return value.toFixed(options.decimals);
        },
      });
</script>
<!-- / facts counter -->

<!-- portfolio script -->
<script src="js/jquery.shuffle.min.js"></script>
<script src="js/custom.js"></script>
<!-- / portfolio script -->

<!-- posts carousel -->

<!-- / posts carousel -->

<!-- hide nav -->
<script src="js/hide-nav.js"></script>
<!-- / hide nav -->

<!-- / javascript -->
</body>


<!-- Mirrored from kingstudio.ro/demos/mywork/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 May 2020 01:14:41 GMT -->
</html>