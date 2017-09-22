<?php
$dir = "";
if($_GET["project"] == "2"){
    $dir = "/u/gheith/public/cs439h_f17_p2/latest/";
} else if($_GET["project"] == "3"){{
    $dir = "/u/gheith/public/cs439h_f17_p3/latest/";
} else {
    $dir = "/u/gheith/public/cs439h_f17_p4/latest/";
}
$test = $_GET["test"];
$files = scandir($dir);
foreach ($files as $file){
    if($file != "." && $file != ".."){
        if($test == ""){
            if(substr($file, -4) == ".hex"){
                $data = substr($file, 0 , -4);
                echo "<option value='" . $data . "'>" . $data . "</option>";
            }
        } else {
            if($file == $test){
                echo file_get_contents($dir . $file);
            }
        }
    }
}
?>