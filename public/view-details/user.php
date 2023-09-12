<?php 
include '../controller/connection.php';
if(isset($_POST['UserView'])){    
        $select=mysqli_query($con,"SELECT * FROM `user_list` WHERE id='".$_POST['userID']."'");
        foreach ($select as $user) {  
 echo '<div class="col-md-6 form-group">
 <label class="form-label">Name of shop</label>
 <input type="text" name="user_name" value="'.$user['user_name'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Email</label>
 <input type="text" name="user_email" value="'.$user['user_email'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Phone No</label>
 <input type="text" name="user_phone" value="'.$user['user_phone'].'" class="form-control">
</div>

<div class="col-md-6 form-group">
 <label class="form-label">DOB</label>
 <input type="date" name="user_dob" value="'.$user['user_dob'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Qualification</label>
 <input type="text" name="user_qualification" value="'.$user['user_qualification'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Password</label>
 <input type="text" name="user_password" value="'.$user['user_password'].'" class="form-control">
</div>

<div class="col-md-6 form-group">
 <label class="form-label">Father</label>
 <input type="text" name="user_father" value="'.$user['user_father'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Mother</label>
 <input type="text" name="user_mother" value="'.$user['user_mother'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Other</label>
 <input type="text" name="user_other" value="'.$user['user_other'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Roll</label>
 <input type="text" name="user_roll" value="'.$user['user_roll'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Status</label>
 <input type="text" name="user_status" value="'.$user['user_status'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Address</label>
 <input type="hidden" name="user_id" value="'.$user['id'].'">
 <input type="text" name="user_address" value="'.$user['user_address'].'" class="form-control">
</div>
</div>';
}
}

?>




  
