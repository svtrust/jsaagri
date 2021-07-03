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

<style type="text/css">
.card
{
  height: 350px;
  width: 250px;
}
.staff_dep
{
  margin-top: 10px;
}
.staff_dep .btn 
{
  border-radius: 20px;
}

.resumelink
{

 border: none;
 border-bottom: 1px;
 border-radius:0%;
}
.resumelink:hover
{
 border-bottom: groove;
 border-radius:10%;
}

</style>
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

        <!-- <div class = 'staff_dep'>
          <div class="btn btn-primary dep_wise_btn" data-dep="CROP MANAGEMENT"> Crop Management</div>
          <div class="btn btn-primary dep_wise_btn" data-dep="CROP IMPROVEMENT"> Crop Improvment</div>
          <div class="btn btn-primary dep_wise_btn" data-dep="CROP PROTECTION"> Crop Protuction</div>
          <div class="btn btn-primary dep_wise_btn" data-dep="HORTICULTURE"> Horticulture</div>
          <div class="btn btn-primary dep_wise_btn" data-dep="SOCIAL SCIENCES"> Social Sciences</div>
        </div> -->
        <!-- / header -->

        <style>
        .staff-image
        {
          height: 250px;
          width: 230px;
        }
        </style>
        <div class="container" style="margin-top: 40px;">

          <div class="row staff_details_con">

            
            
          </div>
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


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal with Dynamic Content</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>





<!-- javascript -->
<!-- <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> -->

<script>


$(document).ready(function(){


  $('.resume').on('click',function(){
    $('.modal-body').load($(this).attr("href"),function(){
        $('#myModal').modal({show:true});
    });
});



var staffdetails='';

    <?php include("staffs.php");?>

var tempdep= "";
var i=0;

var alldata =[];

    <?php 
    if(isset($_GET["dep"]))
    {
    ?>
    $(staffs).each(function(e){

      
     if('<?php echo $_GET["dep"];?>'==staffs[e].dptm)
    {
     if(staffs[e].resume!='#')
      resumelink="<a href='staffdetails/"+staffs[e].resume+"' class='btn btn-primary resumelink' target='_blank'>View resume</a>";
      else
      resumelink="<a href='"+staffs[e].resume+"' class='btn btn-primary resumelink' >View resume</a>";


    if(tempdep!=staffs[e].depTeam)
    {
      tempdep = staffs[e].depTeam;
      staffdetails+="</div><div class='row' ></hr><h3><u>"+tempdep+"</u></h3></hr>";
    }

      var datalist = "<div class='col-sm-3'><div class='card'><div class='card-body'><div class='col-md-12 staff-image-div'><img src='images/"+staffs[e].photo+"' class='staff-image'></div><h7 class='card-title'>"+staffs[e].name+"</h7><p>"+staffs[e].position+" <br>("+staffs[e].dep+") </p>"+resumelink+"</br></div></div></div>";

      alldata[i]=datalist;

      i++;
        staffdetails += "<div class='col-sm-3'><div class='card'><div class='card-body'><div class='col-md-12 staff-image-div'><img src='images/"+staffs[e].photo+"' class='staff-image'></div><h7 class='card-title'>"+staffs[e].name+"</h7><p>"+staffs[e].position+" <br>("+staffs[e].dep+") </p>"+resumelink+"</br></div></div></div>";


    }


    });
<?php
}
else
{
?>
 $(staffs).each(function(e){

      
      if(staffs[e].resume!='#')
      resumelink="<a href='staffdetails/"+staffs[e].resume+"' class='btn btn-primary resumelink' target='_blank'>View resume</a>";
      else
      resumelink="<a href='"+staffs[e].resume+"' class='btn btn-primary resumelink' >View resume</a>";


    if(tempdep!=staffs[e].depTeam)
    {
      tempdep = staffs[e].depTeam;
      staffdetails+="</div><div class='row' ></hr><h3><u>"+tempdep+"</u></h3></hr>";
    }

      var datalist = "<div class='col-sm-3'><div class='card'><div class='card-body'><div class='col-md-12 staff-image-div'><img src='images/"+staffs[e].photo+"' class='staff-image'></div><h7 class='card-title'>"+staffs[e].name+"</h7><p>"+staffs[e].position+" <br>("+staffs[e].dep+") </p>"+resumelink+"</br></div></div></div>";

      alldata[i]=datalist;

      i++;
        staffdetails += "<div class='col-sm-3'><div class='card'><div class='card-body'><div class='col-md-12 staff-image-div'><img src='images/"+staffs[e].photo+"' class='staff-image'></div><h7 class='card-title'>"+staffs[e].name+"</h7><p>"+staffs[e].position+" <br>("+staffs[e].dep+") </p>"+resumelink+"</br></div></div></div>";




    });
<?php
}
?>




    staffdetails+="</div>";

    $(".staff_details_con").html(staffdetails);

   

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