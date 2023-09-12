<?php 
include '../controller/connection.php';
$url='http://localhost/cms/php/school/admin/';
if(isset($_POST['doc_ViewDT'])){    
        $select=mysqli_query($con,"SELECT * FROM `document_typeslist` WHERE doc_id='".$_POST['doc_ID']."'");
        foreach ($select as $docty) {  
 echo ' <div class="col-md-12 form-group">
 <label class="form-label">Title</label>
 <input type="text" name="doc_Title"  value="'.$docty['doc_Title'].'" class="form-control">
</div>
<div class="col-md-12 form-group">
 <label class="form-label">Status</label>
 <input type="hidden" name="doc_id" value="'.$docty['doc_id'].'">
 <input type="text"  value="'.$docty['doc_status'].'" name="doc_status" class="form-control">
</div>';
}
}
?>




  
