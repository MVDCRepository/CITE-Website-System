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
<title>view table</title>
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
                <div class="row mx-auto">
                    <a href="index.php">import csv</a>
                </div>
                <br>
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>id_number</th>
                            <th>fname</th>
                            <th>lname</th>
                            <th>mname</th>
                            <th>gender</th>
                            <th>birthday</th> 
                            <th>address</th>
                            <th>email</th>
                            <th>phoneNum</th>
                            <th>guardian name</th>
                            <th>guardian contact</th>
                            <th>cmoNo</th>
                            <th>series</th>
                            <th>yr_lvl</th>
                            <th>status</th>
                            <th>password</th>                    
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql = "SELECT id_number, fname, lname, mname, gender, b_date, address, email, phoneNum, guardian_name, guardian_contact, cmoNo, series, yr_lvl, status, password FROM student_table ORDER BY student_id ASC LIMIT 100";
                            $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                            if(mysqli_num_rows($resultset)) { 
                            while( $rows = mysqli_fetch_assoc($resultset) ) { 
                            ?>
                                <tr>
                                <td><?php echo $rows['id_number']; ?></td>
                                <td><?php echo $rows['fname']; ?></td>
                                <td><?php echo $rows['lname']; ?></td>
                                <td><?php echo $rows['mname']; ?></td>
                                <td><?php echo $rows['gender']; ?></td>
                                <td><?php echo $rows['b_date']; ?></td>
                                <td><?php echo $rows['address']; ?></td>
                                <td><?php echo $rows['email']; ?></td>
                                <td><?php echo $rows['phoneNum']; ?></td>
                                <td><?php echo $rows['guardian_name']; ?></td>
                                <td><?php echo $rows['guardian_contact']; ?></td>
                                <td><?php echo $rows['cmoNo']; ?></td>  
                                <td><?php echo $rows['series']; ?></td>   
                                <td><?php echo $rows['yr_lvl']; ?></td> 
                                <td><?php echo $rows['status']; ?></td>  
                                <td><?php echo $rows['password']; ?></td>             
                                </tr>
                            <?php } } else { ?>  
                                <tr><td colspan="10">No records to display.....</td></tr>
                            <?php } ?>					
                        </tbody>
                    </table>
                </div>	
            </div>
        </div>
    </div>	
</body>
</html>