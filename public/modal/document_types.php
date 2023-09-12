<?php
   include '../controller/connection.php';
   if(isset($_POST['AddDTFormData'])){
      if($_POST['doc_id']=='0')
      {
        $user_profile='';
     $sql=mysqli_query($con," INSERT INTO `document_typeslist`(`doc_Title`, `doc_status`) VALUES ('".$_POST['doc_Title']."', '".$_POST['doc_status']."')"); 
     if($sql){
       echo'data submitted Successfully';
     }
     else{
       echo 'try again 15';
     } 
     //--------------UPDATE-DATA-------------------
     }else{
       $sql=mysqli_query($con,"UPDATE `document_typeslist` SET `doc_Title`='".$_POST['doc_Title']."',
                                        `doc_status`='".$_POST['doc_status']."' WHERE `doc_id`='".$_POST['doc_id']."'");
   
   
     if($sql){
       echo'data updated Successfully';
     }
     else{
       echo 'try again';
     } 
     } 
     } 
if(isset($_POST['DTStatusupdate']))
{
  if($_POST['status']==='Active')
  {
    $sql=mysqli_query($con,"UPDATE `document_typeslist` SET `doc_status`='Deactivate' WHERE `doc_id`='".$_POST['doc_id']."'");
  }
  elseif($_POST['status']==='Deactivate')
  {
    $sql=mysqli_query($con,"UPDATE `document_typeslist` SET `doc_status`='Active' WHERE `doc_id`='".$_POST['doc_id']."'");
  }
  elseif($_POST['status']==='Delete')
  {
    $sql=mysqli_query($con,"UPDATE `document_typeslist` SET `doc_status`='Delete' WHERE `doc_id`='".$_POST['doc_id']."'");
  }else{
    $sql=mysqli_query($con,"UPDATE `document_typeslist` SET `doc_status`='Deactivate' WHERE `doc_id`='".$_POST['doc_id']."'");
  }
  echo'data updated Successfully';
}

      ?>