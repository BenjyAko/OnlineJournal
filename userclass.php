<?php

//include the database class
require('../settings/db-class.php');

class user_class extends db_connection{
    //properties
    public $user_id = null;
    public $user_name = null;
    public $user_password = null;
    
    //method for inserting new user
    public function adduser_method($user_name, $u_pass){
        //write the query
        $sql = "INSERT INTO `user`(`username`,`password`) VALUES('$user_name', '$u_pass')";
        
        //run the query
        return $this->db_query($sql);
    }
    
    //method for retrieving user cred
    public function returnuser_cred($user_name){
        //write the query
        $sql = "SELECT * FROM `user` WHERE `username` = '$user_name'";
        
        //run the query
        return $this->db_query($sql);
    }
    
    public function insertUserJournalEntry($userid, $title, $content){
        //write the query
        $sql = "INSERT INTO `journal_entries`(`user_id`,`title`,`content`) VALUES('$userid','$title','$content')";
        
        //run the query
        return $this->db_query($sql);
    }
    
    public function returnJournalTitles($userid){
        //write the query
        $sql = "SELECT `title` FROM `journal_entries` WHERE `user_id` = '$userid'";
        
        //run the query
        return $this->db_query($sql);
    }
    
    public function returnEntryContent($userid, $title){
        // write the query
        $sql = "SELECT `content`, `entry_no` FROM `journal_entries` WHERE `user_id` = '$userid' and `title` = '$title'";
        
        //run the query
        return $this->db_query($sql);
    }
    
    public function updateJournalEntry($entryno, $newcontent){
        // write the query
        $sql = "UPDATE `journal_entries` SET `content` = '$newcontent' WHERE `entry_no` = '$entryno'";
        
        //run the query
        return $this->db_query($sql);
    }
    
    public function deleteJournalEntry($entryno){
        // write the query
        $sql = "DELETE FROM `journal_entries` WHERE `entry_no` = '$entryno'";
        
        //run the query
        return $this->db_query($sql);
    }
}

?>