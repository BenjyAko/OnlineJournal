<?php

//call on the user class
require('../classes/userclass.php');

//controller function to add user

function addusercontroller($user_name, $user_password){
    $insertuser = new user_class;
    
    //run the insert method
    $runinsert = $insertuser->adduser_method($user_name, $user_password);
    
    if ($runinsert){
        return $runinsert;
    }else{
        return false;
    }
}

//controller function to return user cred

function returnUserCredcontroller($username){
    // create new instance of class
    $returnuser = new user_class;
    
    // run the method for return
    $runreturn = $returnuser->returnuser_cred($username);
    
    // check if select worked
    if ($runreturn){
        //create an array
        $credentials = array();
        //loop through the fetch and add credentials to the array
        while ($record = $returnuser->db_fetch()){
            //adding each record to the array
            array_push($credentials, $record['username']);
            array_push($credentials, $record['password']);
            array_push($credentials, $record['user_id']);
        }
        
        //return the array
        return $credentials;
    }else{
        return false;
    }
}

//controller function to add journal entry

function adduserentrycontroller($userid, $title, $content){
    $insertentry = new user_class;
    
    //run the insert method
    $runentry = $insertentry->insertUserJournalEntry($userid, $title, $content);
    
    if ($runentry){
        return $runentry;
    }else{
        return false;
    }
}

//controller function to return journal titles

function returnJournalTitles($userid){
    // create new instance of class
    $returnTitles = new user_class;
    
    // run the method for return
    $runreturn = $returnTitles->returnJournalTitles($userid);
    
    // check if select worked
    if ($runreturn){
        // create an array
        $titles = array();
        while ($record = $returnTitles->db_fetch()){
            // add each record to the array
            array_push($titles, $record['title']);
        }
        
        // return the array
        return $titles;
    }else{
        return false;
    }
    

}

// controller function to return journal entry

function returnJournalEntry($userid, $title){
    // create new instance of class
    $returnContent = new user_class;
    
    // run method for return
    $runReturn = $returnContent->returnEntryContent($userid, $title);
    
    // check if select worked
    if ($runReturn){
        $content = $returnContent->db_fetch();
        return $content;
    }else{
        return false;
    }
}

// controller function to update journal entry

function updateJournalEntry($entryno, $newcontent){
    // create new instance of class
    $updateContent = new user_class;
    
    // run method for update
    $runUpdate = $updateContent->updateJournalEntry($entryno, $newcontent);
    
    // check if update worked
    if ($runUpdate){
        return $runUpdate;
    }else{
        return false;
    }
}

// controller function to delete journal entry

function deleteJournalEntry($entryno){
    //create new instance of class
    $deleteContent = new user_class;
    
    // run method for delete
    $runDelete = $deleteContent->deleteJournalEntry($entryno);
    
    // check if delete worked
    if ($runDelete){
        return $runDelete;
    }else{
        return false;
    }
}
?>