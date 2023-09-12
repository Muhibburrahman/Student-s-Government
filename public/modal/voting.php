<?php
   include '../controller/connection.php';
   if(isset($_POST['AddVotingstuFromData'])){
      if($_POST['votingstu_id']=='0')
      {
        $user_profile='';
     $sql=mysqli_query($con," INSERT INTO `votingstu_list`(`votingstu_studentID`, `votingstu_LastDate`, `votingstu_status`, `votingstu_roll`, `votingstu_date`) VALUES ('".$_POST['votingstu_studentID']."', '".$_POST['votingstu_LastDate']."', '".$_POST['votingstu_status']."', '".$_POST['votingstu_roll']."', '".$_POST['votingstu_date']."')"); 
     if($sql){
       echo'data submitted Successfully';
     }
     else{
       echo 'try again 15';
     } 
     //--------------UPDATE-DATA-------------------
     }else{
       $sql=mysqli_query($con,"UPDATE `votingstu_list` SET `votingstu_studentID`='".$_POST['votingstu_studentID']."',
                                        `votingstu_LastDate`='".$_POST['votingstu_LastDate']."',
                                        `votingstu_status`='".$_POST['votingstu_status']."',
                                        `votingstu_roll`='".$_POST['votingstu_roll']."',
                                        `votingstu_date`='".$_POST['votingstu_date']."' WHERE `votingstu_id`='".$_POST['votingstu_id']."'");
   
   
     if($sql){
       echo'data updated Successfully';
     }
     else{
       echo 'try again';
     } 
     } 
     } 
if(isset($_POST['VotingStatusUpdate']))
{
  if($_POST['status']==='Active')
  {
    $sql=mysqli_query($con,"UPDATE `votingstu_list` SET `votingstu_status`='Deactivate' WHERE `votingstu_id`='".$_POST['VotingID']."'");
  }
  elseif($_POST['status']==='Deactivate')
  {
    $sql=mysqli_query($con,"UPDATE `votingstu_list` SET `votingstu_status`='Active' WHERE `votingstu_id`='".$_POST['VotingID']."'");
  }
  elseif($_POST['status']==='Delete')
  {
    $sql=mysqli_query($con,"UPDATE `votingstu_list` SET `votingstu_status`='Delete' WHERE `votingstu_id`='".$_POST['VotingID']."'");
  }else{
    $sql=mysqli_query($con,"UPDATE `votingstu_list` SET `votingstu_status`='Deactivate' WHERE `votingstu_id`='".$_POST['VotingID']."'");
  }
  echo'data updated Successfully';
}

      ?>