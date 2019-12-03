<?php
//include controller
require('../controller/usercontroller.php');
session_start();
$userid = $_SESSION['userid'];

//if button is submitted
if (isset($_POST['submit'])){
    //grab user input and store in variable
    $title = $_POST['jtitle'];
    $content = $_POST['jentry'];
    
    //call function to add
    $insertentry = adduserentrycontroller($userid, $title, $content);
   
    //echo result
    if ($insertentry){
        echo "Entry recorded";
    }else{
        echo "Save failed";
    }
}
?>