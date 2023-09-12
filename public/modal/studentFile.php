<?php
include '../controller/connection.php';

// $stuFile_url = '';
if (isset($_POST['documentFormData'])) {

  $filename = $_FILES["stuFile_file"]["name"];
  $tempname = $_FILES["stuFile_file"]["tmp_name"];
  $fileurl = 'student/' . $filename;
  if (move_uploaded_file($tempname, $fileurl)) {
    $filestatus = '1';
  } else {
    $filestatus = '0';
  }
  $stuFile_url = $url . $fileurl;
  if ($_POST['stuFile_id'] == '0') {
    $user_profile = '';
    $sql = mysqli_query($con, "INSERT INTO `student_uploadfilelist`(`stuFile_title`,`stuFile_status`,`stuFile_date`,`stuFile_other`,`stuFile_url`,`stuFile_by`) VALUES ('" . $_POST['stuFile_title'] . "', '" . $_POST['stuFile_status'] . "','" . $_POST['stuFile_date'] . "', '" . $_POST['stuFile_other'] . "','$stuFile_url','".$_POST['user_id']."')");
    if ($sql) {
      echo 'data submitted Successfully';
    } else {
      echo 'try again 15';
    }
    //--------------UPDATE-DATA-------------------
  } else {
    $sql = mysqli_query($con, "UPDATE `student_uploadfilelist` SET `stuFile_title`='" . $_POST['stuFile_title'] . "',
                                                          `stuFile_date`='" . $_POST['stuFile_date'] . "',
                                                          `stuFile_status`='" . $_POST['stuFile_status'] . "',
                                                          `stuFile_other`='" . $_POST['stuFile_other'] . "',
                                                          `stuFile_url`='$stuFile_url' WHERE `stuFile_id`='" . $_POST['stuFile_id'] . "'");


    if ($sql) {
      echo 'data updated Successfully';
    } else {
      echo 'try again';
    }
  }
}
if (isset($_POST['DTStatusupdate'])) {
  if ($_POST['status'] === 'Active') {
    $sql = mysqli_query($con, "UPDATE `student_uploadfilelist` SET `stuFile_status`='Deactivate' WHERE `stuFile_id`='" . $_POST['stuFile_id'] . "'");
  } elseif ($_POST['status'] === 'Deactivate') {
    $sql = mysqli_query($con, "UPDATE `student_uploadfilelist` SET `stuFile_status`='Active' WHERE `stuFile_id`='" . $_POST['stuFile_id'] . "'");
  } elseif ($_POST['status'] === 'Delete') {
    $sql = mysqli_query($con, "UPDATE `student_uploadfilelist` SET `stuFile_status`='Delete' WHERE `stuFile_id`='" . $_POST['stuFile_id'] . "'");
  } else {
    $sql = mysqli_query($con, "UPDATE `student_uploadfilelist` SET `stuFile_status`='Deactivate' WHERE `stuFile_id`='" . $_POST['stuFile_id'] . "'");
  }
  echo 'data updated Successfully';
}
