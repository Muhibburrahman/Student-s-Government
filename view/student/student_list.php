<?php
include '../../public/layout/main_section.php';
?>
<div class="row mb-2 p-2 m-0 border border-2">
    <div class="col-md-3">
        <h4 class="fs-1">Student List</h4>
    </div>
    <div class="col-md-6 form-group">
        <input type="search" id="myInput" placeholder="Search hear" class="form-control border" name="">
    </div>
    <div class="col-md-3 text-right">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentDataFrom">Add-New</button>
    </div>
</div>
<div class="viewData table-responsive">
    <table class="table table-striped table-bordered text-center">
        <thead class="bg-warning">
            <tr class="text-dark fw-bold">
                <th>#</th>
                <th>Name</th>
                <th>Contact No</th>
                <th>Email-id</th>
                <th>Password</th>
                <th>Roll</th>
                <th>Status</th>
                <th colspan="2">Action</th>
                <th colspan="0">Voting-Status</th>

            </tr>
        </thead>
        <tbody>
            <?php $brch = mysqli_query($con, "SELECT * FROM student_list");
            $cnt = 1;
            foreach ($brch as $key => $data) {
                if ($data['student_status'] == 'Delete') {
                } else {
            ?>
                    <tr class="">
                        <td><?= $cnt; ?></td>
                        <td><?= $data['student_name']; ?></td>
                        <td><?= $data['student_phone']; ?></td>
                        <td><?= $data['student_email']; ?></td>
                        <td><?= $data['student_password']; ?></td>
                        <td><?= $data['student_course']; ?></td>
                        <td><?= $data['student_status']; ?></td>
                        <th class="p-0 m-0">
                            <button studentID="<?= $data['id']; ?>" class="btn btn-sm btn-info studentViewBTN">Edit</button>
                        </th>
                        <th class="p-0 m-0">
                            <button studentStatus="<?= $data['student_status']; ?>" studentID="<?= $data['id']; ?>" class="btn btn-sm btn-info studentStatus"><?= $data['student_status']; ?></button>
                        </th>
                        <th class="p-0 m-0">
                            <?php
                            $voting = mysqli_query($con, "SELECT * FROM votingstu_list WHERE votingstu_studentID='" . $data['id'] . "'");
                            if(mysqli_num_rows($voting)<1){
                                echo '<a href="view/student/VotingCandidateslist.php?i='.$data['id'].'" class="btn btn-sm btn-info">Voting</a>';
                            }else{
                                foreach($voting as $vot)
                                {
                                if($vot['votingstu_status']=='Active')
                                {
                                echo '<button studentStatus="" studentID="" class="btn btn-sm btn-info studentStatus">'.$vot['votingstu_status'].'</button>'; 
                                }
                                 else{
                                    echo '<button studentStatus="" studentID="" class="btn btn-sm btn-info studentStatus">Deactivate</button>';
                                 }
                                }
                            }
                            
                            ?>
                            </th>
                    </tr>
            <?php }
                $cnt++;
            } ?>
        </tbody>
    </table>
</div>
<?php
include '../../public/layout/footer.php';
?>
<?php
?>
<!-- Modal -->
<div class="modal fade" id="studentDataFrom" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="studentDataFromLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title fs-5" id="studentFromTtile">Add Student</h6>
                <button type="button" class="btn-close close_btn" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="#" method="post" id="AddstudentFormData">
                <div class="row p-2" id="studentView">
                    <div class="col-md-6 form-group">
                        <label class="form-label">Name </label>
                        <input type="text" name="student_name" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">Email</label>
                        <input type="text" name="student_email" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">Phone No</label>
                        <input type="text" name="student_phone" class="form-control">
                    </div>

                    <div class="col-md-6 form-group">
                        <label class="form-label">DOB</label>
                        <input type="date" name="student_dob" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">Division</label>
                        <input type="text" name="student_division" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">Password</label>
                        <input type="text" name="student_password" class="form-control">
                    </div>

                    <div class="col-md-6 form-group">
                        <label class="form-label">Father</label>
                        <input type="text" name="student_father" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">Mother</label>
                        <input type="text" name="student_mother" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">Other</label>
                        <input type="text" name="student_other" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">Roll</label>
                        <input type="text" name="student_course" class="form-control">
                    </div>

                    <div class="col-md-6 form-group">
                        <label class="form-label">Status</label>
                        <input type="text" name="student_status" class="form-control">
                    </div>

                    <div class="col-md-6 form-group">
                        <label class="form-label">Address</label>
                        <input type="hidden" name="student_id" value="0">
                        <input type="text" name="student_address" value="" class="form-control">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-12 text-center">
                        <input type="hidden" name="AddstudentFormData" value="0">
                        <button type="button" class="btn-close btn btn-danger close_btn">Close</button>
                        <button type="submit" name="submit" value="save" class="btn btn-primary">Submit</button>

                    </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {

        $(document).on('click', '.studentStatus', function(event) {
            var studentStatusUpdate = "studentStatusUpdate";
            var status = $(this).attr("studentStatus");
            var studentID = $(this).attr("studentID");
            //alert(status);
            $.ajax({
                type: "POST",
                url: "public/modal/student.php",
                data: {
                    status: status,
                    studentID: studentID,
                    studentStatusUpdate: studentStatusUpdate,
                },
                success: function(data) {
                    alert(data);
                    location.reload();
                }
            });
        });

        $(document).on('click', '.studentViewBTN', function(event) {
            var studentView = "UserView";
            var studentID = $(this).attr("studentID");
            $.ajax({
                type: "POST",
                url: "public/view-details/student.php",
                data: {
                    studentID: studentID,
                    studentView: studentView,
                },
                success: function(data) {
                    $('#studentFromTtile').html('View Student');
                    $('#studentDataFrom').addClass('show').css('display', 'block');
                    $('#studentView').html(data);
                }
            });
        });

    });
    $("#AddstudentFormData").on('submit', (function(e) {
        e.preventDefault();
        /*alert('ddd');*/
        $.ajax({
            url: "public/modal/student.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                alert(data);
                location.reload();
            }
        });
    }));
</script>