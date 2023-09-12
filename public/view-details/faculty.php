<?php 
include '../controller/connection.php';
if(isset($_POST['facultyView'])){   

        $select=mysqli_query($con,"SELECT * FROM `faculty_list` WHERE id='".$_POST['faculty_ID']."'");
        foreach ($select as $faculty) {  
 echo '<div class="col-md-6 form-group">
 <label class="form-label">Name</label>
 <input type="text" name="faculty_name" value="'.$faculty['faculty_name'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Email</label>
 <input type="text" name="faculty_email" value="'.$faculty['faculty_email'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Phone No</label>
 <input type="text" name="faculty_phone" value="'.$faculty['faculty_phone'].'" class="form-control">
</div>

<div class="col-md-6 form-group">
 <label class="form-label">DOB</label>
 <input type="date" name="faculty_dob" value="'.$faculty['faculty_dob'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Qualification</label>
 <input type="text" name="faculty_qualification" value="'.$faculty['faculty_qualification'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Password</label>
 <input type="text" name="faculty_password" value="'.$faculty['faculty_password'].'" class="form-control">
</div>

<div class="col-md-6 form-group">
 <label class="form-label">Father</label>
 <input type="text" name="faculty_father" value="'.$faculty['faculty_father'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Mother</label>
 <input type="text" name="faculty_mother" value="'.$faculty['faculty_mother'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Other</label>
 <input type="text" name="faculty_other" value="'.$faculty['faculty_other'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Roll</label>
 <input type="text" name="faculty_roll" value="'.$faculty['faculty_roll'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Status</label>
 <input type="text" name="faculty_status" value="'.$faculty['faculty_status'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Address</label>
 <input type="hidden" name="faculty_id" value="'.$faculty['id'].'">
 <input type="text" name="faculty_address" value="'.$faculty['faculty_address'].'" class="form-control">
</div>
</div>';
}
}

?>




  
