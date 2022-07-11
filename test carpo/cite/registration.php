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
                        <form action="php/registrationPHP.php" method="POST" id="register_form">
                            <div class="reg_content">
                                <a href="index.php"><img src="images/cite_logo.png"></a>
                                <h2>Registration</h2>
                                <h3>Student Information</h3>
                                <center>
                                    <?php if (isset($_GET['error_msg'])) { ?><p class="error_msg" style="width: 40%"><?php echo $_GET['error_msg']; ?></p>
                                    <?php } ?>
                                    <?php if (isset($_GET['success_msg'])) { ?><p class="success_msg" style="width: 40%"><?php echo $_GET['success_msg']; ?></p>
                                    <?php } ?>
                                </center>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label for="fname">First Name</label>
                                        <input type="text" class="form-control" id="fname" name="fname" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="mname">Middle Name</label>
                                        <input type="text" class="form-control" id="mname" name="mname" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label for="lname">Last Name</label>
                                        <input type="text" class="form-control" id="lname" name="lname" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Gender</label> <br>
                                        <div  style="margin-top: 5px; margin-left: 20px;" class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female" required>
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label for="bdate">Birthdate</label>
                                        <input type="date" class="form-control" id="b_date" name="b_date" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address" id="address" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="phoneNum">Contact Number</label>
                                        <input type="text" class="form-control" id="phoneNum" name="phoneNum" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label for="yr_lvl">Year Level</label>
                                        <select class="form-control" id="yr_lvl" name="yr_lvl" required>
                                            <option selected disabled>Choose Yearl Level</option>
                                            <option value="1st">1st</option>
                                            <option value="2nd">2nd</option>
                                            <option value="3rd">3rd</option>
                                            <option value="4th">4th</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="applicant_type">Applicant Type</label>
                                        <select class="form-control" id="applicant_type" name="status" required>
                                            <option selected disabled>Choose Type</option>
                                            <option value="Freshmen">Freshmen</option>
                                            <option value="Transferee">Transferee</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <h3>Guardian Information</h3>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label for="guardian_name">Guardian's Name</label>
                                        <input type="text" class="form-control" id="guardian_name" name="guardian_name" required>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="guardian_number">Guardian's Contact Number</label>
                                        <input type="text" class="form-control" id="guardian_contact" name="guardian_contact" required>
                                    </div>
                                </div>
                                <br>
                                <h3>Student Credentials</h3>
                                <div class="alert alert-warning">
                                    <h1 class="alert-heading">Note!</h1>
                                    This serves as your credentials. For freshmen and transferee your ID number here in registration is temporary. The University will provide your official ID number. Your Temporary
                                    ID number will be updated in the future.
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <div class="control-form">
                                            <label for="id_number">ID Numbers. Serves as Username</label>
                                            <input type="text" class="form-control" id="id_number" name="id_number" readonly required>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <div class="control-form">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                            <small></small>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <div class="control-form">
                                            <label for="confirm_pass">Confirm Password</label>
                                            <input type="password" class="form-control" id="confirmPass" name="confirmPass" required>
                                            <small></small>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="register_btn" class="btn btn-success">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script type="text/javascript" src="js/registrationJS.js"></script>
</html>