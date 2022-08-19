<?php
session_start();

if (isset($_SESSION['std_student_id']) && isset($_SESSION['std_id_number']) && isset($_SESSION['std_fname']) && isset($_SESSION['std_mname']) && isset($_SESSION['std_lname']) && isset($_SESSION['std_yr_lvl']) && isset($_SESSION['std_eval_status'])) {
    include '../db_conn.php';
    $student_id = $_SESSION['std_student_id'];
    $total_student = null;
    $total_reservationValue = null;
?>
<table class="table table-bordered table-striped table-hover table-sm">
    <thead>
        <th>Course Code</th>
        <th>Course Description</th>
        <th>Hours / Days</th>
    </thead>
    <?php
        include '../db_conn.php';
        $total_student = 0;
        $block_id = null;
        
        if (isset($_GET['yr_lvl']) && isset($_GET['sem']) && isset($_GET['block_no']) && isset($_GET['acad_yr'])) {
            $yr_lvl = $_GET['yr_lvl'];
            $sem = $_GET['sem'];
            $block_no = $_GET['block_no'];
            $acad_yr = $_GET['acad_yr'];
            $sql = "SELECT
                blocking_tbl.block_id,
                blocking_tbl.block_no,
                blocking_tbl.yr_lvl,
                blocking_tbl.sem,
                blocking_tbl.acad_id,
                blocking_tbl.total_student,
                blocking_tbl.eval_id,
                
                acad_yr_tbl.acad_id,
                acad_yr_tbl.acad_yr,
                acad_yr_tbl.status,

                subject_tbl.subj_id,
                subject_tbl.courseCode,
                subject_tbl.courseDesc,
                subject_tbl.units,

                blocking_subj_tbl.subj_id,
                blocking_subj_tbl.start_time,
                blocking_subj_tbl.end_time,
                blocking_subj_tbl.days

                FROM blocking_tbl
                INNER JOIN blocking_subj_tbl ON blocking_subj_tbl.block_id = blocking_tbl.block_id
                INNER JOIN acad_yr_tbl ON blocking_tbl.acad_id = acad_yr_tbl.acad_id
                INNER JOIN subject_tbl ON subject_tbl.subj_id = blocking_subj_tbl.subj_id
                WHERE blocking_tbl.yr_lvl = '$yr_lvl' AND blocking_tbl.sem = '$sem' AND blocking_tbl.block_no = '$block_no' AND acad_yr_tbl.acad_yr = '$acad_yr' AND acad_yr_tbl.status = 'Active'";
        }

            $result = $conn->query($sql);
              if($result->num_rows > 0) {
                while ($row=$result->fetch_assoc()) {
                    $total_student = $row['total_student'];
                    $block_id = $row['block_id'];
        ?>
        <tr>
            <td><?php echo $row['courseCode'];?></td>
            <td><?php echo $row['courseDesc'];?></td>
            <td>
                <?php
                    $start_time = $row['start_time'];
                    $end_time = $row['end_time'];
                    echo date("h:i a", strtotime($start_time))." - ".date("h:i a", strtotime($end_time))." ".$row['days'];
                ?>
            </td>
        </tr>
            <?php
                    }
                }
                else {
                    echo "<tr><td colspan='3'><center><p class='text-danger'>No subjects available</p></center></td></tr>";
                }
            ?>
</table>
<div class="blocking_finalization">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form-check">
                    <input oninvalid="this.setCustomValidity('Please check the box to  your selected Block')" oninput="this.setCustomValidity('')" type="checkbox" class="form-check-input" id="confirm" required>
                    <label class="form-check-label" for="confirm">Check the box for the confirmation</label>
                </div>
                <input type="submit" name="reserve_blckBtn" id="reserve_blckBtn" value="Reserve Block" class="btn btn-success mt-3">
            </div>
            <div class="col-md-6">
                <div class="availability">
                    <input type="hidden" name="acad_yrValue" id="acad_yrValue" value="<?php echo $acad_yr;?>">
                    <input type="hidden" name="yr_lvlValue" id="yr_lvlValue" value="<?php echo $yr_lvl;?>">
                    <input type="hidden" name="semValue" id="semValue" value="<?php echo $sem;?>">
                    <input type="hidden" name="block_id" id="block_id" value="<?php echo $block_id;?>">
                    <input type="hidden" name="student_id" id="student_id" value="<?php echo $_SESSION['std_student_id'];?>">
                    <h3>Availability:</h3>
                    <?php
                        $sql_duplicate_check = "SELECT * FROM reserve_block_tbl WHERE student_id = '$student_id' AND status = 'Pending'";
                        $sql_duplicate_check_result = mysqli_query($conn, $sql_duplicate_check);
                        $total_reservationValue = 0;

                        if ($sql_duplicate_check_result->num_rows > 0) {
                            echo "<p class='text-danger'>You already reserved a block.</p>";
                        }
                        else {
                            $sql = "SELECT COUNT(id) as total_reservation FROM reserve_block_tbl WHERE block_id = '$block_id' AND status = 'Pending'";
                            $sql_result = mysqli_query($conn, $sql);

                                if ($sql_result->num_rows > 0) {
                                while($total_reservation = $sql_result->fetch_assoc()) {
                                    $total_reservationValue = $total_reservation['total_reservation'];
                                    echo "<p>".$total_reservation['total_reservation']." / ".$total_student."</p>";
                                }
                            }
                        }
                    ?>
                    <input type="hidden" onchange="reservation_full()" name="total_reservationValue" id="total_reservationValue" value="<?php echo $total_reservationValue;?>">
                    <input type="hidden" onchange="reservation_full()" name="total_studentValue" id="total_studentValue" value="<?php echo $total_student;?>">
                </div>
            </div>
        </div>
    </div>
</div>

<?php
} 
else {
  header("Location: ../user_login.php");
  exit();
}
?>