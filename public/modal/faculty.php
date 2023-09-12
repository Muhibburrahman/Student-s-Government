<?php
   include '../controller/connection.php';
   if(isset($_POST['AddfacultyFormData'])){
      if($_POST['faculty_id']=='0')
      {
        $faculty_profile='';
     $sql=mysqli_query($con," INSERT INTO `faculty_list`(`faculty_name`, `faculty_email`, `faculty_phone`, `faculty_address`, `faculty_dob`,  `faculty_qualification`, `faculty_password`, `faculty_joindate`, `faculty_profile`, `faculty_roll`, `faculty_other`, `faculty_father`, `faculty_mother`, `faculty_status`) VALUES ('".$_POST['faculty_name']."', '".$_POST['faculty_email']."', '".$_POST['faculty_phone']."', '".$_POST['faculty_address']."', '".$_POST['faculty_dob']."', '".$_POST['faculty_qualification']."', '".$_POST['faculty_password']."', '$today_date', '$faculty_profile', '".$_POST['faculty_roll']."', '".$_POST['faculty_other']."', '".$_POST['faculty_father']."', '".$_POST['faculty_mother']."', '".$_POST['faculty_status']."')"); 
     if($sql){
       echo'data submitted Successfully';
     }
     else{
       echo 'try again 15';
     } 
     //--------------UPDATE-DATA-------------------
     }else{
       $sql=mysqli_query($con,"UPDATE `faculty_list` SET `faculty_name`='".$_POST['faculty_name']."',
                                        `faculty_email`='".$_POST['faculty_email']."',
                                        `faculty_phone`='".$_POST['faculty_phone']."',
                                        `faculty_address`='".$_POST['faculty_address']."',
                                        `faculty_dob`='".$_POST['faculty_dob']."',
                                        `faculty_qualification`='".$_POST['faculty_qualification']."',
                                        `faculty_password`='".$_POST['faculty_password']."',
                                        `faculty_roll`='".$_POST['faculty_roll']."',
                                        `faculty_other`='".$_POST['faculty_other']."',
                                        `faculty_father`='".$_POST['faculty_father']."',
                                        `faculty_mother`='".$_POST['faculty_mother']."',
                                        `faculty_status`='".$_POST['faculty_status']."' WHERE `id`='".$_POST['faculty_id']."'");
   
   
     if($sql){
       echo'data updated Successfully';
     }
     else{
       echo 'try again';
     } 
     } 
     } 
if(isset($_POST['userStatusupdate']))
{
  if($_POST['status']==='Active')
  {
    $sql=mysqli_query($con,"UPDATE `faculty_list` SET `faculty_status`='Deactivate' WHERE `id`='".$_POST['faculty_id']."'");
  }
  elseif($_POST['status']==='Deactivate')
  {
    $sql=mysqli_query($con,"UPDATE `faculty_list` SET `faculty_status`='Active' WHERE `id`='".$_POST['faculty_id']."'");
  }
  elseif($_POST['status']==='Delete')
  {
    $sql=mysqli_query($con,"UPDATE `faculty_list` SET `faculty_status`='Delete' WHERE `id`='".$_POST['faculty_id']."'");
  }else{
    $sql=mysqli_query($con,"UPDATE `faculty_list` SET `faculty_status`='Deactivate' WHERE `id`='".$_POST['faculty_id']."'");
  }
  echo'data updated Successfully';
}

      ?>