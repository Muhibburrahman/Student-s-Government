<?php
   include '../controller/connection.php';
   if(isset($_POST['AddUserFormData'])){
      if($_POST['user_id']=='0')
      {
        $user_profile='';
     $sql=mysqli_query($con," INSERT INTO `user_list`(`user_name`, `user_email`, `user_phone`, `user_address`, `user_dob`,  `user_qualification`, `user_password`, `user_joindate`, `user_profile`, `user_roll`, `user_other`, `user_father`, `user_mother`, `user_status`) VALUES ('".$_POST['user_name']."', '".$_POST['user_email']."', '".$_POST['user_phone']."', '".$_POST['user_address']."', '".$_POST['user_dob']."', '".$_POST['user_qualification']."', '".$_POST['user_password']."', '$today_date', '$user_profile', '".$_POST['user_roll']."', '".$_POST['user_other']."', '".$_POST['user_father']."', '".$_POST['user_mother']."', '".$_POST['user_status']."')"); 
     if($sql){
       echo'data submitted Successfully';
     }
     else{
       echo 'try again 15';
     } 
     //--------------UPDATE-DATA-------------------
     }else{
       $sql=mysqli_query($con,"UPDATE `user_list` SET `user_name`='".$_POST['user_name']."',
                                        `user_email`='".$_POST['user_email']."',
                                        `user_phone`='".$_POST['user_phone']."',
                                        `user_address`='".$_POST['user_address']."',
                                        `user_dob`='".$_POST['user_dob']."',
                                        `user_qualification`='".$_POST['user_qualification']."',
                                        `user_password`='".$_POST['user_password']."',
                                        `user_roll`='".$_POST['user_roll']."',
                                        `user_other`='".$_POST['user_other']."',
                                        `user_father`='".$_POST['user_father']."',
                                        `user_mother`='".$_POST['user_mother']."',
                                        `user_status`='".$_POST['user_status']."' WHERE `id`='".$_POST['user_id']."'");
   
   
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
    $sql=mysqli_query($con,"UPDATE `user_list` SET `user_status`='Deactivate' WHERE `id`='".$_POST['user_id']."'");
  }
  elseif($_POST['status']==='Deactivate')
  {
    $sql=mysqli_query($con,"UPDATE `user_list` SET `user_status`='Active' WHERE `id`='".$_POST['user_id']."'");
  }
  elseif($_POST['status']==='Delete')
  {
    $sql=mysqli_query($con,"UPDATE `user_list` SET `user_status`='Delete' WHERE `id`='".$_POST['user_id']."'");
  }else{
    $sql=mysqli_query($con,"UPDATE `user_list` SET `user_status`='Deactivate' WHERE `id`='".$_POST['user_id']."'");
  }
  echo'data updated Successfully';
}

      ?>