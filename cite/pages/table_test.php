
                    <div id="element" class="grades-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pdf_title">
                                        <h2>URDANETA CITY UNIVERSITY</h2>
                                        <h2>COLLEGE OF INFORMATION & TECHNOLOGY EDUCATION</h2>
                                        <p>San Vicente West, Urdaneta City, Pangasinan</p>
                                        <h2>BACHELORS OF SCIENCE IN INFORMATION TECHNOLOGY (BSIT)</h2>
                                        <p>(as per CMO No. 25 Series of 2015)</p>
                                    </div>
                                </div>
                            </div>
                            <!------ First Year --------------------------->
                            <h2 class="year_title">First Year</h2>
                            <div class="row">
                                <!------ First Year First Sem ----------------->
                                <div class="col-md-6">
                                    <table class="float-md-right">
                                        <thead>
                                            <tr>
                                                <th colspan="12">First Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem, student_grade_tbl.grade
                                              FROM student_tbl
                                              INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                                              INNER JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                                              RIGHT JOIN student_grade_tbl ON subject_tbl.subj_id = student_grade_tbl.subj_id
                                              WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$cmoNo' AND student_tbl.series = '$series' AND subject_tbl.yr_lvl = '1st' AND subject_tbl.sem = '1st'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!------ First Year Second Sem ---------------->
                                <div class="col-md-6">
                                    <table class="float-md-left">
                                        <thead>
                                            <tr>
                                                <th colspan="12">Second Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem, student_grade_tbl.grade
                                              FROM student_tbl
                                              INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                                              INNER JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                                              RIGHT JOIN student_grade_tbl ON subject_tbl.subj_id = student_grade_tbl.subj_id
                                              WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$cmoNo' AND student_tbl.series = '$series' AND subject_tbl.yr_lvl = '1st' AND subject_tbl.sem = '2nd'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!------ Second Year -------------------------->
                            <h2 class="year_title">Second Year</h2>
                            <div class="row">
                                <!------ Second Year First Sem ----------------->
                                <div class="col-md-6">
                                    <table class="float-md-right">
                                        <thead>
                                            <tr>
                                                <th colspan="12">First Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem, student_grade_tbl.grade
                                              FROM student_tbl
                                              INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                                              INNER JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                                              RIGHT JOIN student_grade_tbl ON subject_tbl.subj_id = student_grade_tbl.subj_id
                                              WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$cmoNo' AND student_tbl.series = '$series' AND subject_tbl.yr_lvl = '2nd' AND subject_tbl.sem = '1st'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!------ Second Year Second Sem ---------------->
                                <div class="col-md-6">
                                    <table class="float-md-left">
                                        <thead>
                                            <tr>
                                                <th colspan="12">Second Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem, student_grade_tbl.grade
                                              FROM student_tbl
                                              INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                                              INNER JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                                              RIGHT JOIN student_grade_tbl ON subject_tbl.subj_id = student_grade_tbl.subj_id
                                              WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$cmoNo' AND student_tbl.series = '$series' AND subject_tbl.yr_lvl = '2nd' AND subject_tbl.sem = '2nd'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!------ Third Year --------------------------->
                            <h2 class="year_title">Third Year</h2>
                            <div class="row">
                                <!------ Third Year First Sem ----------------->
                                <div class="col-md-6">
                                    <table class="float-md-right">
                                        <thead>
                                            <tr>
                                                <th colspan="12">First Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem, student_grade_tbl.grade
                                              FROM student_tbl
                                              INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                                              INNER JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                                              RIGHT JOIN student_grade_tbl ON subject_tbl.subj_id = student_grade_tbl.subj_id
                                              WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$cmoNo' AND student_tbl.series = '$series' AND subject_tbl.yr_lvl = '3rd' AND subject_tbl.sem = '1st'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!------ Third Year Second Sem ---------------->
                                <div class="col-md-6">
                                    <table class="float-md-left">
                                        <thead>
                                            <tr>
                                                <th colspan="12">Second Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem, student_grade_tbl.grade
                                              FROM student_tbl
                                              INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                                              INNER JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                                              RIGHT JOIN student_grade_tbl ON subject_tbl.subj_id = student_grade_tbl.subj_id
                                              WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$cmoNo' AND student_tbl.series = '$series' AND subject_tbl.yr_lvl = '3rd' AND subject_tbl.sem = '2nd'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Third Year middle term -->
                            <div id="middle_term_3rdyr">
                                <div class="row">
                                    <!------ Third Year middle term ---------------->
                                    <div class="col-md">
                                        <table class="float-md-left">
                                            <thead>
                                                <tr>
                                                    <th colspan="12">Middle Term</th>
                                                </tr>
                                                <tr>
                                                    <th rowspan="2">Course Code</th>
                                                    <th rowspan="2" colspan="2">Course Description</th>
                                                    <th colspan="2">Hours</th>
                                                    <th rowspan="2">Units</th>
                                                    <th rowspan="2">Grade</th>
                                                </tr>
                                                <tr>
                                                    <th>Lec</th>
                                                    <th>Lab</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                  $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem, student_grade_tbl.grade
                                                  FROM student_tbl
                                                  INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                                                  INNER JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                                                  RIGHT JOIN student_grade_tbl ON subject_tbl.subj_id = student_grade_tbl.subj_id
                                                  WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$cmoNo' AND student_tbl.series = '$series' AND subject_tbl.yr_lvl = '3rd' AND subject_tbl.sem = 'Middle Term'";
                                                  $result_subjects = $conn->query($sql_subjects);
                                                    if($result_subjects->num_rows > 0) {
                                                      while ($row_subjects=$result_subjects->fetch_assoc()) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row_subjects['courseCode'];?></td>
                                                    <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                    <td><?php echo $row_subjects['lec'];?></td>
                                                    <td><?php echo $row_subjects['lab'];?></td>
                                                    <td><?php echo $row_subjects['units'];?></td>
                                                    <td><?php echo $row_subjects['grade'];?></td>
                                                </tr>
                                                <?php
                                                    }
                                                  }
                                                  else {
                                                    echo "<script>document.getElementById('middle_term_3rdyr').style.display = 'none';</script>";
                                                  }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!------ Fourth Year -------------------------->
                            <h2 class="year_title">Fourth Year</h2>
                            <div class="row">
                                <!------ Fourth Year First Sem ----------------->
                                <div class="col-md-6">
                                    <table class="float-md-right">
                                        <thead>
                                            <tr>
                                                <th colspan="12">First Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem, student_grade_tbl.grade
                                              FROM student_tbl
                                              INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                                              INNER JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                                              RIGHT JOIN student_grade_tbl ON subject_tbl.subj_id = student_grade_tbl.subj_id
                                              WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$cmoNo' AND student_tbl.series = '$series' AND subject_tbl.yr_lvl = '4th' AND subject_tbl.sem = '1st'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!------ Fourth Year Second Sem ---------------->
                                <div class="col-md-6">
                                    <table class="float-md-left">
                                        <thead>
                                            <tr>
                                                <th colspan="12">Second Sem</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Course Code</th>
                                                <th rowspan="2" colspan="2">Course Description</th>
                                                <th colspan="2">Hours</th>
                                                <th rowspan="2">Units</th>
                                                <th rowspan="2">Grade</th>
                                            </tr>
                                            <tr>
                                                <th>Lec</th>
                                                <th>Lab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              $sql_subjects = "SELECT student_tbl.student_id, student_tbl.id_number, student_tbl.fname, student_tbl.lname, eval_cmo_series_tbl.eval_id, eval_cmo_series_tbl.cmoNo, eval_cmo_series_tbl.series, subject_tbl.subj_id, subject_tbl.courseCode, subject_tbl.courseDesc, subject_tbl.units, subject_tbl.lec, subject_tbl.lab, subject_tbl.yr_lvl, subject_tbl.sem, student_grade_tbl.grade
                                              FROM student_tbl
                                              INNER JOIN eval_cmo_series_tbl ON student_tbl.cmoNo = eval_cmo_series_tbl.cmoNo AND student_tbl.series = eval_cmo_series_tbl.series
                                              INNER JOIN subject_tbl ON eval_cmo_series_tbl.eval_id = subject_tbl.eval_id
                                              RIGHT JOIN student_grade_tbl ON subject_tbl.subj_id = student_grade_tbl.subj_id
                                              WHERE student_tbl.student_id = '$student_id' AND student_tbl.cmoNo = '$cmoNo' AND student_tbl.series = '$series' AND subject_tbl.yr_lvl = '4th' AND subject_tbl.sem = '2nd'";
                                              $result_subjects = $conn->query($sql_subjects);
                                                if($result_subjects->num_rows > 0) {
                                                  while ($row_subjects=$result_subjects->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row_subjects['courseCode'];?></td>
                                                <td colspan="2"><?php echo $row_subjects['courseDesc'];?></td>
                                                <td><?php echo $row_subjects['lec'];?></td>
                                                <td><?php echo $row_subjects['lab'];?></td>
                                                <td><?php echo $row_subjects['units'];?></td>
                                                <td><?php echo $row_subjects['grade'];?></td>
                                            </tr>
                                            <?php
                                                }
                                              }
                                              else {
                                                echo "<tr><td colspan='7' class='text-center' style='color: #A94442'>No subjects available</td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="grades-section-below">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>List of Electives</h2>
                                        <ul>
                                            <li>Advanced Web Development</li>
                                            <li>Cloud Compunting</li>
                                            <li>Cyber Security and Emerging Challenges</li>
                                            <li>Data Analytics</li>
                                            <li>Programming and Interfacing with Microcontrollers</li>
                                        </ul>
                                        <h2>Summary of Units</h2>
                                        <table>
                                            <tr>
                                                <td>General Education</td>
                                                <td>42</td>
                                            </tr>
                                            <tr>
                                                <td>PE</td>
                                                <td>8</td>
                                            </tr>
                                            <tr>
                                                <td>NSTP</td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td>Major/Fields Specialization</td>
                                                <td>93</td>
                                            </tr>
                                            <tr>
                                                <td>IT Electives</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>Institutional Subject</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>Total Number of Units</td>
                                                <td>165</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <h2>LEGEND:</h2>
                                        <div class="bocc">
                                            <div class="bocc_color"></div>
                                            <h4>&emsp;-&emsp;&emsp;BASED ON CLASS CARD </h4>
                                        </div>
                                        <br>
                                        <div class="lack">
                                            <div class="lack_color"></div>
                                            <h4>&emsp;-&emsp;&emsp;LACKING </h4>
                                        </div>
                                        <div class="signatures">
                                            <div class="signatures_item">
                                                <h2>Prepared by:</h2>
                                                <div class="signatures_item_contents">
                                                    <h3>JASPER U. UNDAN</h3>
                                                    <h1>College Secretary</h1>
                                                </div>
                                            </div>
                                            <div class="signatures_item">
                                                <h2>Noted by:</h2>
                                                <div class="signatures_item_contents">
                                                    <h3>DANILO B. DORADO</h3>
                                                    <h1>Program Head</h1>
                                                </div>
                                            </div>
                                            <div class="signatures_item">
                                                <h2>Approaved by:</h2>
                                                <div class="signatures_item_contents">
                                                    <h3>JOHHANS B. RABAGO</h3>
                                                    <h1>DEAN, College of Information<br>& Technology Education</h1>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>