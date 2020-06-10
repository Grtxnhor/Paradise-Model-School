<?php   
session_start();
if (isset($_SESSION['staffid'])) {

require ("../functions/init.php");
 $sql ="SELECT * FROM staff WHERE `id` = '".$_SESSION["staffid"]."'";
    $result = query($sql);
    if(row_count($result) == 1) {
    $row = mysqli_fetch_array($result);
    $data = $row['staffid'];
    $_POST['staffid'] = $data;
    $pass = str_replace('/', '', $data);
    $fname = "$pass.png";

/*
 * PHP QR Code encoder
 *
 * Exemplatory usage
 *
 * PHP QR Code is distributed under LGPL 3
 * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */

    
    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = '../upload/QRCard/';

    include "qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_WEB_DIR.$fname;
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'H'; 

    $matrixPointSize = 4;


    if (!isset($_SESSION['staffid'])) { 
    
            die('data cannot be empty!');
        
    } else {    
    
        //default data
        QRcode::png('<a href="https://staff.paradisemodelschool.com.ng/?id="'.$data.'"></a>', $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    }    
        
    //display generated file
    echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>';  
    
    }  
     $sqll = "UPDATE staff SET `qrcode` = '$fname' WHERE `id` = '".$_SESSION["staffid"]."'";
     $re   = query($sqll);

     header("location: .././empltr");
}
else{
  header("location: ./login");
}