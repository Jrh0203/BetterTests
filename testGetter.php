<?php
$dir = "";
if($_GET["project"] == "2"){
    $dir = "/u/gheith/public/cs439h_f17_p2/";
} else if($_GET["project"] == "3"){
    $dir = "/u/gheith/public/cs439h_f17_p3/";
} else {
    $dir = "/u/gheith/public/cs439h_f17_p4/";
}
$test = $_GET["test"];
$files = scandir($dir);
echo "".$file;
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