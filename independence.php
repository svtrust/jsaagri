
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/gallery.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
<link rel="stylesheet" href="Accordion/css/bootstrap.min.css">
  <script src="Accordion/js/jquery.min.js"></script>
  <script src="Accordion/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script>
$(document).ready(function(){
    $('.collapse.in').each(function(){
    $(this).parent().find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");
  });
    
  $('.collapse').on('shown.bs.collapse.in', function(){
    $(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
  }).on('hidden.bs.collapse.in', function(){
    $(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
  });       
});
</script>
 -->
<style type="text/css">
  table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
  
  .faq .panel-title > a:before {
    float: right !important;
    font-family: FontAwesome;
    content: "\f056";
    padding-right: 5px;
}
a.collapsed > .panel-heading > h3.panel-title:before {
    float: right !important;
    content: "\f055";
    color: #FFF;
    font-size: 26px;
    margin-top:-5px;
}
a >  .panel-heading > h3.panel-title:before {
    float: right !important;
    font-family: FontAwesome;
    content: "\f056";
    padding-right: 5px;
    color: #FFF;
    font-size: 26px;
     margin-top:-5px;
}
.panel-title {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 16px;
    color: #FFF;
}
</style>
<!-- <script>
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
</script> -->
<script>
     
</script>

 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <a class="collapsed"  data-toggle="collapse" data-parent="#accordion" href="#collapse1st" aria-expanded="false" aria-controls="collapse1st">
                              <div class="panel-heading" role="tab" id="headingOne">
                                <h3 class="panel-title">
                                    2019
                                </h3>
                            </div>
                          </a>
                            <div id="collapse1st" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                   <?php include '2020-independence-li.php';?>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="panel panel-default">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2nd" aria-expanded="false" aria-controls="collapse2nd">
                              <div class="panel-heading" role="tab" id="headingTwo">
                                <h3 class="panel-title">
                                    2020
                                </h3>
                            </div>
                          </a>
                            <div id="collapse2nd" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    
                                </div>
                            </div>
                        </div> -->
                        
                        
                    </div>

                         