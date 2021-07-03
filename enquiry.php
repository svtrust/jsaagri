

  <!-- Bootstrap core CSS -->
 <link href="sidebar/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="sidebar/css/simple-sidebar.css" rel="stylesheet">
   <script src="http://jquery.bassistance.de/validate/jquery.validate.js"></script>
<script src="http://jquery.bassistance.de/validate/additional-methods.js"></script>
<link href="css/style.css" rel="stylesheet">
<link href="css/gallery.css" rel="stylesheet">

<!------------------------------->

<style type="text/css">

.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}

.ds_tbl {
	background-color: #FFF;
}

.ds_head {
	background-color: #333;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	text-align: center;
	letter-spacing: 2px;
}

.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}

.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	padding: 5px;
	cursor: pointer;
}

.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */

</style>
<style type="text/css">
input[type=text] {
    border: 1px solid #007c3c!important;
    height: 32px;
    border-radius: 6px;
}
textarea {
     border:1px solid #007c3c!important;
     border-radius: 6px;
}
a.one:link {color:#ffffff;
text-decoration:none;
}
a.one:visited {color:#ffffff;
text-decoration:none;
}
a.one:hover {color:#000000;
text-decoration:none;}
a.two:link {color:#000000;
text-decoration:none;
}
a.two:visited {color:#000000;
text-decoration:none;
}
a.two:hover {color:#78310d;
text-decoration:none;}
a.three:link {color:#000000;
text-decoration:none;
}
a.three:visited {color:#000000;
text-decoration:none;
}
a.three:hover {color:#000000;
text-decoration:none;}
</style>
<style>
.first-name-check {
	background:url(images/first-name-red.jpg) top center no-repeat;
	width:146px;
	height:30px;
	}
.minimum-three {
	background:url(images/minimum-three.jpg) top center no-repeat;
	width:146px;
	height:30px;
	}
</style>
<script type="application/javascript" language="javascript">
var maxLimit =250;
function countText(){

maxLimit=parseInt(maxLimit)-1;
document.getElementById("txtSize").innerHTML=maxLimit;

}
// only numbers
function chknum(s)
{
      	  var i;2
	s = s.toString();
      for (i = 0; i < s.length; i++)
      {
         var c = s.charAt(i);
         if (isNaN(c)) 
	   {		
		return false;
	   }
      }
      return true;
}

// only alphabets
function fun(str)
{
	var Alphabet;
	//Alphabet = "^[a-zA-Z]+$";
	//Alphabet =/^[A-Za-z]+$/;
	Alphabet =/^[A-Za-z ]+$/;
	//A-Z or a-z Alphabets only allowed

	var name = str;
	if (name.search(Alphabet) == -1) 
	//	Or
	//if (!name.match(Alphabet))
	{
		return false;	
	}
	else
	{
		return true;
	}
}
function validateEmail()
{
var x=document.forms["enquiry"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
// date format
function  isValidDateFormat1()
{   
var re= /^[0-9]{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])/;
var el= document.getElementById('dob');
var M= el.value.match(re);
return M? true : false
}

function validate()
{
var limit=0;
var val;
document.getElementById("dfirstname").innerHTML="";
document.getElementById("dlastname").innerHTML="";
document.getElementById("demail").innerHTML="";
//document.getElementById("daddress").innerHTML="";
document.getElementById("dcontact").innerHTML="";
document.getElementById("ddatepicker").innerHTML="";
document.getElementById("ddatepickerto").innerHTML="";
document.getElementById("dmessage").innerHTML="";

document.getElementById("lfirstname").style.color="#000";
document.getElementById("llastname").style.color="#000";
document.getElementById("lemail").style.color="#000";
//document.getElementById("laddress").style.color="#12588a";
document.getElementById("lcontact").style.color="#000";
document.getElementById("ldatepicker").style.color="#000";
document.getElementById("ldatepickerto").style.color="#000";
document.getElementById("lmessage").style.color="#000";


var firstname=document.getElementById('firstname');
var lastname=document.getElementById('lastname');
var email=document.getElementById('email');
var dob=document.getElementById('dob');
//var address=document.getElementById('address');
var con=document.getElementById('con');
var datepicker=document.getElementById('datepicker');
var datepickerto=document.getElementById('datepickerto');
var message=document.getElementById('message');

var s=0;

if(firstname.value=="")
{

document.getElementById("dfirstname").innerHTML="Enter Name";
//document.getElementById("lfirstname").style.color="red";
//document.getElementById("dfirstname").className="first-name-check";

s=1;
}
if(message.value=="")
{

document.getElementById("dmessage").innerHTML="Enter Message";
//document.getElementById("lfirstname").style.color="red";
//document.getElementById("dfirstname").className="first-name-check";

s=1;
}

if(datepicker.value=="")
{

document.getElementById("ddatepicker").innerHTML="Enter Subject";
//document.getElementById("lfirstname").style.color="red";
//document.getElementById("dfirstname").className="first-name-check";

s=1;
}

if(datepickerto.value=="")
{

document.getElementById("ddatepickerto").innerHTML="Enter Address";
//document.getElementById("lfirstname").style.color="red";
//document.getElementById("dfirstname").className="first-name-check";

s=1;
}
/*alert(firstname.value.length)*/




else if(fun(document.getElementById("firstname").value)==false)
{
document.getElementById("dfirstname").innerHTML="Firstname Should be in Alphabets";
document.getElementById("dfirstname").style.display="block";
//document.getElementById("firstname").className="first-name-check";
//document.getElementById("lfirstname").style.color="red";
document.getElementById("firstname").focus();
//document.getElementById("dfirstname").className="first-name-check";
s=1;
}




if(lastname.value=="")
{

document.getElementById("dlastname").innerHTML="Enter Father Occupation";
//document.getElementById("llastname").style.color="red";

s=1;
}
else if(fun(document.getElementById("lastname").value)==false)
{
document.getElementById("dlastname").innerHTML="Lastname Should be in Alphabets";
//document.getElementById("llastname").style.color="red";
document.getElementById("lastname").focus();
s=1;
}
if(email.value=="")
{
document.getElementById("demail").innerHTML="Please Enter the Email Address";
//document.getElementById("lemail").style.color="red";

s=1;
}
else if(validateEmail(document.getElementById("email").value)==false)
{
document.getElementById("demail").innerHTML="Invalid email-id-format";
//document.getElementById("lemail").style.color="red";
s=1;
}

/*if(address.value=="")
{
document.getElementById("daddress").innerHTML="Please Enter the Address";
//document.getElementById("laddress").style.color="red";

s=1;
}
if(address.value=="")
{
document.getElementById("daddress").innerHTML="Please Enter the Message";
//document.getElementById("laddress").style.color="red";
s=1;
}*/
if(con.value=="")
{
document.getElementById("dcontact").innerHTML="Please Enter the Contact";
//document.getElementById("lcontact").style.color="red";

s=1;
}
else if(chknum(document.getElementById("con").value)==false)
{
document.getElementById("dcontact").innerHTML="Contact Should be in Number";
//document.getElementById("lcontact").style.color="red";
document.getElementById("con").focus();
s=1;
} 




if(firstname.value.length < 3) 
{
//document.getElementById("dfirstname").className="minimum-three";
//document.getElementById("dfirstname").className="first-name-check";
document.getElementById("dfirstname").innerHTML="Enter Your Name";

s=1;
}

//if(firstname.value.length > 30) 
//{
//document.getElementById("dfirstname").innerHTML="Maximum thirty characters";

//s=1;
//}
if(message.value.length < 3) 
{
//document.getElementById("dfirstname").className="minimum-three";
//document.getElementById("dfirstname").className="first-name-check";
document.getElementById("dmessage").innerHTML="Enter Your Message";

s=1;
}

//if(message.value.length > 30) 
//{
//document.getElementById("dmessage").innerHTML="Maximum thirty characters";

//s=1;
//}
if(con.value.length < 10) 
{
document.getElementById("dcontact").innerHTML="Enter Contact Number";

s=1;
}

// if(con.value.length > 12) 
// {
// document.getElementById("dcontact").innerHTML="Maximum Twelve Digit";

// s=1;
// }
if(lastname.value.length < 1) 
{
document.getElementById("dlastname").innerHTML="Enter Father's Occupation";

s=1;
}

// if(lastname.value.length > 20) 
// {
// document.getElementById("dlastname").innerHTML="Maximum twenty characters";

// s=1;
// }


if(s==1)
return false;
else
return true;

}

</script>

<!------------------------->



 

    <!-- Sidebar -->
    
    <!-- /#sidebar-wrapper -->

   
      <div class="container-fluid">
      	<div class="col-md-12">
      	   <!--  <h2 class="mt-4" style="text-align:center;">Application Enquiry Form</h2> -->
      
	 <?php
if(isset($_REQUEST['txtSubmit']))
{
	include_once("mailFunction.php");
 }
else
 {
 ?>
<form onsubmit="return validate();" method="post" name="enquiry" id="enquiry">

<div style="margin:10px 0px 0px 0px;">
    
                
            <div class="col-md-8" style="float:left; padding:0px 15px;">
                <div id="lfirstname" class="col-sm-6" style="padding:0px 15px; float:left;"><div class="col-xs-12" style="float:left;">Name</div><input type="text" name="firstname" id="firstname" maxlength="30" class="col-sm-12" />
      <div id="dfirstname" style="color:#FF0000;margin-bottom: 25px; clear: both;"></div></div>
     
      <div id="lcontact" class="col-sm-6" style="padding:0px 15px; float:left;"><div class="col-xs-12" style="float:left;">Mobile Number</div><input type="text" name="con" id="con" maxlength="12" class="col-sm-12" />
      <div id="dcontact" style="color:#FF0000;margin-bottom: 25px; clear: both;"></div></div>
      <div class="clearfix"></div>
      
           
                <div id="llastname"  class="col-sm-6" style="padding:0px 15px; float:left;"><div class="col-xs-12" style="float:left;">Father's Occupation</div><input type="text" name="lastname" id="lastname" class="col-sm-12" />
      <div id="dlastname" style="color:#FF0000;margin-bottom: 25px; clear: both;"></div></div>
      <div class="clear"></div>
      <div id="lemail" class="col-sm-6" style="padding:0px 15px; float:left;"><div class="col-xs-12" style="float:left;">Email-id</div><input type="text" name="email" id="email" class="col-sm-12" />
      <div id="demail" style="color:#FF0000;margin-bottom: 25px; clear: both;"></div></div>
      <div class="clear"></div>
      <div id="lmessage" class="col-sm-12" style="padding:0px 15px; float:left;"><div class="col-xs-12" style="float:left;">Message</div><textarea class="col-sm-12" rows="3" name="message" id="message" ></textarea>
      <div id="dmessage" style="color:#FF0000;margin-bottom: 25px; clear: both;"></div></div>
      
            </div>
            <div class="col-md-4" style="float:left; padding:0px 15px;">
                <div id="ldatepicker" class="col-sm-12"><div class="col-xs-12" style="float:left;">Subject</div><input type="text" name="datepicker" id="datepicker" class="col-sm-12" />
     <div id="ddatepicker" style="color:#FF0000; margin-bottom: 25px; clear: both;"></div></div>
     <div class="clear"></div>
     <div id="ldatepickerto" class="col-sm-12"><div class="col-xs-12" style="float:left;">Address</div><textarea class="col-sm-12" rows="7" name="datepickerto" id="datepickerto"></textarea>
      <div id="ddatepickerto" style="color:#FF0000; margin-bottom: 25px; clear: both;"></div></div>
     
            </div>
           

<div class="clear"></div>

<div style="float:right; margin:10px 165px 20px 0px;"><input type="submit" name="txtSubmit" value="Submit" style="padding: 15px 25px; background: #007c3c; color: #FFF; border: none!important; border-radius: 10px;" /></div>
</div>

</form>
<?php
  }
  ?>
  
        <!--<p>To provide quality education that gives knowledge to serve the society. This education should be such that the student should be motivated to pursue higher studies. All such kinds of learning should be for the betterment of the students. Education is the only thing that makes the student a better humane in the society, who excels not only in academics but would understand the finer aspects of life. Such kind of teaching and learning community develops the education of rural students. Enrich to build confidence and enhance opportunities to succeed and should work together effectively to achieve the determined goals.</p>-->
      	</div>
      	<div class="col-md-12">
      		<!--<h2 class="mt-4">Our Mission</h2>-->
        <!--<p>Jawaharlal Nehru College for Women aims to develop every individual to meet global challenges. And we mould the students to go out as conscious citizens with concern. To provide skill based, technical, innovative educational environment for creating global competencies. <span style="color: #e67b02; font-weight: bold;">Facilitate students to develop professional and life skills to enhance the employability.</span> Bestow leadership qualities to brave new challenges. Practice the importance of human and ethical values.</p> -->
      	</div>
        
      </div>
     
  
    <!-- /#page-content-wrapper -->

 
  
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
   <script src="sidebar/vendor/jquery/jquery.min.js"></script>
  <script src="sidebar/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>


