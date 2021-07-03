<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Accordion Menu with Plus Minus Icon</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="Accordion/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
<script src="Accordion/js/jquery-3.3.1.slim.min.js"></script>
<script src="Accordion/js/popper.min.js"></script>
<script src="Accordion/js/bootstrap.min.js"></script>
<style type="text/css">
	
	
	
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
							<a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Computer Science and Language Lab <i class="material-icons">add</i></a>									
						</h2>
					</div>
					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">

							<div class="col-md-8">
								<h4>Computer Science</h4>
								<p>JSA College of Agriculture and Technology, is fully equipped with round the clock internet facility with a speed of 2 Mbps, with broad band and wireless network connection. The node facility is available for the entire campus including the hostels. Computer Laboratory is connected to the internet through Manageable Switches (LAN). About 150 users can simultaneously access the facilities. A variety of software is also available for the students and staff.</p>
							</div>
							<div class="col-md-4">
					            <img src="images/computer-lab.png" alt="" class="img-achiev" />

					          </div>
					          <div class="clearfix"></div>
					          <div class="col-md-8">
								<h4>Language Lab</h4>
								<p>To provide communication skill development, student’s language lab is developed in the college. It’s fully equipped with headphone and basic Express Pro Lite software. This lab helps students in following way.</p>
								<ul class="bullet-points">

									<li>Self-learning Digital Language lab and Career Lab software where students can practice Listening, Speaking, Reading and Writing.</li>
									<li>It’s stand-alone software so no LAN network or internet connection is required.</li>



								</ul>
							</div>
							<div class="col-md-4">
					            <img src="images/computer-lab.png" alt="" class="img-achiev" />

					          </div>
					          <div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h2 class="mb-0">
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Class Room <i class="material-icons">add</i></a>
						</h2>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">
							<div class="col-md-8">
								<p>Four class rooms are provided which are spacious enough to accommodate 120 students and equipped with teaching aids like podium, ceramic board and LCD projector. The halls are well illuminated with tube lights. Natural air through windows ventilates the lecture halls supplemented with fans. In addition to that one more lecture hall is provided.</p>

							</div>
							<div class="col-md-4">
					            <img src="images/class-room.jpg" alt="" class="img-achiev" />

					          </div>
					           <div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<h2 class="mb-0">
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Library <i class="material-icons">add</i></a>                     
						</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">
							<div class="col-md-8">
								<p>The term library means different things to different sources depending on where they stand on the enlighten spectrum. If the people are to stay literate, they must have access to a wide variety of written materials and continue the habit of reading. Library and information services are factors in providing essential resources for agriculture, forest and life sciences. Our library supports the curriculum and as well as stocks valuable books which in general encourages reading.</p>
								<p>Library resources are those materials which are both printed and non-printed that support curricular and personal informational needs. It procures printed materials, news papers, weekly and monthly magazines, scientific journals text, dictionary, non print materials including compact disks, audio and video tapes and computer softwares. Directories, encyclopedia, yearbooks as well as subject specific reference books.</p>
								<p>On Jan 14, 2017 , A biannual newsletter named “JSACAT NEWSLETTER” has been released to benefit the agrarian community. </p>
							</div>
							<div class="col-md-4">
					            <img src="images/library.jpg" alt="" class="img-achiev" />

					          </div>
					           <div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFour">
						<h2 class="mb-0">
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Hostel <i class="material-icons">add</i></a>                               
						</h2>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
						<div class="card-body">
							<div class="col-md-8">
								<p>The inmates of JSACAT hostel are accommodated in a well ventilated, good lighting and spacious room. Every room is provided with tube lights, fans and plug points for charging their laptops. Keeping in mind the hygiene of students bathrooms are well furnished with floor tiles and wall tiles. Indian and western toilets are provided and cleaned daily. Considering health of students they are provided with RO water from RO plant.</p>
								<p>Moreover during cooler months and at times when students are ill, they are in need of warm water. Hence a water dispenser supplying normal, cold and hot water is placed in the hostel. Hangers are provided in the hostel rooms to hang their clothes. Cupboards are provided for the students to keep their belongings. Shoe racks are provided for the students to place their shoes and slippers in order. In ladies toilet an additional facility of incinerator to burn sanitary napkins is provided which helps maintain good hygiene among the students.</p>

							</div>
							<div class="col-md-4">
					            <img src="images/hostel.png" alt="" class="img-achiev" />

					          </div>
					           <div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFive">
						<h2 class="mb-0">
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Health Center <i class="material-icons">add</i></a>                               
						</h2>
					</div>
					<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
						<div class="card-body">
							<div class="col-md-8">
								<p>A health centre is established to treat students falling sick and from other injuries. The service of Dr. Jayanthimala and nurse rangeela is utilized for treating the students and take care of the physical well being. Basic medicines, first aid facilities, BP apparatus, glucometer, IV drip sets and fluids, antiseptics and other accessories are available in the health centre.</p>

							</div>
							<div class="col-md-4">
					            <img src="images/health-center.png" alt="" class="img-achiev" />

					          </div>
					           <div class="clearfix"></div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>                            