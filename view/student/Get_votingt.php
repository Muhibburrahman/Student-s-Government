<?php
include '../../public/layout/main_section.php';
if (isset($_POST['submit'])) {
    $dateTime = $today_date . '/' . $today_time;
    $voting_studentID = $_POST['voting_studentID'];
    $q = mysqli_query($con, "SELECT * FROM `voting_poll` WHERE voting_studentID='$voting_studentID'");
    $count = mysqli_num_rows($q);
    if ($count < 1) {
        $voting_candidate = $_POST['voting_candidate'];
        foreach ($voting_candidate as $candidates) {
            $sql = mysqli_query($con, "INSERT INTO `voting_poll`(`voting_date`, `voting_updatedate`, `voting_studentID`, `voting_status`, `voting_candidate`) VALUES 
           ('$dateTime',
            'NULL',
            '$voting_studentID',
            '1',
            '$candidates')");
        }
        if ($sql) {
            echo "<script>alert('Votes Submitted');</script>";
        } else {
            echo "<script>alert('Try Again...');</script>";
        }
    } else {
        echo "<script>alert('allredy voted...');</script>";
    }
    echo '<script>window.location.href = "view/student/Get_votingt.php";</script>';
}
?>
<div class="row mb-2 p-2 m-0 border border-2">
    <div class="col-md-12">
        <h4 class="fs-1">Vote Now</h4>
    </div>

    <form id="documentFormData">
        <?php
        $votelist = mysqli_query($con, "SELECT * FROM votingstu_list INNER JOIN student_list ON votingstu_list.votingstu_studentID=student_list.id");
        foreach ($votelist as $vot) {
        } ?>
    </form>
    <div class="body_section">
        <div class="cont-bg">
            <form method="post" action="view/student/Get_votingt.php">
                <div class="row p-5">
                    <?php
                    $votelist = mysqli_query($con, "SELECT * FROM votingstu_list INNER JOIN student_list ON votingstu_list.votingstu_studentID=student_list.id");
                    foreach ($votelist as $vot) {
                        // if($today_date==$vot['votingstu_date'] || $today_date==$vot['votingstu_LastDate']){
                        //     echo 'Allow For vote ' .$vot['student_name'].'<br>';
                        // }elseif($today_date==$vot['votingstu_date'])
                        // {
                        //     echo "allow e vote " .$vot['student_name'].'<br>';
                        // }else{
                        //     echo "vote not allow " .$vot['student_name'].'<br>';
                        // }
                        if ($vot['votingstu_status'] == "Active") {
                    ?>
                            <div class="col-auto col-md-3 text-capitalize">
                                <div class="card-body border-warning bg-secondary p-0 border">
                                    <input name="voting_candidate[]" class="form-control" title="<?= $vot['student_name']; ?>" value="<?= $vot['votingstu_studentID']; ?>" type="checkbox" id="myCheckbox_<?= $vot['id']; ?>" />
                                    <label for="myCheckbox_<?= $vot['id']; ?>">
                                        <img class="img-fluid img-thumbnail" src="<?= $vot['student_profile']; ?>" class="p-2">
                                        <div class="info text-center border-dark border mb-n2 mt-2 pt-2">
                                            <h4><?= $vot['student_name']; ?></h4>
                                            <p class="role"><?= $vot['votingstu_roll']; ?></p>
                                        </div>
                                    </label>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
                <div class="text-center">
                    <input name="voting_studentID" type="hidden" value="<?= $_SESSION['user_id']; ?>">
                    <button type="button" class="btn btn-warning p-3" onclick='selects()' name="SelectAll" value="Select All">Select All</button>
                    <button name="submit" class="btn btn-primary p-3" value="save" type="submit">Submit</button>
                    <button type="button" class="btn btn-danger p-3" onclick='deSelect()' name="clear" value="Deselect All">Clear</button>
                </div>
            </form>
        </div>
    </div>

</div>
<div class="voteNow">

</div>
<input id="votercID" value="10" name="votercID" type="hidden">
<?php
include '../../public/layout/footer.php';
?>

<script>
    $(document).ready(function() {

        $(document).on('click', '.voteNow', function(event) {
            var voteNow = "voteNow";
            var voteID = $(this).attr("voteID");
            var votercID = $(this).attr("votercID");
            var voteByID = $("#votercID").val();
            alert(voteID);
            $.ajax({
                type: "POST",
                url: "public/modal/document.php",
                data: {
                    voteID: voteID,
                    votercID: votercID,
                    voteByID: voteByID,
                    voteNow: voteNow,
                },
                success: function(data) {
                    alert(data);
                    // location.reload();
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


<script type="text/javascript">
    function selects() {
        var ele = document.getElementsByName('voting_candidate[]');
        for (var i = 0; i < ele.length; i++) {
            if (ele[i].type == 'checkbox')
                ele[i].checked = true;
        }
    }

    function deSelect() {
        var ele = document.getElementsByName('voting_candidate[]');
        for (var i = 0; i < ele.length; i++) {
            if (ele[i].type == 'checkbox')
                ele[i].checked = false;

        }
    }
</script>