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
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
</head>
<!-- body -->

<body>
    <div class="reg_body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form>
                        <div class="reg_content">
                            <a href="../index.php"><img src="../images/cite_logo.png"></a>
                            <h2>Online Pre-Registration Form for Transferees</h2>
                            <h3>Primary Information</h3>
                            <h5>Full Name:</h5>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="fname" placeholder="First Name"
                                        required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="mname" placeholder="Middle Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="lname" placeholder="Last Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="sname" placeholder="Suffix Name">
                                </div>
                            </div>
                            <h5>Permanent Address:</h5>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="province" placeholder="Province">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="city" placeholder="City/Municipality">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="barangay" placeholder="Barangay">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="number" class="form-control" placeholder="House Number" id="house_num"
                                        required>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="number" class="form-control" placeholder="Zip Code" id="zip_code"
                                        required>
                                </div>
                            </div>
                            <br>
                            <h3>Basic Information</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="bdate">Birthdate:</label>
                                    <input type="text" class="form-control" id="bdate" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nationality">Nationality</label>
                                    <input type="text" class="form-control" id="nationality" placeholder="Nationality"
                                        required>
                                </div>
                            </div>
                            <h5>Birth Place:</h5>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="birth_province" placeholder="Province">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="birth_city"
                                        placeholder="City/Municipality">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="birth_barangay" placeholder="Barangay">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="number" class="form-control" id="birth_house_num"
                                        placeholder="House Number" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="number" class="form-control" id="birth_zip_code" placeholder="Zip Code"
                                        required>
                                </div>
                            </div>
                            <h5>Contact & Other Info:</h5>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="email" placeholder="Email Address"
                                        required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="contact_num"
                                        placeholder="Contact Number" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="gender">
                                        <option selected disabled>Select Assigned Sex at Birth</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="religion">
                                        <option selected disabled>Select Religion</option>
                                        <option>ROMAN CATHOLIC</option>
                                        <option>IGLESIA NI CRISTO</option>
                                        <option>JEHOVAH WITNESSES</option>
                                        <option>ISLAM</option>
                                        <option>EVANGELICAL</option>
                                        <option>BUDDHISM</option>
                                        <option>JUDAISM</option>
                                        <option>BAHAI FAITH</option>
                                        <option>PROTESTANT</option>
                                        <option>BORN AGAIN CHRISTIAN</option>
                                        <option>SEVENTH DAY ADVENTIST</option>
                                        <option>AGLIPAYAN CHURCH</option>
                                        <option>BAPTIST</option>
                                        <option>CHRISTIAN</option>
                                        <option>ORTHODOX CHURCH</option>
                                        <option>ATHEISM</option>
                                        <option>LATTER DAY SAINTS (MORMONS)</option>
                                        <option>JESUS IS LORD</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <h3>Family Information</h3>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Father's Information:</h5>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="father_fname"
                                                    placeholder="First Name" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="father_mname"
                                                    placeholder="Middle Name">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="father_lname"
                                                    placeholder="Last Name" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="father_sname"
                                                    placeholder="Suffix Name">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="father_contact"
                                                    placeholder="Contact Number" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="father_occupation"
                                                    placeholder="Occupation" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Mother's Information:</h5>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="mother_fname"
                                                    placeholder="First Name" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="mother_mname"
                                                    placeholder="Middle Name">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="mother_lname"
                                                    placeholder="Last Name" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="mother_contact"
                                                    placeholder="Contact Number" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="mother_occupation"
                                                    placeholder="Occupation" required>
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
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="guardian_fname"
                                                    placeholder="First Name" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="guardian_mname"
                                                    placeholder="Middle Name">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="guardian_lname"
                                                    placeholder="Last Name" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="guardian_sname"
                                                    placeholder="Suffix Name">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="guardian_contact"
                                                    placeholder="Contact Number" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="guardian_occupation"
                                                    placeholder="Occupation" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="guardian_relationship"
                                                    placeholder="Relationship" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Spouse's (If married):</h5>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="spouse_fname"
                                                    placeholder="First Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="spouse_mname"
                                                    placeholder="Middle Name">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="spouse_lname"
                                                    placeholder="Last Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="spouse_sname"
                                                    placeholder="Suffix Name">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="spouse_contact"
                                                    placeholder="Contact Number">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="text" class="form-control" id="spouse_occupation"
                                                    placeholder="Occupation">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h3>Academic Information</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="present_course">
                                        <option selected disabled>Present Course</option>
                                        <option>Bachelor of Science in Information Technology</option>
                                        <option>Bachelor in Library & Information Science</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="transfered_from"
                                        placeholder="Transfered from (What school?)" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="second_course">
                                        <option selected disabled>Second choice of course</option>
                                        <option>Bachelor of Science in Information Technology</option>
                                        <option>Bachelor in Library & Information Science</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="graduated_es"
                                        placeholder="Graduated Elementary School" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="student_year">
                                        <option selected disabled>Select Student Year</option>
                                        <option>First</option>
                                        <option>Second</option>
                                        <option>Third</option>
                                        <option>Fourth</option>
                                        <option>Fifth</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="graduated_year_es"
                                        placeholder="Graduated Year from Elementary School" required>
                                </div>
                            </div>
                            <br>
                            <h3>Student Credentials</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="tempo_uname">Temporary username</label>
                                    <input type="text" class="form-control" id="tempo_uname" disabled>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tempo_pass">Temporary Password</label>
                                    <input type="password" class="form-control" id="tempo_pass" disabled>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="generate_creds" required>
                                        <label class="form-check-label" for="generate_creds">Generate
                                            Credentials</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>