<?php
    require 'vendor/autoload.php';
    require 'excel_reader2.php';
    
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $file = "sheddy1";

    $conn = new Spreadsheet_Excel_Reader();

    $conn->read($file);

    $startrow = 1;
    $endrow = 2;
    
?>