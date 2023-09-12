<?php
include '../controller/connection.php';
// $document_url = '';
if (isset($_POST['documentFormData'])) {

  $filename = $_FILES["document_file"]["name"];
  $tempname = $_FILES["document_file"]["tmp_name"];
  $fileurl = 'document/' . $filename;
  if (move_uploaded_file($tempname, $fileurl)) {
    $filestatus = '1';
  } else {
    $filestatus = '0';
  }
  $document_url = $url . $fileurl;
  if ($_POST['document_id'] == '0') {
    $user_profile = '';
    $sql = mysqli_query($con, " INSERT INTO `document_list`(`document_types`,`document_title`,`document_status`,`document_date`,`document_other`,`document_url`,`document_By`) VALUES ('".$_POST['document_types']."','" . $_POST['document_title'] . "', '" . $_POST['document_status'] . "','" . $_POST['document_date'] . "', '" . $_POST['document_other'] . "','$document_url','".$_POST['document_By']."')");
    if ($sql) {
      echo 'data submitted Successfully';
    } else {
      echo 'try again 15';
    }
    //--------------UPDATE-DATA-------------------
  } else {
    $sql = mysqli_query($con, "UPDATE `document_list` SET `document_title`='" . $_POST['document_title'] . "',
                                                          `document_date`='" . $_POST['document_date'] . "',
                                                          `document_types`='" . $_POST['document_types'] . "',
                                                          `document_status`='" . $_POST['document_status'] . "',
                                                          `document_other`='" . $_POST['document_other'] . "',
                                                          `document_url`='$document_url' WHERE `document_id`='" . $_POST['document_id'] . "'");


    if ($sql) {
      echo 'data updated Successfully';
    } else {
      echo 'try again';
    }
  }
}
if (isset($_POST['DTStatusupdate'])) {
  if ($_POST['status'] === 'Active') {
    $sql = mysqli_query($con, "UPDATE `document_list` SET `document_status`='Deactivate' WHERE `document_id`='" . $_POST['document_id'] . "'");
  } elseif ($_POST['status'] === 'Deactivate') {
    $sql = mysqli_query($con, "UPDATE `document_list` SET `document_status`='Active' WHERE `document_id`='" . $_POST['document_id'] . "'");
  } elseif ($_POST['status'] === 'Delete') {
    $sql = mysqli_query($con, "UPDATE `document_list` SET `document_status`='Delete' WHERE `document_id`='" . $_POST['document_id'] . "'");
  } else {
    $sql = mysqli_query($con, "UPDATE `document_list` SET `document_status`='Deactivate' WHERE `document_id`='" . $_POST['document_id'] . "'");
  }
  echo 'data updated Successfully';
}
