<?php 
include '../controller/connection.php';
if(isset($_POST['studentView'])){    
        $select=mysqli_query($con,"SELECT * FROM `student_list` WHERE id='".$_POST['studentID']."'");
        foreach ($select as $stu) {  
 echo ' <div class="col-md-6 form-group">
 <label class="form-label">Name</label>
 <input type="text" readonly name="1" value="'.$stu['student_name'].'" class="form-control">
 <input type="hidden" name="votingstu_studentID" value="'.$stu['id'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Last-Date</label>
 <input type="date" name="votingstu_LastDate" value="'.$stu['student_name'].'" class="form-control">
</div>
<div class="col-md-6 form-group">
 <label class="form-label">Roll</label>
 <input type="text" name="votingstu_roll" value="'.$stu['student_name'].'" class="form-control">
</div>

<div class="col-md-6 form-group">
 <label class="form-label">Status</label>
 <input type="hidden" name="votingstu_id" value="'.$stu['student_name'].'">
 <input type="text" name="votingstu_status" value="'.$stu['student_name'].'" class="form-control">
</div>';
}
}

?>




  
