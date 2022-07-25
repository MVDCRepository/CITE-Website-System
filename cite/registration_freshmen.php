<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Register | CITE</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    </head>
    <!-- body -->
    <body>
        <div class="reg_body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="php/registrationPHP.php" method="POST" id="registration_freshmen">
                            <div class="reg_content">
                                <a href="index.php"><img src="images/cite_logo.png"></a>
                                <h2>Online Pre-Registration Form for Incoming Freshmen</h2>
                                <center>
                                    <?php if (isset($_GET['error_msg'])) { ?>
                                        <p class="error_msg mt-5 mb-5" style="width: 40%"><?php echo $_GET['error_msg']; ?></p>
                                    <?php } ?>
                                    <?php if (isset($_GET['success_msg'])) { ?>
                                        <p class="success_msg mt-5 mb-5" style="width: 40%"><?php echo $_GET['success_msg']; ?></p>
                                        <?php } ?>
                                </center>
                                <h3>Primary Information</h3>
                                <div class="alert alert-warning" role="alert">
                                    If none, leave the field empty.
                                </div>
                                <h5>Full Name:</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-6 input-group">
                                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 input-group">
                                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="sname" name="sname" placeholder="Suffix Name">
                                    </div>
                                </div>
                                <h5>Permanent Address:</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-6 input-group">
                                        <input type="text" class="form-control" id="province" name="province" placeholder="Province" required>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                    <div class="form-group col-md-6 input-group">
                                        <input type="text" class="form-control" id="city" name="city" placeholder="City/Municipality" required>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 input-group">
                                        <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Barangay" required>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" placeholder="House Number" id="house_num" name="house_num">
                                    </div>
                                    <div class="form-group col-md-3 input-group">
                                        <input type="number" class="form-control" placeholder="Zip Code" id="zip_code" name="zip_code" required>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                </div>
                                <br>
                                <h3>Basic Information</h3>
                                <div class="alert alert-warning" role="alert">
                                    If none, leave the field empty.
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="bdate">Birthdate:</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="bdate" name="bdate" required>
                                            <span class="input-group-text"><span class="required_sign">*</span></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nationality">Nationality</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality" required>
                                            <span class="input-group-text"><span class="required_sign">*</span></span>
                                        </div>
                                    </div>
                                </div>
                                <h5>Birth Place:</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-6 input-group">
                                        <input type="text" class="form-control" id="birth_province" name="birth_province" placeholder="Province" required>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                    <div class="form-group col-md-6 input-group">
                                        <input type="text" class="form-control" id="birth_city" name="birth_city" placeholder="City/Municipality" required>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="birth_barangay" name="birth_barangay" placeholder="Barangay">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="text" class="form-control" id="birth_house_num" name="birth_house_num" placeholder="House Number">
                                    </div>
                                    <div class="form-group col-md-3 input-group">
                                        <input type="number" class="form-control" id="birth_zip_code" name="birth_zip_code" placeholder="Zip Code" required>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                </div>
                                <h5>Contact & Other Info:</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-6 input-group">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" required>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                    <div class="form-group col-md-6 input-group">
                                        <input type="text" class="form-control" id="contact_num" name="contact_num" placeholder="Contact Number" required>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 input-group">
                                        <select class="form-control" id="gender" name="gender" required>
                                            <option value="">Select Assigned Sex at Birth</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-control" id="religion" name="religion">
                                            <option value="">Select Religion</option>
                                            <option value="ROMAN CATHOLIC">ROMAN CATHOLIC</option>
                                            <option value="IGLESIA NI CRISTO">IGLESIA NI CRISTO</option>
                                            <option value="JEHOVAH WITNESSES">JEHOVAH WITNESSES</option>
                                            <option value="ISLAM">ISLAM</option>
                                            <option value="EVANGELICAL">EVANGELICAL</option>
                                            <option value="BUDDHISM">BUDDHISM</option>
                                            <option value="JUDAISM">JUDAISM</option>
                                            <option value="BAHAI FAITH">BAHAI FAITH</option>
                                            <option value="PROTESTANT">PROTESTANT</option>
                                            <option value="BORN AGAIN CHRISTIAN">BORN AGAIN CHRISTIAN</option>
                                            <option value="SEVENTH DAY ADVENTIST">SEVENTH DAY ADVENTIST</option>
                                            <option value="AGLIPAYAN CHURCH">AGLIPAYAN CHURCH</option>
                                            <option value="BAPTIST">BAPTIST</option>
                                            <option value="CHRISTIAN">CHRISTIAN</option>
                                            <option value="ORTHODOX CHURCH">ORTHODOX CHURCH</option>
                                            <option value="ATHEISM">ATHEISM</option>
                                            <option value="LATTER DAY SAINTS (MORMONS)">LATTER DAY SAINTS (MORMONS)</option>
                                            <option value="JESUS IS LORD">JESUS IS LORD</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <h3>Family Information</h3>
                                <div class="alert alert-warning" role="alert">
                                    If none, leave the field empty.
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Father's Information:</h5>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="father_fname" name="father_fname" placeholder="First Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="father_mname" name="father_mname" placeholder="Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="father_lname" name="father_lname" placeholder="Last Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="father_sname" name="father_sname" placeholder="Suffix Name">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="father_contact" name="father_contact" placeholder="Contact Number">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="father_occupation" name="father_occupation" placeholder="Occupation">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Mother's Information:</h5>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="mother_fname" name="mother_fname" placeholder="First Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="mother_mname" name="mother_mname" placeholder="Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="mother_lname" name="mother_lname" placeholder="Last Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="mother_contact" name="mother_contact" placeholder="Contact Number">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="mother_occupation" name="mother_occupation" placeholder="Occupation">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Guardian's Information:</h5>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 input-group">
                                                    <input type="text" class="form-control" id="guardian_fname" name="guardian_fname" placeholder="First Name" required><span class="input-group-text"><span class="required_sign">*</span></span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="guardian_mname" name="guardian_mname" placeholder="Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 input-group">
                                                    <input type="text" class="form-control" id="guardian_lname" name="guardian_lname" placeholder="Last Name" required><span class="input-group-text"><span class="required_sign">*</span></span>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="guardian_sname" name="guardian_sname" placeholder="Suffix Name">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="guardian_contact" name="guardian_contact" placeholder="Contact Number">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="guardian_occupation" name="guardian_occupation" placeholder="Occupation">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 input-group">
                                                    <input type="text" class="form-control" id="guardian_relationship" name="guardian_relationship" placeholder="Relationship" required>
                                                    <span class="input-group-text"><span class="required_sign">*</span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Spouse's (If married):</h5>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="spouse_fname" name="spouse_fname" placeholder="First Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="spouse_mname" name="spouse_mname" placeholder="Middle Name">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="spouse_lname" name="spouse_lname" placeholder="Last Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="spouse_sname" name="spouse_sname" placeholder="Suffix Name">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="spouse_contact" name="spouse_contact" placeholder="Contact Number">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" id="spouse_occupation" name="spouse_occupation" placeholder="Occupation">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h3>Academic Information</h3>
                                <div class="alert alert-warning" role="alert">
                                    If none, leave the field empty.
                                </div>
                                <?php
                                    include "db_conn.php";
                                    $sql = "SELECT * FROM eval_cmo_series_tbl ORDER BY eval_id DESC LIMIT 1";
                                    $result = $conn->query($sql);
                                    if($result->num_rows > 0) {
                                        while ($row_cmoSeries=$result->fetch_assoc()) {
                                ?>
                                <input hidden type="text" name="eval_id" value="<?php echo $row_cmoSeries['eval_id'];?>">
                                <?php
                                        }
                                    }
                                    else {
                                      echo "<option value=''>No CMO No. & Series available</option>";
                                    }
                                ?>
                                <div class="form-row">
                                    <div class="form-group col-md-6 input-group">
                                        <select class="form-control" id="course" name="course" required>
                                            <option value="">Course to be Enroll</option>
                                            <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                                            <option value="Bachelor in Library & Information Science">Bachelor in Library & Information Science</option>
                                        </select>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                    <div class="form-group col-md-6 input-group">
                                        <select class="form-control" id="strand" name="strand" required>
                                            <option value="">Select Strand</option>
                                            <option value="STEM">STEM</option>
                                            <option value="HUMMS">HUMMS</option>
                                            <option value="ABM">ABM</option>
                                            <option value="GAS">GAS</option>
                                            <option value="ICT">ICT</option>
                                            <option value="TVL">TVL</option>
                                            <option value="HOME ECONOMICS">HOME ECONOMICS</option>
                                            <option value="AGRI-FISHERY ARTS">AGRI-FISHERY ARTS</option>
                                            <option value="INDUSTRIAL ARTS">INDUSTRIAL ARTS</option>
                                            <option value="SPORTS">SPORTS</option>
                                            <option value="ARTS AND DESIGN">ARTS AND DESIGN</option>
                                        </select>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 input-group">
                                        <select class="form-control" id="second_course" name="second_course" required>
                                            <option selected disabled>Second choice of course</option>
                                            <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                                            <option value="Bachelor in Library & Information Science">Bachelor in Library & Information Science</option>
                                        </select>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                    <div class="form-group col-md-6 input-group">
                                        <input type="text" class="form-control" id="graduated_shs" name="graduated_shs" placeholder="Graduated Senior High School" required>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="learners_ref_num" name="learners_ref_num" placeholder="Learners Reference Number">
                                    </div>
                                    <div class="form-group col-md-6 input-group">
                                        <input type="text" class="form-control" id="graduated_es" name="graduated_es" placeholder="Graduated Elementary School" required>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="form_138" name="form_138" placeholder="Form 138 GWA">
                                    </div>
                                    <div class="form-group col-md-6 input-group">
                                        <input type="text" class="form-control" id="graduated_year_es" name="graduated_year_es" placeholder="Graduated Year from Elementary School" required>
                                        <span class="input-group-text"><span class="required_sign">*</span></span>
                                    </div>
                                </div>
                                <br>
                                <h3>Student Credentials</h3>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="control-form">
                                            <label for="id_number">Temporary ID number</label>
                                            <input type="text" class="form-control" id="id_number" name="id_number" readonly>
                                            <small>error</small>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="control-form">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                            <small>error</small>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="control-form">
                                            <label for="confirmPass">Confirm Password</label>
                                            <input type="password" class="form-control" id="confirmPass" name="confirmPass" required>
                                            <small>error</small>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" name="register_freshmenBtn" class="btn btn-success">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="js/registrationJS.js"></script>
</html>