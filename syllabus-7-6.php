<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/linear-icons.css">
<link href="css/animate.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">
<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/linear-icons.css">

<!-- css -->
<link href="css/style.css" rel="stylesheet">
<link href="css/gallery.css" rel="stylesheet">

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


<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="accordion" id="accordionExample">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h2 class="clearfix mb-0">
							<a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">I Year (I Semester) <i class="material-icons">add</i></a>									
						</h2>
					</div>
					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
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
      <td>AGR 101</td>
      <td>Principles of Agronomy and Agricultural Heritage</td>
      <td>1+1</td>
      
    </tr>
    <tr>
      <td>2</td>
      <td>COM 111</td>
      <td>Fundamentals of Information Technology</td>
      <td>1+1</td>
      
    </tr>
    <tr>
      <td>3</td>
      <td>MAT 111</td>
      <td>Applied Mathematics</td>
      <td>1+1</td>
      
    </tr>
    <tr>
      <td>4</td>
      <td>SAC 101</td>
      <td>Principles of Analytical Chemistry</td>
      <td>1+1</td>
    </tr>
    <tr>
      <td>5</td>
      <td>PBG 101</td>
      <td>Introduction to Agricultural Botany</td>
      <td>1+1</td>
    </tr>
    <tr>
      <td>6</td>
      <td>ENG 101</td>
      <td>English for effective communication</td>
      <td>0+1</td>
    </tr>
    <tr>
      <td>7</td>
      <td>AEX 101</td>
      <td>Fundamentals of Rural Sociology and Educational Psychology</td>
      <td>1+1</td>
    </tr>
    <tr>
      <td>8</td>
      <td>NSS/NCC 101</td>
      <td>National Service Scheme/ National Cadet Corpsy</td>
      <td>0+1</td>
    </tr>
    <tr>
      <td>9</td>
      <td>PED 101</td>
      <td>Physical Education</td>
      <td>0+1</td>
    </tr>
    
   
    <tr>
      <td>10</td>
      <td>PED 102</td>
      <td>Yoga for Human Excellence</td>
      <td>0+1</td>
    </tr>
    <tr>
      <td colspan="3" style="text-align: right; font-weight: bold;">Total</td>
      <td colspan="3" style="font-weight: bold;">6+10=16</td>
    </tr>
  </table>
</div>
							</div>
							
					          <div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="card">
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
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<h2 class="mb-0">
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">II Year (III Semester) <i class="material-icons">add</i></a>                     
						</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
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
      <td>AGR 201</td>
      <td>Weed Management</td>
      <td>1+1</td>
      
    </tr>
    <tr>
      <td>2</td>
      <td>AEN 201</td>
      <td>Fundamentals of Entomology</td>
      <td>2+1</td>
      
    </tr>
    <tr>
      <td>3</td>
      <td>AGR 202</td>
      <td>Irrigation Management</td>
      <td>1+1</td>
      
    </tr>
    <tr>
    	<td>4</td>
    	<td>PAT 201</td>
    	<td>Fundamentals of Plant Pathology</td>
    	<td>2+1</td>
    </tr>
    <tr>
    	<td>5</td>
    	<td>SAC 201</td>
    	<td>Fundamentals of Soil Science</td>
    	<td>2+1</td>
    </tr>
    <tr>
    	<td>6</td>
    	<td>AMP 201</td>
    	<td>Livestock and Poultry Production Management</td>
    	<td>2+1</td>
    </tr>
    <tr>
    	<td>7</td>
    	<td>AGM 201</td>
    	<td>Fundamentals of Microbiology</td>
    	<td>2+1</td>
    </tr>
    <tr>
    	<td>8</td>
    	<td>AEX 201</td>
    	<td>Dimensions of Agricultural Extension</td>
    	<td>1+1</td>
    </tr>
    <tr>
    	<td>9</td>
    	<td>FMP 211</td>
    	<td>Farm Power and Machinery</td>
    	<td>1+1</td>
    </tr>
    <tr>
    	<td>10</td>
    	<td>ENG 103</td>
    	<td>Development Education</td>
    	<td>1+1</td>
    </tr>
    <tr>
    	<td>11</td>
    	<td>AEC 201</td>
    	<td>Production Economics and Farm Management</td>
    	<td>1+1</td>
    </tr>
    <tr>
    	<td>12</td>
    	<td>NSS/NCC 101</td>
    	<td>National Service Scheme/ National Cadet Corps</td>
    	<td rowspan="2">Regd. in I Sem</td>
    	
    </tr>
    <tr>
    	<td>12</td>
    	<td>PED 101</td>
    	<td>Physical Education</td>
    	
    </tr>
    <tr>
    	<td colspan="3" style="text-align: right; font-weight: bold;">Total</td>
    	<td colspan="3" style="font-weight: bold;">15+10=25</td>
    </tr>
  </table>
</div>
							</div>
							
					           <div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFour">
						<h2 class="mb-0">
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">II Year(IV Semester) <i class="material-icons">add</i></a>                               
						</h2>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
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
      <td>AGR 203</td>
      <td>Agronomy of field Crops- I</td>
      <td>1+1</td>
      
    </tr>
    <tr>
      <td>2</td>
      <td>HOR 211</td>
      <td>Production Technology of Fruits and Plantation Crops</td>
      <td>2+1</td>
      
    </tr>
    <tr>
      <td>3</td>
      <td>SST 201</td>
      <td>Principles and Practices of Seed Production</td>
      <td>1+1</td>
      
    </tr>
    <tr>
    	<td>4</td>
    	<td>SWE 211</td>
    	<td>Fundamentals of Soil and Water Conservation Engineering</td>
    	<td>2+1</td>
    </tr>
    <tr>
    	<td>5</td>
    	<td>STA 211</td>
    	<td>Applied Statistics</td>
    	<td>1+1</td>
    </tr>
    <tr>
    	<td>6</td>
    	<td>ERG 211</td>
    	<td>Renewable Energy</td>
    	<td>1+0</td>
    </tr>
    <tr>
    	<td>7</td>
    	<td>AGR 204</td>
    	<td>Study Tour</td>
    	<td>0+1</td>
    </tr>
    <tr>
    	<td>8</td>
    	<td>AEN 202</td>
    	<td>Economic Entomology and Principles of Pest Management</td>
    	<td>2+1</td>
    </tr>
    <tr>
    	<td>9</td>
    	<td>PBG 201</td>
    	<td>Principles of Genetics and Cytogenetics</td>
    	<td>2+1</td>
    </tr>
    <tr>
    	<td>10</td>
    	<td>SAC 202</td>
    	<td>Soil Resource Inventory and Problem Soils</td>
    	<td>1+1</td>
    </tr>
    <tr>
    	<td>11</td>
    	<td>ANM 201</td>
    	<td>Introductory Nematology</td>
    	<td>1+1</td>
    </tr>
    <tr>
    	<td>12</td>
    	<td>NSS/NCC 101</td>
    	<td>National Service Scheme/ National Cadet Corps</td>
    	<td rowspan="2">Regd. in I Sem</td>
    	
    </tr>
    <tr>
    	<td>13</td>
    	<td>PED 101</td>
    	<td>Physical Education</td>
    	
    </tr>
    <tr>
    	<td colspan="3" style="text-align: right; font-weight: bold;">Total</td>
    	<td colspan="3" style="font-weight: bold;">14+10=24</td>
    </tr>
  </table>
</div>

							</div>
							
					           <div class="clearfix"></div>
						</div>
					</div>
				</div>

        <div class="card">
          <div class="card-header" id="headingFive">
            <h2 class="mb-0">
              <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">III Year(V Semester) <i class="material-icons">add</i></a>                               
            </h2>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
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
      <td>AGR 301</td>
      <td>Crop Production-I</td>
      <td>0+1</td>
      
    </tr>
    <tr>
      <td>2</td>
      <td>AGR 302</td>
      <td>Agronomy of field Crops- II</td>
      <td>1+1</td>
      
    </tr>
    <tr>
      <td>3</td>
      <td>SAC 301</td>
      <td>Soil Fertility, Fertilizers and Manures</td>
      <td>2+1</td>
      
    </tr>
    <tr>
      <td>4</td>
      <td>AEN 301</td>
      <td>Pests of Field Crops and their Management</td>
      <td>1+1</td>
    </tr>
    <tr>
      <td>5</td>
      <td>PAT 301</td>
      <td>Diseases of Field Crops and Their Management</td>
      <td>1+1</td>
    </tr>
    <tr>
      <td>6</td>
      <td>ABT 301</td>
      <td>Plant Biotechnology</td>
      <td>2+1</td>
    </tr>
    <tr>
      <td>7</td>
      <td>PBG 301</td>
      <td>Principles and Methods of Plant Breeding</td>
      <td>2+1</td>
    </tr>
    <tr>
      <td>8</td>
      <td>AGM 301</td>
      <td>Soil and Applied Microbiology</td>
      <td>1+1</td>
    </tr>
    <tr>
      <td>9</td>
      <td>AEC 301</td>
      <td>Agricultural Marketing, Trade and Prices</td>
      <td>1+1</td>
    </tr>
    <tr>
      <td>10</td>
      <td>ARM 301</td>
      <td>Agribusiness Management and Entrepreneurship</td>
      <td>1+1</td>
    </tr>
    <tr>
      <td>11</td>
      <td>SST 301</td>
      <td>Seed Quality Regulation and Storage</td>
      <td>1+1</td>
    </tr>
    <tr>
      <td>12</td>
      <td>NCC 101</td>
      <td>National Cadet Corps</td>
      <td>Regd. in I Sem</td>
      
    </tr>
    
    <tr>
      <td colspan="3" style="text-align: right; font-weight: bold;">Total</td>
      <td colspan="3" style="font-weight: bold;">13+11=24</td>
    </tr>
  </table>
</div>

              </div>
              
                     <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingSix">
            <h2 class="mb-0">
              <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">III Year(VI Semester) <i class="material-icons">add</i></a>                               
            </h2>
          </div>
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
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
      <td>AGR 304</td>
      <td>Principles and practices of cropping and Farming Systems</td>
      <td>1+1</td>
      
    </tr>
    <tr>
      <td>2</td>
      <td>AGR 303</td>
      <td>Crop Production – II</td>
      <td>0+1</td>
      
    </tr>
    <tr>
      <td>3</td>
      <td>SAC 302</td>
      <td>Crop and Pesticide Chemistry</td>
      <td>2+1</td>
      
    </tr>
    <tr>
      <td>4</td>
      <td>AEX 301</td>
      <td>Extension Methodologies and Transfer of Agricultural Technology</td>
      <td>1+1</td>
    </tr>
    <tr>
      <td>5</td>
      <td>AEN 302</td>
      <td>Pests of Horticultural Crops and their Management</td>
      <td>1+1</td>
    </tr>
    <tr>
      <td>6</td>
      <td>NST 301</td>
      <td>Fundamentals and Applications of nanotechnology</td>
      <td>1+0</td>
    </tr>
    <tr>
      <td>7</td>
      <td>FPE 301</td>
      <td>Post Harvest and Food Engineering</td>
      <td>1+1</td>
    </tr>
    <tr>
      <td>8</td>
      <td>ENS 301</td>
      <td>Environmental Pollution and Management</td>
      <td>1+1</td>
    </tr>
    <tr>
      <td>9</td>
      <td>HOR 311</td>
      <td>Production Technology of Vegetables and Spice crops</td>
      <td>2+1</td>
    </tr>
    <tr>
      <td>10</td>
      <td>ENG 301</td>
      <td>Soft skills for Employability</td>
      <td>0+1</td>
    </tr>
    <tr>
      <td>11</td>
      <td>EXP 301</td>
      <td>Experiential Learning – I</td>
      <td>0+3</td>
    </tr>
    <tr>
      <td>12</td>
      <td>PAT 301</td>
      <td>Principles of plant disease management</td>
      <td>1+1</td>
    </tr>
    <tr>
      <td>13</td>
      <td>NCC 101</td>
      <td>National Cadet Corps</td>
      <td>Regd. in I Sem</td>
      
    </tr>
    
    <tr>
      <td colspan="3" style="text-align: right; font-weight: bold;">Total</td>
      <td colspan="3" style="font-weight: bold;">11+13=24</td>
    </tr>
  </table>
</div>

              </div>
              
                     <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingSeven">
            <h2 class="mb-0">
              <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">IV Year(VII Semester) <i class="material-icons">add</i></a>                               
            </h2>
          </div>
          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
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
      <td>AEX 401</td>
      <td>Rural Agricultural Work Experience – RAWE (VSP+ADA+NGO+INDUSTRY)</td>
      <td>0+5</td>
      
    </tr>
    <tr>
      <td>2</td>
      <td>APW 401</td>
      <td>Project Work</td>
      <td>0+2</td>
      
    </tr>
    <tr>
      <td>3</td>
      <td>AEX 402</td>
      <td>All India Tour</td>
      <td>0+1</td>
      
    </tr>
        
    <tr>
      <td colspan="3" style="text-align: right; font-weight: bold;">Total</td>
      <td colspan="3" style="font-weight: bold;">0+8=8</td>
    </tr>
  </table>
</div>

              </div>
              
                     <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingEight">
            <h2 class="mb-0">
              <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">IV Year(VIII Semester) <i class="material-icons">add</i></a>                               
            </h2>
          </div>
          <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
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
      <td>AGR 401</td>
      <td>Organic Farming</td>
      <td>1+1</td>
      
    </tr>
    <tr>
      <td>2</td>
      <td>PBG 401</td>
      <td>Breeding Field and Horticultural crops</td>
      <td>2+1</td>
      
    </tr>
    <tr>
      <td>3</td>
      <td>PAT 401</td>
      <td>Diseases of Horticultural crops and their management</td>
      <td>2+1</td>
      
    </tr>
    <tr>
      <td>4</td>
      <td>AEC 401</td>
      <td>Agricultural Finance, Banking and Co-operation</td>
      <td>1+1</td>
    </tr>
    <tr>
      <td>5</td>
      <td>HOR 411</td>
      <td>Production Technology of Flowers, Medicinal and Aromatic Crops</td>
      <td>2+1</td>
    </tr>
    <tr>
      <td>6</td>
      <td>EXP 401</td>
      <td>Experiential Learning – II</td>
      <td>0+3</td>
    </tr>
    <tr>
      <td>7</td>
      <td>ENS 401</td>
      <td>Climate Change and Disaster Management</td>
      <td>1+1</td>
    </tr>
    <tr>
      <td>8</td>
      <td>&ndash;</td>
      <td>Optional Course</td>
      <td>Minimum of 2 Credits</td>
    </tr>
    <tr>
      <td>9</td>
      <td>PRJ 401</td>
      <td>Project Work</td>
      <td>Registered in VII Semester</td>
    </tr>
    
    
    <tr>
      <td colspan="3" style="text-align: right; font-weight: bold;">Total</td>
      <td colspan="3" style="font-weight: bold;">11+9=20</td>
    </tr>
  </table>
</div>

              </div>
              
                     <div class="clearfix"></div>
            </div>
          </div>
        </div>
				
			</div>
		</div>
	</div>
</div>
                          