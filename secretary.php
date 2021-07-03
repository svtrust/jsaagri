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
    <div class="container-fluid">
        <!-- header -->
        <div id="top" data-toggle="top"></div>
       <?php include 'carousel.php';?>
       
        <!-- / header -->
     

 
        <!-- about -->
        <section id="about" style="margin-top:35px;">
            <div class="container">
              <h3>Secretary <span class="text-primary">.</span></h3>
               <img src="images/org-2.jpg" alt="" class="img-achiev left-img" />
               <p style="color: #e67b02; font-size: 14px; font-weight: bold;"> <span style="font-size: 18px; color: #0c6596;">Dr.Arun JSA B.E, MBA,PGCPE,Ph.D</span><br>Secretary &amp; Correspondent</p>
              <p>Completed Bachelor of Engineering (Civil) in 2012 at PSG College of Technology, Coimbatore, MBA in Mahatma Gandhi University, Meghalaya and Post Graduate Degree in Management, in International Management Institute, Brussels, Belgium.</p>
              <p>Born and brought up in an Agriculture family and developed interest in the field of Agriculture. With a view of supporting agricultural development he aimed at educating the youngsters about the latest technologies on agriculture, more specifically in socio economically backward areas. Through “JSA College of Agriculture and Technology” he accomplishes his objectives in achieving increase in agricultural production by teaching the innovative technologies utilising efficient faculties.</p>
              <p>His vision is to ensure our young graduates are well versed with improved techniques.Has very good organisational skills and communication skills. He works towards helping others and anticipate what might be needed for the future for the development of the organisation. He supports various aspects of the business, often taking care of administrative tasks like managing schedules, organising events, etc. He ensures that all efforts of the college are focussed on providing the best facilities and opportunities to students, to enable them to learn and grow in a congenial and rewarding environment.</p>


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



<!-- menu toggle script -->
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
<script src="js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
      $("#posts-carousel").owlCarousel({
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });

    });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function(){
      $(this).siblings(".card-header").find(".btn i").html("remove");
      $(this).prev(".card-header").addClass("highlight");
    });
    
    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
      $(this).parent().find(".card-header .btn i").html("remove");
    }).on('hide.bs.collapse', function(){
      $(this).parent().find(".card-header .btn i").html("add");
    });
    
    // Highlight open collapsed element 
    $(".card-header .btn").click(function(){
      $(".card-header").not($(this).parents()).removeClass("highlight");
      $(this).parents(".card-header").toggleClass("highlight");
    });
  });
</script>
<!-- / posts carousel -->

<!-- hide nav -->
<script src="js/hide-nav.js"></script>
<!-- / hide nav -->

<!-- / javascript -->
</body>


<!-- Mirrored from kingstudio.ro/demos/mywork/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 May 2020 01:14:41 GMT -->
</html>