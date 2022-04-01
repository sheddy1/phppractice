<?php
    require 'vendor/autoload.php';
    
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $user = "root";
    $pass = "";
    $db ="dofile";
    $db = new mysqli('localhost',$user,$pass,$db)
     or die("could not connect");

     echo "connection succeded";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST" action="" enctype="multipart/form-data" >
        <input type="file" name="importfile" class="do1" /><br>
        <button name="button1"><h1>import file</h1></button>
    </form> 

    <?php

         if( isset($_POST['button1'])){
        // echo"GOD IS GOOD";
            $fileName = $_FILES['importfile']['name'];

            $allowed_ext = ['xls','clv','xlsx','dta'];
            
            $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

            if(in_array($file_ext, $allowed_ext))
            {
                // echo"<script>alert('file extension is correct');</script>";
                $inputFileNamePath = $_FILES['importfile']['tmp_name'];

                $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);

                $data = $spreadsheet->getActiveSheet()->toArray();


                foreach($data as $row)
                {
                    $fullname = $row['0'];
                    $email = $row['1'];
                    $course = $row['2'];
                    // $course = $row['3'];

                    $insert ="INSERT INTO file (fullname,email,course) VALUES ('$fullname','$email','$course')";

                    $result = mysqli_query($db, $insert);
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
    ?>

</body>
</html>