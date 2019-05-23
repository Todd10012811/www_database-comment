<?php
class _content{
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function title() {
        $this->db->query('SELECT * FROM Content ');
        return $this->db->resultSet();
    }
  
    public function paragraph() {
        $this->db->query('SELECT * FROM Content ');
        return $this->db->resultSet();
    }
    public function image(){
        $this->db->query('SELECT * FROM Images');
        return $this->db->resultSet();
    }
    public function comments(){
        $this->db->query('SELECT * FROM Comments');
        return $this->db->resultSet();
    }
    public function addcomment($fn) {
      
        //Adding data to database
        $this->db->query('INSERT INTO  Comments (Prop) VALUES (:fn)');
  
        //Binding Variables
        $this->db->bind(':fn', $fn);
     
  
        //Return true or false, based on if query is successful or not
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
      }

}