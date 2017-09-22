<?php
$dir = "";
if($_GET["project"] == "9"){
    $dir = "/u/gheith/public/cs439h_f17_p2/";
} else {
    $dir = "/u/gheith/public/cs439h_f17_p3/";
}
$test = $_GET["test"];
$files = scandir($dir);
foreach ($files as $file){
    if($file != "." && $file != ".."){
        if($test == ""){
            if(substr($file, -3) == ".cc"){
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