<?php
include '../../public/layout/main_section.php';
?>
<div class="row mb-2 p-2 m-0 border border-2">
    <div class="col-md-3">
        <h4 class="fs-1">Voting Candidates List</h4>
    </div>
    <div class="col-md-6 form-group">
        <input type="search" id="myInput" placeholder="Search hear" class="form-control border" name="">
    </div>
    <div class="col-md-3 text-right">
        <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentDataFrom">Add-New</button>-->
    </div>
</div>
<div class="viewData table-responsive">
    <table class="table table-striped table-bordered text-center">
        <thead class="bg-warning">
            <tr class="text-dark fw-bold">
                <th>#</th>
                <th>Name</th>
                <th>Start-Date</th>
                <th>End-Date</th>
                <th>Count</th>
                <th>Roll</th>
                <th>Status</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $brch = mysqli_query($con, "SELECT * FROM `student_list` INNER JOIN votingstu_list ON student_list.id=votingstu_list.votingstu_studentID");
            $cnt = 1;
            foreach ($brch as $key => $data) {
                if ($data['votingstu_status'] == 'Delete') {
                } else {?>
                    <tr class="">
                        <td><?= $cnt; ?></td>
                        <td><?= $data['student_name']; ?></td>
                        <td><?= $data['votingstu_date']; ?></td>
                        <td><?= $data['votingstu_LastDate']; ?></td>
                        <td><?php 
                               $show=mysqli_query($con,"SELECT * FROM `voting_poll` WHERE `voting_candidate`='".$data['id']."' AND `voting_status`='1'");
                               $countV=mysqli_num_rows($show);
                                echo $countV; ?></td>
                        <td><?= $data['votingstu_roll']; ?></td>
                        <td><?= $data['votingstu_status']; ?></td>
                        <th class="p-0 m-0">
                            <a href="view/student/VotingCandidateslist.php?edit=<?= $data['votingstu_id'];?>"  class="btn btn-sm btn-info">Edit</a>
                        </th>
                        <th class="p-0 m-0">
                            <button VotingStatus="<?= $data['votingstu_status']; ?>" VotingID="<?= $data['votingstu_id']; ?>" class="btn btn-sm btn-info VotingStatus"><?= $data['votingstu_status']; ?></button>
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
if (isset($_GET['i'])) {
    $student = mysqli_query($con, "SELECT * FROM student_list WHERE id='" . $_GET['i'] . "'");
foreach ($student as $stu) {
    ?>
        <!-- Modal -->
        <div class="modal fade show" style="display: block;" id="studentDataFrom" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="studentDataFromLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title fs-5" id="studentFromTtile">Add Voting Candidates</h6>
                        <button type="button" class="btn-close close_btn1" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <form action="#" method="post" id="AddVotingstuFromData">
                        <div class="row p-2" id="votingstuView">
                            <div class="col-md-6 form-group">
                                <label class="form-label">Name -1</label>
                                <input type="text" readonly name="1" value="<?= $stu['student_name']; ?>" class="form-control">
                                <input type="hidden" name="votingstu_studentID" value="<?= $stu['id']; ?>" class="form-control">
                            </div>
                            <div class="col-md-3 form-group">
                                <label class="form-label">Start-Date</label>
                                <input type="date" name="votingstu_date" class="form-control">
                            </div>
                            <div class="col-md-3 form-group">
                                <label class="form-label">Last-Date</label>
                                <input type="date" name="votingstu_LastDate" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">Roll</label>
                                <input type="text" name="votingstu_roll" class="form-control">
                            </div>

                            <div class="col-md-6 form-group">
                                <label class="form-label">Status</label>
                                <input type="hidden" name="votingstu_id" value="0">
                                <input type="text" name="votingstu_status" class="form-control">
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-md-12 text-center">
                                <input type="hidden" name="AddVotingstuFromData" value="0">
                                <button type="button" class="btn-close btn btn-danger close_btn1">Close</button>
                                <button type="submit" name="submit" value="save" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <?php }} ?>
<?php 
    if(isset($_GET['edit'])) {
    $student = mysqli_query($con, "SELECT * FROM `student_list` INNER JOIN votingstu_list ON student_list.id=votingstu_list.votingstu_studentID WHERE votingstu_list.votingstu_id='" . $_GET['edit'] . "'");
foreach ($student as $stu) {
    ?>
        <div class="modal fade show 11" style="display:block" id="studentDataFrom" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="studentDataFromLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title fs-5" id="studentFromTtile">View Voting Candidates</h6>
                        <button type="button" class="btn-close close_btn1" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <form action="#" method="post" id="AddVotingstuFromData">
                        <div class="row p-2" id="votingstuView">
                            <div class="col-md-6 form-group">
                                <label class="form-label">Name</label>
                                <input type="text" readonly name="1" value="<?= $stu['student_name']; ?>" class="form-control">
                                <input type="hidden" name="votingstu_studentID" value="<?= $stu['id']; ?>" class="form-control">
                            </div>
                            <div class="col-md-3 form-group">
                                <label class="form-label">Start-Date</label>
                                <input type="date" value="<?= $stu['votingstu_date'];?>" name="votingstu_date" class="form-control">
                            </div>
                            <div class="col-md-3 form-group">
                                <label class="form-label">Last-Date</label>
                                <input type="date" value="<?= $stu['votingstu_LastDate'];?>" name="votingstu_LastDate" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">Roll</label>
                                <input type="text" value="<?= $stu['votingstu_roll'];?>" name="votingstu_roll" class="form-control">
                            </div>

                            <div class="col-md-6 form-group">
                                <label class="form-label">Status</label>
                                <input type="hidden" name="votingstu_id" value="<?= $stu['votingstu_id'];?>">
                                <input type="text" value="<?= $stu['votingstu_status'];?>" name="votingstu_status" class="form-control">
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-md-12 text-center">
                                <input type="hidden" name="AddVotingstuFromData" value="0">
                                <button type="button" class="btn-close btn btn-danger close_btn1">Close</button>
                                <button type="submit" name="submit" value="save" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <?php }} ?>
<script type="text/javascript">
    $(document).ready(function() {

        $(document).on('click', '.VotingStatus', function(event) {
            var VotingStatusUpdate = "VotingStatusUpdate";
            var status = $(this).attr("VotingStatus");
            var VotingID = $(this).attr("VotingID");
            //alert(VotingID);
            $.ajax({
                type: "POST",
                url: "public/modal/voting.php",
                data: {
                    status: status,
                    VotingID: VotingID,
                    VotingStatusUpdate: VotingStatusUpdate,
                },
                success: function(data) {
                    alert(data);
                    location.reload();
                }
            });
        });
        $(document).on('click', '.VotingViewBTN', function(event) {
            var studentView = "UserView";
            var VotingID = $(this).attr("VotingID");
            $.ajax({
                type: "POST",
                url: "public/view-details/voting.php",
                data: {
                    VotingID: VotingID,
                    studentView: studentView,
                },
                success: function(data) {
                    $('#studentFromTtile').html('View Student');
                    $('#studentDataFrom').addClass('show').css('display', 'block');
                    $('#studentView').html(data);
                }
            });
        });

        $(document).on('click', '.close_btn1', function(event) {
            window.location = 'view/student/VotingCandidateslist.php';
        });



    });
    $("#AddVotingstuFromData").on('submit', (function(e) {
        e.preventDefault();
        $.ajax({
            url: "public/modal/voting.php",
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