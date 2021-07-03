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

<?php include 'left-side-main-menu.php';?>


<!-- content -->
<div id="page-content-wrapper" class="header">
    <?php include 'admission-header.php';?>
    <div class="clearfix"></div>
    
    <div class="container-fluid">
        <!-- header -->
        <div id="top" data-toggle="top"></div>
        <a href="#menu-toggle" id="menu-toggle"><i class="lnr lnr-menu"></i></a>
       
        <!-- / header -->
     

 
        <!-- about -->
        <section id="about" style="margin-top:35px;">
            <div class="container">
              <h3>Course Offered<span class="text-primary">.</span></h3>
              <div class="services-block-three col-lg-4 col-md-6 margin-30px-bottom xs-margin-20px-bottom">
                        <div class="services-block-three">
                            <a href="javascript:void(0)">
                                <div class="padding-15px-bottom">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                </div>
                                <h4>B.Sc. (Hons) Agriculture</h4>
                                <p class="xs-font-size13 xs-line-height-22">4 years / 8 semesters.</p><br>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <h3 style="margin: 60px 0px 30px 0px;">System of Education<span class="text-primary">.</span></h3>
<p>The pattern of instruction and evaluation in the college is the “Semester course credit System” with English as the Medium of instruction.</p>
                    <h3 style="margin: 60px 0px 30px 0px;">Syllabus<span class="text-primary">.</span></h3>

<?php include 'syllabus.php';?>


<h3>Rules &amp; Regulations<span class="text-primary">.</span></h3>
<h4>Administrative Rules</h4>
<p>The following shall be the rules and regulations concerning the overall Administration Management of JSA College of Agriculture and Technology, Cuddalore. These rules shall be called “Administrative Rules”. These rules and regulations shall come into force on the day the Chairman and Managing Trustee gives his approval for this document.</p>
 <h4>Education</h4> 
 <ul class="bullet-points">
<li>The Dean shall be the overall authority for the education administration of JSA College of Agriculture and Technology, Cuddalore duly maintaining strict discipline among the staff, students, other stake holders etc. The Dean shall create and provide good learning atmosphere and congenial campus life for students.</li>
<li>However, the Dean’s authority shall be within the overall policy frame work laid by Board of Governance and Academic Council of JSA College of Agriculture and Technology, Cuddalore and Chairman and Managing Trustee of Shri Venkateswara Trust.</li>
<li>Whileexercising his/her authority in education administration, the Dean shall take counseling from the Secretary, JSA College of Agriculture and Technology, Cuddalore on every issue.</li>
<li>The Dean shall ensure effective and efficient functioning of the education system of College of Agriculture & Technology Cuddalore by taking the co-operation of all teaching and non-teaching staff and reaping the team spirit of the staff.</li>
<li>The Dean shall also strive to promote a healthy and conducive “Teacher – Taught Relationship” & a desirable and mutually beneficial “Institution – Parents Linkage”.</li>
<li>The Dean with the co-operation of the faculty shall ensure smooth flow of knowledge to students through appropriate curricula and co-curricular programmes.</li>
<li>The Dean shall also ensure desirable personality development of students through appropriate extra curricular activities</li>
<li>The Dean shall ensure fulfillment of the requirement of Tamil Nadu Agricultural University/affiliating institution while administering the education programme of JSA College ofAgriculture and Technology, Cuddalore.</li>
<li>The Dean shall also be responsible for managing various stocks as outlined in the Finance and Purchase Rules of JSA College of Agriculture and Technology, Cuddalore by assigning the responsibility of maintaining and accounting the stocks to various staff member.</li>
 </ul>   
    


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

<!-- / posts carousel -->

<!-- hide nav -->
<script src="js/hide-nav.js"></script>
<!-- / hide nav -->

<!-- / javascript -->
</body>


<!-- Mirrored from kingstudio.ro/demos/mywork/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 May 2020 01:14:41 GMT -->
</html>