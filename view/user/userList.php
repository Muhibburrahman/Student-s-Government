<?php
include '../../public/layout/main_section.php';
?>
<div class="row mb-2 p-2 m-0 border border-2">
    <div class="col-md-3">
        <h4 class="fs-1">User List</h4>
    </div>
    <div class="col-md-6 form-group">
        <input type="search" id="myInput" placeholder="Search hear" class="form-control border" name="">
    </div>
    <div class="col-md-3 text-right">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shopDataFrom">Add-New</button>
    </div>
</div>
<div class="viewData table-responsive">
    <table class="table table-striped table-bordered text-center">
        <thead class="bg-warning">
            <tr class="text-dark fw-bold">
                <th>#</th>
                <th>Name </th>
                <th>Contact No</th>
                <th>Email-id</th>
                <th>Password</th>
                <th>Roll</th>
                <th>Status</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $brch = mysqli_query($con, "SELECT * FROM user_list");
            $cnt = 1;
            foreach ($brch as $key => $data) {
                if ($data['user_status'] == 'Delete') {
                } else {
            ?>
                    <tr class="">
                        <td><?= $cnt; ?></td>
                        <td><?= $data['user_name']; ?></td>
                        <td><?= $data['user_phone']; ?></td>
                        <td><?= $data['user_email']; ?></td>
                        <td><?= $data['user_password']; ?></td>
                        <td><?= $data['user_roll']; ?></td>
                        <td><?= $data['user_status']; ?></td>
                        <th class="p-0 m-0"><button userID="<?= $data['id']; ?>" class="btn btn-sm btn-info ViewShop">Edit</button></th>
                        <th class="p-0 m-0">
                            <button userStatus="<?= $data['user_status']; ?>" user_id="<?= $data['id']; ?>" class="btn btn-sm btn-info userStatus"><?= $data['user_status']; ?></button>
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
<div class="modal fade" id="shopDataFrom" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="shopDataFromLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title fs-5" id="shopFromTitle">Add User</h6>
                <button type="button" class="btn-close close_btn" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="#" method="post" id="AddUserFormData">
                <div class="row p-2" id="UserView">
                    <div class="col-md-6 form-group">
                        <label class="form-label">Name</label>
                        <input type="text" name="user_name" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">Email</label>
                        <input type="text" name="user_email" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">Phone No</label>
                        <input type="text" name="user_phone" class="form-control">
                    </div>

                    <div class="col-md-6 form-group">
                        <label class="form-label">DOB</label>
                        <input type="date" name="user_dob" class="form-control">
                    </div>
                    <!-- <div class="col-md-6 form-group">
                        <label class="form-label">Time</label>
                        <input type="text" name="user_time" class="form-control">
                    </div> -->
                    <div class="col-md-6 form-group">
                        <label class="form-label">Qualification</label>
                        <input type="text" name="user_qualification" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">Password</label>
                        <input type="text" name="user_password" class="form-control">
                    </div>

                    <div class="col-md-6 form-group">
                        <label class="form-label">Father</label>
                        <input type="text" name="user_father" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">Mother</label>
                        <input type="text" name="user_mother" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">Other</label>
                        <input type="text" name="user_other" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">Roll</label>
                        <input type="text" name="user_roll" class="form-control">
                    </div>

                    <div class="col-md-6 form-group">
                        <label class="form-label">Status</label>
                        <input type="text" name="user_status" class="form-control">
                    </div>

                    <div class="col-md-6 form-group">
                        <label class="form-label">Address</label>
                        <input type="hidden" name="user_id" value="0">
                        <input type="text" name="user_address" value="" class="form-control">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-12 text-center">
                        <input type="hidden" name="AddUserFormData" value="0">
                        <button type="button" class="btn-close btn btn-danger close_btn">Close</button>
                        <button type="submit" name="submit" value="save" class="btn btn-primary">Submit</button>

                    </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {

        $(document).on('click', '.userStatus', function(event) {
            var userStatusupdate = "userStatusupdate";
            var status = $(this).attr("userStatus");
            var user_id = $(this).attr("user_id");
            //alert(status);
            $.ajax({
                type: "POST",
                url: "public/modal/user.php",
                data: {
                    status: status,
                    user_id: user_id,
                    userStatusupdate: userStatusupdate,
                },
                success: function(data) {
                    alert(data);
                    location.reload();
                }
            });
        });

        $(document).on('click', '.ViewShop', function(event) {
            var UserView = "UserView";
            var userID = $(this).attr("userID");
            $.ajax({
                type: "POST",
                url: "public/view-details/user.php",
                data: {
                    userID: userID,
                    UserView: UserView,
                },
                success: function(data) {
                    /*    alert(data);*/
                    $('#shopFromTitle').html('View User');
                    $('#shopDataFrom').addClass('show').css('display', 'block');
                    $('#UserView').html(data);
                }
            });
        });
    });
    $("#AddUserFormData").on('submit', (function(e) {
        e.preventDefault();
        /*alert('ddd');*/
        $.ajax({
            url: "public/modal/user.php",
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