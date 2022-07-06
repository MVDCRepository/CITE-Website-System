<table class="table-cite" id="load_subject">
  <thead>
    <tr>
      <th>Course Code</th>
      <th>Course Discription</th>
      <th>Units</th>
      <th>Time</th>
      <th>Days</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include "../db_conn.php";
    $sql = null;
    if (isset($_GET['yr_lvl']) && isset($_GET['sem']) && isset($_GET['eval_id'])) {
      $yr_lvl = $_GET['yr_lvl'];
      $sem = $_GET['sem'];
      $eval_id = $_GET['eval_id'];
      $sql = "SELECT eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem
      FROM eval_cmo_series_tbl
      INNER JOIN subject_tbl ON subject_tbl.eval_id = eval_cmo_series_tbl.eval_id
      WHERE subject_tbl.yr_lvl = '$yr_lvl' AND subject_tbl.sem = '$sem' AND subject_tbl.eval_id = '$eval_id'";
    }

    $result = mysqli_query($conn, $sql);
      if($result->num_rows > 0) {
        while ($row=$result->fetch_assoc()) {
    ?>
    <tr>
      <td><input type="checkbox" class="form-check-input me-3" name="sched_id[]" value="<?php echo $row['subj_id'];?>"><input type="hidden" value="<?php echo $row['subj_id'];?>" name="subj_id[]"><?php echo $row['courseCode'];?></td>
      <td><?php echo $row['courseDesc'];?></td>
      <td><?php echo $row['units'];?></td>
      <td><input type="time" class="form-control d-inline" style="max-width: 125px" name="start_time[]"> - <input type="time" class="form-control d-inline" style="max-width: 125px" name="end_time[]"></td>
      <td><input type="day" class="form-control" placeholder="Days" style="max-width: 150px" name="days[]"></td>
    </tr>
    <?php
        }
      }
      else {
        echo "<tr><td colspan='6' style='color: #ff0000;' class='error_msg'><center>To load the subjects. Select year level, semester, CMO No. and Series.</center></td></tr>";
      }
    ?>
    </tbody>
</table>