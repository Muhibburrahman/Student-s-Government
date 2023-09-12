<?php
include '../../public/layout/main_section.php';
?>
<div class="row mb-2 p-2 m-0 border border-2">
    <div class="col-md-3">
        <h4 class="fs-1">Study Material List</h4>
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
                <th>Title</th>
                <th>File-URL</th>
                <th>Types</th>
                <th>Status</th>
                <th>Remark</th>
                <th>Date</th>
                <th colspan="1">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $brch = mysqli_query($con, "SELECT * FROM `document_list` INNER JOIN document_typeslist ON document_list.document_types=document_typeslist.doc_id WHERE document_typeslist.doc_Title='Study-Material'");

            $cnt = 1;
            foreach ($brch as $key => $data) {
                if ($data['document_status'] == 'Delete') {
                } else {
            ?>
                    <tr class="">
                        <td><?= $cnt; ?></td>
                        <td><?= $data['document_title']; ?></td>
                        <td><a target="_blank" href="<?= $data['document_url']; ?>">View</a></td>
                        <td><?= $data['doc_Title']; ?></td>
                        <td><?= $data['document_status']; ?></td>
                        
                        <td><?= $data['document_other']; ?></td>
                        <td><?= $data['document_date']; ?></td>

                       <!--  <th class="p-0 m-0"><button userID="<?= $data['document_id']; ?>" class="btn btn-sm btn-info ViewShop">Edit</button></th>
                        --> <th class="p-0 m-0">
                            <button documentStatus="<?= $data['document_status']; ?>" document_id="<?= $data['document_id']; ?>" class="btn btn-sm btn-info documentStatus"><?= $data['document_status']; ?></button>
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
                <h6 class="modal-title fs-5" id="shopFromTitle">Upload Document</h6>
                <button type="button" class="btn-close close_btn" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="#" method="post" id="documentFormData" enctype="multipart/form-data">
                <div class="row p-2" id="UserView">
                    <div class="col-md-6 form-group">
                        <label class="form-label">Title</label>
                        <select require name="document_title" class="form-control">
                            <option value="">Select-Title</option>
                            <?php
                            $docType = mysqli_query($con, "SELECT * FROM document_typeslist WHERE doc_status='Active'");
                            foreach ($docType as $dty) {
                                echo ' <option value="' . $dty['doc_id'] . '">' . $dty['doc_Title'] . '</option>';
                            }
                            ?>
                            <!-- <option value="Other">Other</option> -->

                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label class="form-label">Date</label>
                        <input type="date" name="document_date" class="form-control">
                    </div>
                    <div class="col-md-3 form-group">
                        <label class="form-label">Status</label>
                        <input type="text" name="document_status" value="Active" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">File</label>
                        <input type="file" name="document_file" require class="form-control">
                    </div>
                    <div class="col-md-6 form-group pt-2">
                        <label class="form-label">Remark</label>
                        <input type="hidden" name="document_id" value="0">
                        <input type="text" name="document_other" class="form-control">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-12 text-center">
                        <input type="hidden" name="documentFormData" value="0">
                        <input type="hidden" name="document_By" value="<?= $user_id; ?>">
                        <button type="button" class="btn-close btn btn-danger close_btn">Close</button>
                        <button type="submit" name="submit" value="save" class="btn btn-primary">Submit</button>

                    </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {

        $(document).on('click', '.documentStatus', function(event) {
            var DTStatusupdate = "DTStatusupdate";
            var status = $(this).attr("documentStatus");
            var document_id = $(this).attr("document_id");
            $.ajax({
                type: "POST",
                url: "public/modal/document.php",
                data: {
                    status: status,
                    document_id: document_id,
                    DTStatusupdate: DTStatusupdate,
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
                url: "public/view-details/document.php",
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
    $("#documentFormData").on('submit', (function(e) {
        e.preventDefault();
        /*alert('ddd');*/
        $.ajax({
            url: "public/modal/document.php",
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