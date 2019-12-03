<?php
//include controller
require('../controller/usercontroller.php');

//check if submit button was clicked
if (isset($_POST['submit'])){
    //grab form data and store in variable
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);
    
    //call function to return user cred
    $userarray = array();
    $userarray = returnUserCredcontroller($username);
    
    if ($userarray[0] == $username && $userarray[1] == $password){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['userid'] = $userarray[2];
        
        header('location: dashboard.php');
        
    }else{
        echo "Wrong username/password combination";
    }
}

?>