<?php 
  session_start();
include 'public/layout/header.php';
include 'public/controller/connection.php';

if(isset($_POST['login']))
{ 

$userRoll=$_POST['userRoll'];
if($userRoll=='admin')
{
 $login=mysqli_query($con,"SELECT * FROM admin WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'");
 $rowcount=mysqli_num_rows($login);
 if($rowcount=='1')
 {
  $_SESSION['admin']='ok';
  $_SESSION['user_name']='Muhim';
  $_SESSION['user_id']='A1';
  $_SESSION['user_roll']='admin';
echo '<script>window.location.href = "index.php"</script>';
 }
 else{
  echo '<script>alert("your username and password not match...");</script>';
 }
}elseif($userRoll=='exam')
{
$login=mysqli_query($con,"SELECT * FROM user_list WHERE user_email='".$_POST['username']."' AND user_password='".$_POST['password']."' AND user_status='Active'");
 $rowcount=mysqli_num_rows($login);
 if($rowcount=='1')
 {
  foreach ($login as $row) {
    $userName=$row['user_name'];
    $userID=$row['id'];
  }
  $_SESSION['admin']='ok';
  $_SESSION['user_name']=$userName;
  $_SESSION['user_id']=$userID;
  $_SESSION['user_roll']='exam';
    echo '<script>window.location.href = "index.php"</script>';
 }
 else{
  echo '<script>alert("your username and password not match...");</script>';
 }
}
elseif($userRoll=='faculty')
{
$login=mysqli_query($con,"SELECT * FROM faculty_list WHERE faculty_email='".$_POST['username']."' AND faculty_password='".$_POST['password']."' AND faculty_status='Active'");
 $rowcount=mysqli_num_rows($login);
 if($rowcount=='1')
 {
  foreach ($login as $row) {
    $userName=$row['faculty_name'];
    $userID=$row['id'];
  }
  $_SESSION['admin']='ok';
  $_SESSION['user_name']=$userName;
  $_SESSION['user_id']=$userID;
  $_SESSION['user_roll']='faculty';
echo '<script>window.location.href = "index.php"</script>';
 }
 else{
  echo '<script>alert("your username and password not match...");</script>';
 }
}
elseif($userRoll=='event')
{
$login=mysqli_query($con,"SELECT * FROM user_list WHERE user_email='".$_POST['username']."' AND user_password='".$_POST['password']."' AND user_status='Active'");
 $rowcount=mysqli_num_rows($login);
 if($rowcount=='1')
 {
  foreach ($login as $row) {
    $userName=$row['user_name'];
    $userID=$row['id'];
  }
  $_SESSION['admin']='ok';
  $_SESSION['user_name']=$userName;
  $_SESSION['user_id']=$userID;
  $_SESSION['user_roll']='event';
    echo '<script>window.location.href = "index.php"</script>';
 }
 else{
  echo '<script>alert("your username and password not match...");</script>';
 }
}
elseif($userRoll=='student')
{
$login=mysqli_query($con,"SELECT * FROM student_list WHERE student_email='".$_POST['username']."' AND student_password='".$_POST['password']."' AND student_status='Active'");
 $rowcount=mysqli_num_rows($login);
 if($rowcount=='1')
 {
  foreach ($login as $row) {
    $userName=$row['student_name'];
    $userID=$row['id'];
  }
  $_SESSION['admin']='ok';
  $_SESSION['user_name']=$userName;
  $_SESSION['user_id']=$userID;
  $_SESSION['user_roll']='student';
  echo '<script>window.location.href = "index.php"</script>';
 }
 else{
  echo '<script>alert("your username and password not match...");</script>';
 }
}
else{
  echo '<script>alert("select Roll...");</script>';
}
}
?>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
              	  	<div class="mt-n4 p-2">
          		<h4 class="text-center border-bottom pb-2">Admin-Login</h4>
          	</div>
                <form action="login.php" method="post">
                  <div class="form-group">
                    <label class="label">Roll</label>
                    <div class="input-group">
                      <select required  class="form-control" name="userRoll">
                        <option value="admin">Admin</option>
                        <option value="exam">Exam</option>
                        <option value="faculty">faculty</option>
                        <option value="event">Event</option>
                        <option value="student">Student</option>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="label">Username</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="username" placeholder="Username">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" name="password" placeholder="*********">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="login" class="btn btn-danger submit-btn btn-block">Login</button>
                  </div>
                </form>

             </div>
         </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>


    <style>
    .auth.auth-bg-1{
     /*  background-image: linear-gradient(to right, red , yellow);*/
      background-image:linear-gradient(#201e1e7a , #424241c2),url(assets/images/auth/BG-IMAGE.jpeg);
 
      }
      .auth.theme-one .auto-form-wrapper {
    background: #0a09096b;color: #ffff;
    box-shadow: 0px 0px 30px 5px #b0b2b7;
}
  
  .btn-danger {
    color: #fff;
    background-color: #a10e12;
    border-color: #a10e12;
}
  .btn-danger:hover {
    color: #fff;
    background-color: #a10e12;
    border-color: #f3eded;
}
    </style>