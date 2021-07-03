<?php
	$subject="JSA Agriculture Enquiry Form";
	  //send email
	 // $to="missionsports@rocketmail.com";
	  $to="deanjsacat@tnau.ac.in";
	  $firstname=stripslashes(trim($_REQUEST['firstname']));
	  $lastname=stripslashes(trim($_REQUEST['lastname']));
	  $email=stripslashes(trim($_REQUEST['email']));
	  $con=stripslashes(trim($_REQUEST['con']));
	  $datepicker=stripslashes(trim($_REQUEST['datepicker']));
	  $datepickerto=stripslashes(trim($_REQUEST['datepickerto']));
	  $message=stripslashes(trim($_REQUEST['message']));
	  
	  
	$msg='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feed Back Enquiry Form</title>
</head>

<body>
<div style="border:1px dotted #CCC;background:#d5e9f8;width:650px;padding:10px;margin:auto;">
	<div style="background:#ffffff;height:80px;">
    	<div style="width:100%;float:left;">	
        	<div style="background:#ffffff;height:80px;"><img src="http://www.jsaagri.in/images/adm-logo.jpg" style="padding:15px; width: 100%; margin-left: -15px!important;" /></div>
        </div>
    </div>
    <div class="clearfix"></div>
<div style="background:#ffffff; font-family:verdana; font-size:12px; padding:0px 10px;">
    	<div align="left" style="padding: 0px 0px 0px 5px; font-size:14px; color:#8b8989;"><strong>Hi,</strong></div><br />
<table align="center" width="572" cellspacing="0" cellpadding="0" style="border: 1px solid #f2f1f1;margin-bottom:4px;" >
          <tr>
            <td><table align="center" width="90%" style="font-family: Verdana,Arial; cellspacing="4" cellpadding="0">
              
              <tr>
                <td width="30%"><b>Name</b></td>
                <td width="10%">:</td>
                <td width="60%">'.$firstname.'</td>
              </tr>
			  <tr>
                <td width="30%"><b>Father Occupation</b></td>
                <td width="10%">:</td>
                <td width="60%">'.$lastname.'</td>
              </tr>
              <tr>
                <td><b>Subject</b></td>
                <td>:</td>
                <td>'.$datepicker.'</td>
              </tr>
			   <tr>
                <td><b>Address</b></td>
                <td>:</td>
                <td>'.$datepickerto.'</td>
              </tr>
			  <tr>
                <td><b>Email</b></td>
                <td>:</td>
                <td>'.$email.'</td>
              </tr>
			  <tr>
                <td><b>Mobile</b></td>
                <td>:</td>
                <td>'.$con.'</td>
              </tr>
              <tr>
                <td><b>Message</b></td>
                <td>:</td>
                <td>'.$message.'</td>
              </tr>
              
              
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table></td>
          </tr>
    </table>
<p>&nbsp;</p>
  </div>
</div>
</body>
</html>';

$headers = "From: " .$email. "\r\n";
$headers .= "Reply-To: ".$email. "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
// Always set content-type when sending HTML email

// More headers

$mailSend=@mail($to,$subject,$msg,$headers);
	if($mailSend)
	{
		echo "'<div style='margin:0px auto;'>
			<div class='result col-md-12' style='text-align:center; font-size:18px; color:#007c3c;'>Thank you for Submitting mail</div></div>
			<div class'clearfix'></div>
			<div style='margin:10px 0px 0px 0px;'>
    
                
            <div class='col-md-8' style='float:left; padding:0px 15px;'>
                <div id='lfirstname' class='col-sm-6' style='padding:0px 15px; float:left;'><div class='col-xs-12' style='float:left;'>Name</div><input type='text' name='firstname' id='firstname' maxlength='30' class='col-sm-12' />
      <div id='dfirstname' style='color:#FF0000;'></div></div>
      <div class='clear'></div>
      <div id='lcontact' class='col-sm-6' style='padding:0px 15px; float:left;'><div class='col-xs-12' style='float:left;'>Mobile Number</div><input type='text' name='con' id='con' maxlength='12' class='col-sm-12' />
      <div id='dcontact' style='color:#FF0000;'></div></div>
      <div class='clear'></div>
      
           
                <div id='llastname'  class='col-sm-6' style='padding:0px 15px; float:left;'><div class='col-xs-12' style='float:left;'>Father's Occupation</div><input type='text' name='lastname' id='lastname' class='col-sm-12' />
      <div id='dlastname' style='color:#FF0000;'></div></div>
      <div class='clear'></div>
      <div id='lemail' class='col-sm-6' style='padding:0px 15px; float:left;'><div class='col-xs-12' style='float:left;'>Email-id</div><input type='text' name='email' id='email' class='col-sm-12' />
      <div id='demail' style='color:#FF0000;'></div></div>
      <div class='clear'></div>
      <div id='lmessage' class='col-sm-12' style='padding:0px 15px; float:left;'><div class='col-xs-12' style='float:left;'>Message</div><textarea class='col-sm-12' rows='3' name='message' id='message' ></textarea>
      <div id='dmessage' style='color:#FF0000;'></div></div>
      
            </div>
            <div class='col-md-4' style='float:left; padding:0px 15px;'>
                <div id='ldatepicker' class='col-sm-12'><div class='col-xs-12' style='float:left;'>Subject</div><input type='text' name='datepicker' id='datepicker' class='col-sm-12' />
     <div id='ddatepicker' style='color:#FF0000;'></div></div>
     <div class='clear'></div>
     <div id='ldatepickerto' class='col-sm-12'><div class='col-xs-12' style='float:left;'>Address</div><textarea class='col-sm-12' rows='5' name='datepickerto' id='datepickerto'></textarea>
      <div id='ddatepickerto' style='color:#FF0000;'></div></div>
     
            </div>
            <div class='col-md-8' style='float:left; padding:0px 15px;'>
                
            </div>

<div class='clearfix'></div>

<div style='float:right; margin:10px 175px 20px 0px;'><input type='submit' name='txtSubmit' value='Submit' style='padding: 15px 25px; background: #007c3c; color: #FFF; border: none!important; border-radius: 10px;' /></div>
</div>
			<div class='clearfix'></div>'";
	}
	else
	{
		echo "Mail not send now...!";
	}
?>