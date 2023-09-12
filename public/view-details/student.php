<?php 
include '../controller/connection.php';
if(isset($_POST['studentView'])){    
        $select=mysqli_query($con,"SELECT * FROM `student_list` WHERE id='".$_POST['studentID']."'");
        foreach ($select as $user) {  
 echo '<div class="col-md-6 form-group">
 <label class="form-label">Name of shop</label>
 <input type="text" name="student_name" value="'.$user['student_name'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Email</label>
 <input type="text" name="student_email" value="'.$user['student_email'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Phone No</label>
 <input type="text" name="student_phone" value="'.$user['student_phone'].'" class="form-control">
</div>

<div class="col-md-6 form-group">
 <label class="form-label">DOB</label>
 <input type="date" name="student_dob" value="'.$user['student_dob'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Qualification</label>
 <input type="text" name="student_division" value="'.$user['student_division'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Password</label>
 <input type="text" name="student_password" value="'.$user['student_password'].'" class="form-control">
</div>

<div class="col-md-6 form-group">
 <label class="form-label">Father</label>
 <input type="text" name="student_father" value="'.$user['student_father'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Mother</label>
 <input type="text" name="student_mother" value="'.$user['student_mother'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Other</label>
 <input type="text" name="student_other" value="'.$user['student_other'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Roll</label>
 <input type="text" name="student_course" value="'.$user['student_course'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Status</label>
 <input type="text" name="student_status" value="'.$user['student_status'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Address</label>
 <input type="hidden" name="student_id" value="'.$user['id'].'">
 <input type="text" name="student_address" value="'.$user['student_address'].'" class="form-control">
</div>
</div>';
}
}

?>




  
