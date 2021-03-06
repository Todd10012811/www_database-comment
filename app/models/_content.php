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
        $this->db->query('SELECT * FROM Comments WHERE Approval = 1 ORDER BY Indx');
        return $this->db->resultSet();
    }
    public function addcomment($Prop,$FName) {
        $Approval = 0;
        $TDate = date("d-m-y",time());
        //Adding data to database
        $this->db->query('INSERT INTO  Comments (Prop,FName,TDate,Approval) VALUES (:Prop,:FName,:TDate,:Approval)');
  
        //Binding Variables
        $this->db->bind(':Prop', $Prop);
        $this->db->bind(':FName', $FName);
        $this->db->bind(':TDate', $TDate);
        $this->db->bind(':Approval', $Approval);

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
    public function addcontact2($Name2, $Phone2, $Address2, $Time2){
        $this->db->query('INSERT INTO  AppointmentRequest (name, Phone, Address, TimeRequested) VALUES (:Name2,:Phone2,:Address2,:Time2)');

        $this->db->bind(':Name2', $Name2);
        $this->db->bind(':Phone2', $Phone2);
        $this->db->bind(':Address2', $Address2);
        $this->db->bind(':Time2', $Time2);

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
        $this->db->query("SELECT * FROM Products WHERE discription LIKE '%$id%'");
        $this->db->query("SELECT * FROM Products WHERE brand LIKE '%$id%'");
       
    
        return $this->db->resultSet();

    }



}