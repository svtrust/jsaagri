<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Accordion Menu with Plus Minus Icon</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link href="css/gallery.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
<script src="Accordion/js/jquery-3.3.1.slim.min.js"></script>
<script src="Accordion/js/popper.min.js"></script>
<script src="Accordion/js/bootstrap.min.js"></script>
<style type="text/css">
	.event-accordion {
    line-height: 28px;
  }
	

</style>
<script>
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
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="accordion" id="accordionExample">
        
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="clearfix mb-0">
              <a class="btn btn-link event-accordion" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">2019-2020 <i class="material-icons">add</i></a>                  
            </h2>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <div class="col-md-12">
                <?php include '2020-independence-li.php';?>
              </div>
              
                    <div class="clearfix"></div>
            </div>
          </div>
        </div>
				<!-- <div class="card">
					<div class="card-header" id="headingTwo">
						<h2 class="clearfix mb-0">
							<a class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">2018-2019 <i class="material-icons">add</i></a>									
						</h2>
					</div>
					<div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">
							<div class="col-md-12">
								 
							</div>
							
					          <div class="clearfix"></div>
						</div>
					</div>
				</div> -->
				<!-- <div class="card">
					<div class="card-header" id="headingTwo">
						<h2 class="mb-0">
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">I Year (II Semester) <i class="material-icons">add</i></a>
						</h2>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">
							<div class="col-md-12">
								<div style="overflow-x:auto;">
  <table>
    <tr style="background: ">
      <th>S.No</th>
      <th>Course No.</th>
      <th>Course Title</th>
      <th>Credits</th>
      
    </tr>
    <tr>
      <td>1</td>
      <td>AGR 102</td>
      <td>Fundamentals of Agricultural Meteorology</td>
      <td>1+1</td>
      
    </tr>
    <tr>
      <td>2</td>
      <td>BIC 101</td>
      <td>Fundamentals of Biochemistry</td>
      <td>2+1</td>
      
    </tr>
    <tr>
      <td>3</td>
      <td>CRP 101</td>
      <td>Fundamentals of Plant Physiology</td>
      <td>2+1</td>
      
    </tr>
    <tr>
    	<td>4</td>
    	<td>AEC 101</td>
    	<td>Principles of Economics</td>
    	<td>1+1</td>
    </tr>
    <tr>
    	<td>5</td>
    	<td>SER 121</td>
    	<td>Principles and practices of sericulture</td>
    	<td>1+1</td>
    </tr>
    <tr>
    	<td>6</td>
    	<td>ENS 101</td>
    	<td>Principles of Environmental Sciences</td>
    	<td>1+1</td>
    </tr>
    <tr>
    	<td>7</td>
    	<td>FSN 111</td>
    	<td>Principles of Food Science and Nutrition</td>
    	<td>1+1</td>
    </tr>
    <tr>
    	<td>8</td>
    	<td>FOR 111</td>
    	<td>Agro Forestry</td>
    	<td>1+1</td>
    </tr>
    <tr>
    	<td rowspan="2">9</td>
    	<td>TAM 101</td>
    	<td>Agro Forestry</td>
    	<td rowspan="2">0+1</td>
    </tr>
    <tr>
    	
    	<td>ENG 103</td>
    	<td>Development Education</td>
    	
    </tr>
    <tr>
    	<td>10</td>
    	<td>NSS/NCC 101</td>
    	<td>National Service Scheme/ National Cadet Corps</td>
    	<td rowspan="3">Regd. in I Sem</td>
    </tr>
    <tr>
    	<td>11</td>
    	<td>PED 101</td>
    	<td>Physical Education</td>
    	
    </tr>
    <tr>
    	<td>12</td>
    	<td>PED 102</td>
    	<td>Yoga for Human Excellence</td>
    	
    </tr>
    <tr>
    	<td colspan="3" style="text-align: right; font-weight: bold;">Total</td>
    	<td colspan="3" style="font-weight: bold;">10+9=19</td>
    </tr>
  </table>
</div>

							</div>
							
					           <div class="clearfix"></div>
						</div>
					</div>
				</div> -->
				
				
			</div>
		</div>
	</div>
</div>
</body>
</html>                            