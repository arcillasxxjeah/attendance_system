<?php 

    require_once('connection.php');

    if($con){
        //name value pairing

        $student_no = $_POST['student_no'];
        $student_name = $_POST['student_name'];
        $year_section = $_POST['yr_sec'];
        
        

        /* Inserting the values of the variables into the database. */
        $query = "Insert into coecsout_tbl(student_no, student_name, yr_sec, timeout) 
        values('$student_no','$student_name','$year_section',NOW())";

        $result= mysqli_query($con,$query);

        if($result){
            echo '<script type="text/Javascript">';
            echo 'alert("TIMED-OUT Successfully!")';
            echo '</script>';
            echo '<script type="text/Javascript">';
            echo 'window.location = "../coecsHOME.html";';
            echo '</script>';
                          
    }else{
        $err[] = 'Registration failed...' . mysqli_error($con);
    }
}else{
    exit('Could not connect to db.....' . mysqli_connect_error());
}
?>