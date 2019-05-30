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
    public function addcomment($Prop,$FName) {
      
        //Adding data to database
        $this->db->query('INSERT INTO  Comments (Prop,FName) VALUES (:Prop,:FName)');
  
        //Binding Variables
        $this->db->bind(':Prop', $Prop);
        $this->db->bind(':FName', $FName);
  
        //Return true or false, based on if query is successful or not
        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
      }
    public function addcontact($FName, $Lname, $Email, $Phone){
        $this->db->query('INSERT INTO  ContactForm (FName,Lname,Email,Phone) VALUES (:FName,:Lname,:Email,:Phone)');

        $this->db->bind(':FName', $FName);
        $this->db->bind(':Lname', $Lname);
        $this->db->bind(':Email', $Email);
        $this->db->bind(':Phone', $Phone);

        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function getSingleProduct() {
        $this->db->query("SELECT * FROM Products");
      
        return $this->db->resultSet();
    }

    public function getproduct($id) {
        $this->db->query("SELECT * FROM Products WHERE id = :id");
        $this->db->bind(":id", $id);
        return $this->db->resultSet();
    }
    public function getbrands() {
        $this->db->query("SELECT * FROM Products WHERE brand = 'acer' ");
   
        return $this->db->resultSet();
    }

    public function search($id){
        $this->db->query("SELECT * FROM Products WHERE pname LIKE '%$id%'");
    
        return $this->db->resultSet();

    }



}