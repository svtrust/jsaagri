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
        <a href="#menu-toggle" id="menu-toggle"><i class="lnr lnr-menu"></i></a>
        <?php include 'carousel.php';?>
        <!-- / header -->
     

 
        <!-- about -->
        <section id="about" style="margin-top:35px;">
           
            <div class="container">
             <div class="page-header space-left">
                    <h3>Eligibility<!-- <span class="text-primary">.</span> --></h3>
                </div>
              <div class="col-md-12">

                <p>The candidate should have passed in all subjects in Academic Stream of the qualifying examination (Higher Secondary Course) with (10+2) years of schooling under Board of Higher Secondary Education of Government of Tamil Nadu or any other examination recognised as equivalent there to and fulfilling the following subjects of study.</p>
                <h4 style="margin-top:60px;">Higher Secondary / Equivalent – Academic Stream</h4>
                <div style="overflow-x:auto;">
  <table>
    <tr class="green-strip">
      <th>Group Name</th>
      <th>Subject 1</th>
      <th>Subject 2</th>
      <th>Subject 3</th>
      <th>Subject 4</th>
    </tr>
    <tr>
      <td>GROUP I</td>
      <td>Physics</td>
      <td>Chemistry</td>
      <td>Biology</td>
      <td>Maths</td>
    </tr>
    <tr>
      <td>GROUP II</td>
      <td>Physics</td>
      <td>Chemistry</td>
      <td>Biology</td>
      <td>Biochemistry or Biotechnology or Microbiology or  Home Science or Computer Science</td>
      
    </tr>
    <tr>
      <td>GROUP II A</td>
      <td>Physics</td>
      <td>Chemistry</td>
      <td>Botany</td>
      <td>Zoology</td>      
    </tr>
    
  </table>
</div>
<h3 style="margin-top:60px;">Minimum Qualifying Marks</h3>
<div style="overflow-x:auto;">
  <table>
    <tr class="green-strip">
      <th>Caste</th>
      <th>Merrit List</th>
      
    </tr>
    <tr>
      <td>Open Competition</td>
      <td>55% aggregate of all the four subjects</td>
      
    </tr>
    <tr>
      <td>Backward Class (BC)/Backward Class Christian (BCC)/Backward Class Muslin (BCM)</td>
      <td>50% aggregate of all the four subjects</td>
      
    </tr>
    <tr>
      <td>Most Backward Class (MBC)/Denotified Communities (DNC)</td>
      <td>45% aggregate of all the four subjects</td>
         
    </tr>
    <tr>
      <td>Scheduled Caste (SC)/Scheduled Tribe (ST)</td>
      <td>A pass in qualifying examination with qualifying subjects</td>
         
    </tr>
    
  </table>
</div>
<h3 style="margin-top:60px;">Age Limit</h3>
<ul class="bullet-points">
                  <li>Candidates should not have completed 21 years as on the first day of July of the admission year.</li>
                  <li>For Scheduled Caste and Scheduled Tribes there is no age limit.</li>
                  <li>For Physically challenged age limit is relaxable up to 26 years.</li>
                  
                </ul>
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