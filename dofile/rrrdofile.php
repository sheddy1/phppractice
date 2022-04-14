<?php
    require 'vendor/autoload.php';
    require 'excel_reader2.php';
    
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $user = "root";
    $pass = "";
    $db ="dofile";
    $db = new mysqli('localhost',$user,$pass,$db)
     or die("could not connect");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RRR do file</title>
</head>
<body>
    <form method = "POST" action="" enctype="multipart/form-data" >
        <input type="file" name="importfile" class="do1" /><br>
        <button name="button1"><h1>import file</h1></button>
    </form> 

    <?php

         if( isset($_POST['button1'])){
            $fileName = $_FILES['importfile']['name'];

            $allowed_ext = ['xls','clv','xlsx','dta'];
            
            $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

            if(in_array($file_ext, $allowed_ext))
            {
                // echo"<script>alert('file extension is correct');</script>";
                $inputFileNamePath = $_FILES['importfile']['tmp_name'];

                $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);

                $data = $spreadsheet->getActiveSheet()->toArray ();

                

                foreach($data as $row)
                {
                    //listing variables for entry
                    $zone = $row['0'];
                    $state = $row['1'];
                    $ward = $row['2'];
                    $lga = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];
                    $zone = $row['0'];

                    // $insert ="INSERT INTO file (fullname,email,course) VALUES ('$fullname','$email','$course')";

                    // $result = mysqli_query($db, $insert);
                    $msg = true;
                }

                if(isset($msg))
                {
                    echo"<script>alert('file imported');</script>";
                }
                else{
                    echo"<script>alert('file not imported');</script>";
                }
            }
            else{
                // $_SESSION['message']  = "invalid file";
                echo"<script>alert('file extension is incorrect');</script>";
            }
        };

        // function to rename table
            function rename1() {
                $user = "root";
                $pass = "";
                $db ="dofile";
                $db = new mysqli('localhost',$user,$pass,$db)
                or die("could not connect");

                echo "connection succeded";

                $rename = "ALTER TABLE file CHANGE fname fullname VARCHAR(100)";

                mysqli_query($db,$rename);

                echo"<script>alert('column has been renamed');</script>";
        
            };

            function drop1() {
                $user = "root";
                $pass = "";
                $db ="dofile";
                $db = new mysqli('localhost',$user,$pass,$db)
                or die("could not connect");

                echo "connection succeded";

                $rename = "ALTER TABLE file DROP COLUMN course";

                mysqli_query($db,$rename);

                echo"<script>alert('column has been removed');</script>";
        
            };

            function count1() {
                $user = "root";
                $pass = "";
                $db ="dofile";
                $db = new mysqli('localhost',$user,$pass,$db)
                or die("could not connect");

                // echo "connection succeded";

                $con1="SELECT * FROM file WHERE email = 'email'";

                $con1a = mysqli_query($db,$con1);

                $con1b  = mysqli_num_rows($con1a);

                echo $con1b; 

                echo"<script>alert('The count is ' + $con1b);</script>";
        
            };
            
        // echo "
        
        // ";
    ?>

            <form method="POST" action="">
                <button  name ="btn">
                    <h2>Run do file</h2>
                </button>
            </form>

            <?php
            if(isset($_POST['btn']) )
            {
                // rename1();

                // drop1();

                // count1();
            }
            ?>
</body>
</html>