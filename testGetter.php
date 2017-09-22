<?php
$dir = "";
if($_GET["project"] == "9"){
    $dir = "/u/gheith/public/cs429h_s17_p9/";
} else {
    $dir = "/u/gheith/public/cs429h_s17_pa/";
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