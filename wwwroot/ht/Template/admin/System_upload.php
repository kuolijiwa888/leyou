<?php   
header('Access-Control-Allow-Origin:*');   
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept"); 
$str="1234567890QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm";
$code = substr(str_shuffle($str),0,6) . '.'; 
 if(is_uploaded_file($_FILES['file']['tmp_name'])){  
    $filename =  $_FILES['file']['name'];
    $filename =  time() . $code . substr(strrchr($filename, '.'), 1);
    $uploadfile = "/www/wwwroot/qt/Uploads/". $filename;  
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {  
            echo '/Uploads/'. $filename;  
    }    
}  
?>