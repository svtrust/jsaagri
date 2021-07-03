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
              <h3>Principal Message<span class="text-primary">.</span></h3>
               <img src="images/org-3.jpg" alt="" class="img-achiev left-img" />
               <p style="color: #e67b02; font-size: 14px; font-weight: bold;"> <span style="font-size: 18px; color: #0c6596;">Dr. K . Thanunathan Ph.D</span><br>Principal</p>
              <p>Agriculure is the backbone of Indian economy and more than 60% of livelihoods depends on Agriculture. In order to serve the farming community, the noble hearted philanthropist and a great visionary<br /> Dr. K . Jayaraman,Chief Engineer (Retd), Highways, Tamilnadu    established, a seat of learning for the farm graduates in the downtrodden, literally backward district of Cuddalore during 2015.</p>
              <p>The campus is spread over an area of more than 130 acres of land with well furnished class rooms and laboratories equipped with modern state of the art instruments. Advances in information and communication technologies are effectively used in academic transactions and e-governance. In addition to teacher assisted learning, instructional farm, orchard and dairy serve as field laborotories and enhance the practical skill of students. </p>
              <p>Well qualified and experienced faculties dedicate their services to place our graduates in the forefront of agricultural revolution. For over all development of personality of the students, the campus has a sprawling playground and auditorium which provide opportunities for extra curricular activities.</p>
              <p>Learning by Doing is the basic principle of JSACAT.The outcome based curriculum focuses on developing employers rather than employees. The management is very keen in developing entrepreneurial skills of the student and ensure that no stone is unturned in the delivery of knowledge, skill and attitude. Residential facilities offer scope for continuous and comfortable learning.  As a part of Institutional Social Responsibility, the institute involves the students in out reach programmes like, health camp, awareness programmes, Rural Awareness and Work Experience programmes in the adopted villages. </p>
              <p>I am sure that it is fortunate to get trained at JSACAT, whose motto is to develop quality human resources to serve the country at large. The institute looks forward to associate with you in their efforts to develop the nation. </p>

              <p>I wish all the students aspiring to start their professional career in JSACAT the best of every thing to become proud citizens of our country.</p>
              <p>Thank You </p>



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