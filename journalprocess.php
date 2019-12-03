<?php
session_start();
require('../controller/usercontroller.php');
$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
// grab entry number
$entryno = $_SESSION['entryno'];

//check if button was clicked

if (isset($_POST['update'])){
    
    // grab user input
    $updatedContent = $_POST['ujentry'];
    
    // call function to update
    $updateEntry = updateJournalEntry($entryno, $updatedContent);
    
    if ($updateEntry){
        echo "Update Successful";
    }else{
        echo "Update Unsuccessful";
    }
    
    
}

if (isset($_POST['delete'])){
    // call function to delete
    $deleteEntry = deleteJournalEntry($entryno);
    
    // check if delete was successful
    
    if ($deleteEntry){
        echo "Delete Successful";
    }
    else{
        echo "Delete Unsuccessful";
    }
}
?>