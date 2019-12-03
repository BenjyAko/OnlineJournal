<?php
//include controller
require('../controller/usercontroller.php');

//check if submit button was clicked
if (isset($_POST['submit'])){
    //grab form data and store in variable
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    
    //call function to add
    $register = addusercontroller($username, $password);
    
    //echo result
    if ($register){
        echo "New User Inserted";
    }else{
        echo "Insert Failed";
    }
}
?>