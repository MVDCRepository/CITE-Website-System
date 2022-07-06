<?php
    include_once("db_connect.php");
    if(isset($_POST['import_data'])){    
        // validate to check uploaded file is a valid csv file
        $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
        if(!empty($_FILES['file']['name']) &&
        in_array($_FILES['file']['type'],$file_mimes)){
            if(is_uploaded_file($_FILES['file']['tmp_name'])){   
                $csv_file = fopen($_FILES['file']['tmp_name'], 'r');           
                //fgetcsv($csv_file);            
                // get data records from csv file
                while(($emp_record = fgetcsv($csv_file)) !== FALSE){
                    // Check if employee already exists with same id_number
                    $sql_query = "SELECT  fname, lname, mname, gender, b_date, address, email, phoneNum, guardian_name, guardian_contact, cmoNo, series, yr_lvl, status, password FROM student_table WHERE id_number = '".$emp_record[1]."'";
                    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
                    // if employee already exist then update details otherwise insert new record
                    if(mysqli_num_rows($resultset)) {                     
                        $sql_update = "UPDATE student_table set fname='".$emp_record[2]."',  lname='".$emp_record[3]."',  mname='".$emp_record[4]."',  gender='".$emp_record[5]."',  b_date='".$emp_record[6]."',  address='".$emp_record[7]."',  email='".$emp_record[8]."',  phoneNum='".$emp_record[9]."',  guardian_name='".$emp_record[10]."',  guardian_contact='".$emp_record[11]."',  cmoNo='".$emp_record[12]."',  series='".$emp_record[13]."',  yr_lvl='".$emp_record[14]."',  status='".$emp_record[15]."',  password='".$emp_record[16]."' WHERE id_number ='".$emp_record[1]."'";
                        mysqli_query($conn, $sql_update) or die("database error:". mysqli_error($conn));
                    } else{
                        $mysql_insert = "INSERT INTO student_table (id_number, fname, lname, mname, gender, b_date, address, email, phoneNum, guardian_name, guardian_contact, cmoNo, series, yr_lvl, status, password )VALUES('".$emp_record[1]."', '".$emp_record[2]."', '".$emp_record[3]."', '".$emp_record[4]."', '".$emp_record[5]."', '".$emp_record[6]."', '".$emp_record[7]."', '".$emp_record[8]."', '".$emp_record[9]."', '".$emp_record[10]."', '".$emp_record[11]."', '".$emp_record[12]."', '".$emp_record[13]."', '".$emp_record[14]."', '".$emp_record[15]."', '".$emp_record[16]."')";
                        mysqli_query($conn, $mysql_insert) or die("database error:". mysqli_error($conn));
                    }
                }            
                fclose($csv_file);
                $import_status = '?import_status=success';
            } else {
                $import_status = '?import_status=error';
            }
        } else {
            $import_status = '?import_status=invalid_file';
        }
    }
    header("Location: index.php".$import_status);
?>
