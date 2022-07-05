<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Upload_csv</title>
</head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<body>
    <div class="container">
        <div class="panel panel-default">        
            <div class="panel-body">
                <br>
                <div class="row">
                    <form action="import.php" method="post" enctype="multipart/form-data" id="import_form">				
                            <div class="col-md-3">
                            <input type="file" name="file" />
                            </div>
                            <div class="col-md-5">
                            <input type="submit" class="btn btn-primary" name="import_data" value="IMPORT">
                            </div>	
                            <div class="col-md-5">
                                <a href="view.php">view table</a>
                            </div>		
                    </form>
                </div>
            </div>
        </div>
    </div>	
</body>
</html>