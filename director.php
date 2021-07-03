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
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- css -->
<link href="css/style.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">
<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/linear-icons.css">

</head>

<body class="main-demo">

<!-- wrapper -->

<div id="wrapper">

<?php include 'administration-left-menu.php';?>


<!-- content -->
<div id="page-content-wrapper" class="header">
    <?php include 'admission-header.php';?>
    <div class="clearfix"></div>
    <?php include 'administration-fab-menu.php';?>
    <div class="container-fluid">
        <!-- header -->
        <div id="top" data-toggle="top"></div>
        <a href="#menu-toggle" id="menu-toggle"><i class="lnr lnr-menu"></i></a>
       
        <!-- / header -->
     

 
        <!-- about -->
        <section id="about" style="margin-top:35px;">
            <div class="container">
              <h3>Director Message<span class="text-primary">.</span></h3>
               <img src="images/org-3.jpg" alt="" class="img-achiev left-img" />
               <p style="color: #e67b02; font-size: 14px; font-weight: bold;"> <span style="font-size: 18px; color: #0c6596;">Dr.A.Kanmani Arun MBBS, BDDVL</span><br>Executive Director</p>
              <p>"A Women can only understand a women's requirement". With a great vision in understanding that Education is an amazing place for women, she always aimed at Women's Inventory for success Empowerment. She helped the team create a unique blend of academic and practical learning modules and inculcate contemporary modern day skills among women from rural background. The customized modules are penetrating yet flexible and can be moulded to fit different needs of students. Under her able guidance, college has formulated an education that fills the gap between existing skill set of a student and the required skill set for corporate.</p>
              <p>In order to create a sustainable and a tremendous world, women play a key significant role. Women can capable enough to handle the entire task simultaneously with their full power and they can do multitasking work at a time. With so many social challenges along with financial challenges, women were forced to be in limit in the family as well as in society.</p>
              <p>In which the quality of education is the important tool for women’s empowerment, prosperity, development and welfare. Our full intension is to develop future women in our society with strong enough to handle various situations in their life. So in our college all the faculty members are well trained to develop the girl students by giving valuable life skills training. Well, we are in responsible to give a world class education for our students. All our renewing and renovating programs are connected with academics, extracurricular, sports, NCC and NSS. And we always strive for improving women’s health by creating awareness and escalating their independency in the life.</p>


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