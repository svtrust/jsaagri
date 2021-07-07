<?php
include '../../includes/config.php';
 $obj= new customer_details();
 $result =  $obj->addcustom_details();
// print_r($result);

 $output=array();
 if(count($result)>0){
 foreach($result as $row){
    $temp_array=array();
     $temp_array['cid']=$row['cid'];
     $temp_array['label']=$row['customer_name'];
     $temp_array['customer_gst']=$row['customer_gst'];
      $temp_array['phone']=$row['phone'];
        $temp_array['address']=$row['address'];
         $temp_array['companyname']=$row['company_name'];
    $output[]=$temp_array;
  }
 }

echo json_encode($result);
?>


