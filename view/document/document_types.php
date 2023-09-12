<?php
include '../../public/layout/main_section.php';
?>
<div class="row mb-2 p-2 m-0 border border-2">
    <div class="col-md-3">
        <h4 class="fs-1">Document Types List</h4>
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
                <th>Title </th>
                <th>Status</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $brch = mysqli_query($con, "SELECT * FROM document_typeslist");
            $cnt = 1;
            foreach ($brch as $key => $data) {
                if ($data['doc_status'] == 'Delete') {
                } else {
            ?>
                    <tr class="">
                        <td><?= $cnt; ?></td>
                        <td><?= $data['doc_Title']; ?></td>
                        <td><?= $data['doc_status']; ?></td>
                        <th class="p-0 m-0"><button doc_ID="<?= $data['doc_id']; ?>" class="btn btn-sm btn-info DTView">Edit</button></th>
                        <th class="p-0 m-0">
                            <button DTStatus="<?= $data['doc_status']; ?>" doc_id="<?= $data['doc_id']; ?>" class="btn btn-sm btn-info DTStatus"><?= $data['doc_status']; ?></button>
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
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title fs-5" id="shopFromTitle">Add Document Types</h6>
                <button type="button" class="btn-close close_btn" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            <form action="#" method="post" id="AddDTFormData">
                <div class="row p-2" id="doc_ViewDT">
                    <div class="col-md-12 form-group">
                        <label class="form-label">Title</label>
                        <input type="text" name="doc_Title" class="form-control">
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="form-label">Status</label>
                        <input type="hidden" name="doc_id" value="0">
                        <input type="text" value="Active" name="doc_status" class="form-control">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-12 text-center">
                        <input type="hidden" name="AddDTFormData" value="0">
                        <button type="button" class="btn-close btn btn-danger close_btn">Close</button>
                        <button type="submit" name="submit" value="save" class="btn btn-primary">Submit</button>

                    </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {

        $(document).on('click', '.DTStatus', function(event) {
            var DTStatusupdate = "DTStatusupdate";
            var status = $(this).attr("DTStatus");
            var doc_id = $(this).attr("doc_id");
            //alert(status);
            $.ajax({
                type: "POST",
                url: "public/modal/document_types.php",
                data: {
                    status: status,
                    doc_id: doc_id,
                    DTStatusupdate: DTStatusupdate,
                },
                success: function(data) {
                    alert(data);
                    location.reload();
                }
            });
        });

        $(document).on('click', '.DTView', function(event) {
            var doc_ViewDT = "doc_ViewDT";
            var doc_ID = $(this).attr("doc_ID");
            $.ajax({
                type: "POST",
                url: "public/view-details/document_types.php",
                data: {
                    doc_ID: doc_ID,
                    doc_ViewDT: doc_ViewDT,
                },
                success: function(data) {
                    /*    alert(data);*/
                    $('#shopFromTitle').html('Add Document Types');
                    $('#shopDataFrom').addClass('show').css('display', 'block');
                    $('#doc_ViewDT').html(data);
                }
            });
        });
    });
    $("#AddDTFormData").on('submit', (function(e) {
        e.preventDefault();
        /*alert('ddd');*/
        $.ajax({
            url: "public/modal/document_types.php",
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