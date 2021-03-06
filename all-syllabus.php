
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/gallery.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
<!-- <script src="Accordion/js/jquery-3.3.1.slim.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
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
  border: 1px solid #ddd;
}

tr:nth-child(even){background-color: #f2f2f2}
  
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
<!-- <link rel="stylesheet" href="Accordion/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
<script src="Accordion/js/jquery-3.3.1.slim.min.js"></script>
<script src="Accordion/js/popper.min.js"></script>
<script src="Accordion/js/bootstrap.min.js"></script>
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
</script> -->

<div class="container">
    
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <a class="collapsed"  data-toggle="collapse" data-parent="#accordion" href="#collapse1st" aria-expanded="false" aria-controls="collapse1st">
                              <div class="panel-heading" role="tab" id="headingOne">
                                
                                  <h3 class="panel-title">
                                   I Year (I Semester)
                                </h3>
                            </div>
                         </a>
                            <div id="collapse1st" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="col-md-12">
                    <div style="overflow-x:auto;">
  <table>
    <tr style="background:#0eab5a; color:#FFF; ">
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
                
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2nd" aria-expanded="false" aria-controls="collapse2nd">
                              <div class="panel-heading" role="tab" id="headingTwo">
                                
                                  <h3 class="panel-title">
                                   I Year (II Semester)
                                </h3>
                            </div>
                          </a>
                            <div id="collapse2nd" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <div class="col-md-12">
                    <div style="overflow-x:auto;">
  <table>
    <tr style="background:#0eab5a; color:#FFF;  ">
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
             
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <div class="panel-heading" role="tab" id="headingThree">
                                <h3 class="panel-title">
                                    II Year (III Semester) 
                                </h3>
                            </div>
                          </a>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <div class="col-md-12">
                        	<div style="overflow-x:auto;">
  <table>
    <tr style="background:#0eab5a; color:#FFF; ">
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
    	<td>13</td>
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
                
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              <div class="panel-heading" role="tab" id="headingFour">
                                <h3 class="panel-title">
                                   II Year(IV Semester)
                                </h3>
                            </div>
                          </a>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <div class="col-md-12">
                        <div style="overflow-x:auto;">
  <table>
    <tr style="background:#0eab5a; color:#FFF; ">
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
                
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                           <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h3 class="panel-title">
                                    III Year(V Semester)
                                </h3>
                            </div>
                          </a>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <div class="col-md-12">
                 <div style="overflow-x:auto;">
  <table>
    <tr style="background:#0eab5a; color:#FFF; ">
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
              
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              <div class="panel-heading" role="tab" id="headingSix">
                                <h3 class="panel-title">
                                    III Year(VI Semester)
                                </h3>
                            </div>
                            </a>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">
                                    <div class="col-md-12">
                   <div style="overflow-x:auto;">
  <table>
    <tr style="background:#0eab5a; color:#FFF; ">
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
      <td>Crop Production ??? II</td>
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
      <td>Experiential Learning ??? I</td>
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
               
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                              <div class="panel-heading" role="tab" id="headingSeven">
                                <h3 class="panel-title">
                                    IV Year(VII Semester) 
                                </h3>
                            </div>
                            </a>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body">
                                    <div class="col-md-12">
                 <div style="overflow-x:auto;">
  <table>
    <tr style="background:#0eab5a; color:#FFF; ">
      <th>S.No</th>
      <th>Course No.</th>
      <th>Course Title</th>
      <th>Credits</th>
      
    </tr>
    <tr>
      <td>1</td>
      <td>AEX 401</td>
      <td>Rural Agricultural Work Experience ??? RAWE (VSP+ADA+NGO+INDUSTRY)</td>
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
              
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                              <div class="panel-heading" role="tab" id="headingEight">
                                <h3 class="panel-title">
                                    IV Year(VIII Semester)
                                </h3>
                            </div>
                            </a>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                <div class="panel-body">
                                    <div class="col-md-12">
                 <div style="overflow-x:auto;">
  <table>
    <tr style="background:#0eab5a; color:#FFF; ">
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
      <td>Experiential Learning ??? II</td>
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
               
                                </div>
                            </div>
                        </div>
                       
                       
                        
                    </div>
    
</div>
<!-- <div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="accordion" id="accordionExample">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h2 class="clearfix mb-0">
							<a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Agronomy Lab Inclusive of Agro Forestry <i class="material-icons">add</i></a>									
						</h2>
					</div>
					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">
							<div class="col-md-12">
								<div class="col-md-7">
                  <p>Agronomy is one of the prime disciplines of agriculture which deals with cultivation of crops. The land is classified as wet land, garden land and dry land and crops are cultivated in accordance to lands. The department is involved in various practices like optimizing the seed rate, spacing to be adopted, fertilizer schedules and herbicide applications .</p>

                  <p>Irrigation scheduling is another important segment called irrigation agronomy where different irrigation systems like basin, flood irrigation drip irrigation, sprinkler, and sub surface irrigation are practiced. Fodder cultivation is taken up in the department by raising different fodder crops. The cultivable lands come under the Central farm maintained by the agronomy department. All tools, implements and tractors are maintained in the central farm.</p>
                  </div>
                <div class="col-md-5">
                  <img src="images/agronomy-lab-page.jpg" class="img-achiev" />
                </div>
							</div>
							
					          <div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h2 class="mb-0">
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Agricultural Entomology Lab <i class="material-icons">add</i></a>
						</h2>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">
							<div class="col-md-12">
								<div class="col-md-7">
          <p>The objective of this department is to impart knowledge about the crop pest and its management because pest is one of the most important factors which reduces the crop yield. To maintain ecological balance, to increase the rate of natural pollination and to enrich the knowledge of students in the field of apiculture, bee hives are maintained in the orchards and banana field.</p>        
                </div>
                <div class="col-md-5">
                  <img src="images/agriculture-entomology-lab-page.jpg" class="img-achiev" />
                </div>

							</div>
							
					           <div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<h2 class="mb-0">
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Plant Breeding and Genetics Lab<i class="material-icons">add</i></a>                     
						</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">
							<div class="col-md-12">
								<div class="col-md-7">
                    <p>The department of Plant Breeding and Genetics imparts knowledge on the historical prospective of genetics, cytogenetic, and plant breeding. The students learn about the genetical makeup of the plants and commercial new technology in plant breeding for release of new varieties including the genetically modified crops. The students will develop skill and knowledge on evolutionary origin of plants and hybrid seed production methods.</p>        
                </div>
                <div class="col-md-5">
                  <img src="images/plant-breeding-genetic-lab-page.jpg" class="img-achiev" />
                </div>
							</div>
							
					           <div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFour">
						<h2 class="mb-0">
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Plant Bio-tech lab <i class="material-icons">add</i></a>                               
						</h2>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
						<div class="card-body">
							<div class="col-md-12">
								<div class="col-md-7">
                  <p>Biotechnology is relatively a new science with direct applications to the agriculture industry. Biotechnology is ???using organisms or their products for commercial purposes???. But recent developments in molecular biology have given biotechnology new meaning, new prominence and new potential. Plant biotechnology is the application of knowledge obtained from the study of life sciences to create technological improvements in plant species.</p>

                  <p>Students will be exposed to different in vitro methods of plant culture. Learning different bio technological approaches will help students in designing crop improvements, to develop insect and disease resistant crops, increase in nutrient content, fiber quality etc.</p>      
                </div>
                <div class="col-md-5">
                  <img src="images/plant-bio-tech-lab-page.jpg" class="img-achiev" />
                </div>

							</div>
							
					           <div class="clearfix"></div>
						</div>
					</div>
				</div>

        <div class="card">
          <div class="card-header" id="headingFive">
            <h2 class="mb-0">
              <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Seed science and physiology <i class="material-icons">add</i></a>                               
            </h2>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
              <div class="col-md-12">
                <div class="col-md-7">
                  <p>The Department of Seed Science and Physiology imparts knowledge on seed production practices and techniques for different crops. The students learn about seed structure and seed quality characters (morphological, physiological and biochemical), different generation systems, classes of seed and seed multiplication to ensure good quality seeds available for the farmers in the market, since seed is the basic input in agriculture.</p>

                  <p>The post harvest seed losses can be minimized with knowledge on proper seed handling and processing techniques. Seed germination problems can be countered by breaking dormancy and different seed treatment methods. The students will develop skill and knowledge on solving field problems related to seed production arising in and around their surroundings.</p>
                </div>
                <div class="col-md-5"><img src="images/seed-science-physiology-lab-page.jpg" class="img-achiev" />
                </div>

              </div>
              
                     <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingSix">
            <h2 class="mb-0">
              <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Horticulture <i class="material-icons">add</i></a>                               
            </h2>
          </div>
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            <div class="card-body">
              <div class="col-md-12">
                <div class="col-md-7">
                  <p>The Horticulture department, an allied sector of agriculture, gains emphasis in the present scenario where per capita intake of fruits and vegetables are below the WHO standards. The department maintains different fruit trees in the orchard and cultivates around 12 vegetables. The latest technology namely protected cultivation is followed with the establishment of Poly house with drip irrigation facility, various nursery practices are done in the shade net green house nursery area.</p>
                </div>
                <div class="col-md-5"><img src="images/horticulture-lab-page.jpg" class="img-achiev" />
                </div>
              </div>
              
                     <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingSeven">
            <h2 class="mb-0">
              <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Food Science <i class="material-icons">add</i></a>                               
            </h2>
          </div>
          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
            <div class="card-body">
              <div class="col-md-12">
                <div class="col-md-7">
                  <p>The department of food science and nutrition teach the basic principles of Food Science and Nutrition. The Department focuses on development of different product such as RTS, RTE, Jam, Jelly etc., from different fruits. The students also learn the different cooking methods, macro nutrients and micro nutrients, food preservation and processing technology , food quality and safety etc,.</p>
                </div>
                <div class="col-md-5"><img src="images/food-science-lab-page.jpg" class="img-achiev" />
                </div>
              </div>
              
                     <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingEight">
            <h2 class="mb-0">
              <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">MicroBiology<i class="material-icons">add</i></a>                               
            </h2>
          </div>
          <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
            <div class="card-body">
              <div class="col-md-12">
                <div class="col-md-7">
                  <p>The main objective of this department is to help students to enrich their knowledge in the field of microbes. They are exposed to develop bio fertilizers unit and its production technology.</p>
                </div>
                <div class="col-md-5"><img src="images/microbiology-lab-page.jpg" class="img-achiev" />
                </div>

              </div>
              
                     <div class="clearfix"></div>
            </div>
          </div>
        </div>

         <div class="card">
          <div class="card-header" id="headingNine">
            <h2 class="mb-0">
              <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">Soil Science &amp; Analytical Chemistry Lab<i class="material-icons">add</i></a>                               
            </h2>
          </div>
          <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
            <div class="card-body">
              <div class="col-md-12">
                <div class="col-md-7">
                  <p>The Department of Soil Science and Agricultural Chemistry is one of the important department established in the JSA College of Agriculture and Technology, for giving best exposure to the students in analyzing various soil properties, Analysis of water sample, Fertilizer testing, Soil classification, Soil physics, Soil fertility, Macro nutrient analysis in plant and soil samples are the important works carried out by the department. Soil Science department is fully established as per the guidelines of TNAU.</p>
                </div>
                <div class="col-md-5"><img src="images/soil-science-lab-page.jpg" class="img-achiev" />
                </div>

              </div>
              
                     <div class="clearfix"></div>
            </div>
          </div>
        </div>

         <div class="card">
          <div class="card-header" id="headingTen">
            <h2 class="mb-0">
              <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">Plant Pathology Lab<i class="material-icons">add</i></a>                               
            </h2>
          </div>
          <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
            <div class="card-body">
              <div class="col-md-12">
                <div class="col-md-7">
                  <p>The main objectives of this department are, to teach the subject plant pathology to the undergraduate students. Management of crop diseases and cultivation of Oyster mushrooms are undertaken in this department.</p>
                </div>
                <div class="col-md-5"><img src="images/plant-pathology-lab-page.jpg" class="img-achiev" />
                </div>

              </div>
              
                     <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingEleven">
            <h2 class="mb-0">
              <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">Agrometeorology<i class="material-icons">add</i></a>                               
            </h2>
          </div>
          <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
            <div class="card-body">
              <div class="col-md-12">
                <div class="col-md-7">
                  <p>JSACAT, Department of Agronomy, Agricultural Meteorology unit was established with an aim of students education and for giving weather forecast to the adjoining villages mainly for their agricultural benefits. Weather and climate are two basic resources which are considered as basic input for agricultural planning. Moreover, every plant process related with growth development and its yield is highly influenced by weather. Hence, scope behind agricultural meteorology remains distinct for agricultural success. The instruments listed below are installed in our unit to enable better collection, processing of data and to forecast the weather in an explicit manner.</p>
                  <p class="italic-txt">JSACAT AGROMETEOROLOGY STATION IS LOCATED PRECISELY AT LATITUDE: 110 5???, LONGITUDE: 790 E, ALTITUDE: 21 3 FT (64 M).</p>
                </div>
                <div class="col-md-5"><img src="images/agrometeorology-lab-page.jpg" class="img-achiev" />
                </div>

              </div>
              
                     <div class="clearfix"></div>
            </div>
          </div>
        </div>
				
			</div>
		</div>
	</div>
</div> -->
                          