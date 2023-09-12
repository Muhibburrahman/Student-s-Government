<?php
   include '../controller/connection.php';
   if(isset($_POST['AddstudentFormData'])){
      if($_POST['student_id']=='0')
      {
        $student_profile='';
     $sql=mysqli_query($con," INSERT INTO `student_list`(`student_name`, `student_email`, `student_phone`, `student_address`, `student_dob`,  `student_division`, `student_password`, `student_joindate`, `student_profile`, `student_course`, `student_other`, `student_father`, `student_mother`, `student_status`) VALUES ('".$_POST['student_name']."', '".$_POST['student_email']."', '".$_POST['student_phone']."', '".$_POST['student_address']."', '".$_POST['student_dob']."', '".$_POST['student_division']."', '".$_POST['student_password']."', '$today_date', '$student_profile', '".$_POST['student_course']."', '".$_POST['student_other']."', '".$_POST['student_father']."', '".$_POST['student_mother']."', '".$_POST['student_status']."')"); 
     if($sql){
       echo'data submitted Successfully';
     }
     else{
       echo 'try again 15';
     } 
     //--------------UPDATE-DATA-------------------
     }else{
       $sql=mysqli_query($con,"UPDATE `student_list` SET `student_name`='".$_POST['student_name']."',
                                        `student_email`='".$_POST['student_email']."',
                                        `student_phone`='".$_POST['student_phone']."',
                                        `student_address`='".$_POST['student_address']."',
                                        `student_dob`='".$_POST['student_dob']."',
                                        `student_division`='".$_POST['student_division']."',
                                        `student_password`='".$_POST['student_password']."',
                                        `student_course`='".$_POST['student_course']."',
                                        `student_other`='".$_POST['student_other']."',
                                        `student_father`='".$_POST['student_father']."',
                                        `student_mother`='".$_POST['student_mother']."',
                                        `student_status`='".$_POST['student_status']."' WHERE `id`='".$_POST['student_id']."'");
   
   
     if($sql){
       echo'data updated Successfully';
     }
     else{
       echo 'try again';
     } 
     } 
     } 
if(isset($_POST['studentStatusUpdate']))
{
  if($_POST['status']==='Active')
  {
    $sql=mysqli_query($con,"UPDATE `student_list` SET `student_status`='Deactivate' WHERE `id`='".$_POST['studentID']."'");
  }
  elseif($_POST['status']==='Deactivate')
  {
    $sql=mysqli_query($con,"UPDATE `student_list` SET `student_status`='Active' WHERE `id`='".$_POST['studentID']."'");
  }
  elseif($_POST['status']==='Delete')
  {
    $sql=mysqli_query($con,"UPDATE `student_list` SET `student_status`='Delete' WHERE `id`='".$_POST['studentID']."'");
  }else{
    $sql=mysqli_query($con,"UPDATE `student_list` SET `student_status`='Deactivate' WHERE `id`='".$_POST['studentID']."'");
  }
  echo'data updated Successfully';
}

      ?>