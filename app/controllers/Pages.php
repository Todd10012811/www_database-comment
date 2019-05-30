<?php

    include(APPROOT . '/helper/helperfunctions.php');

    class Pages extends Controller {

      public function __construct() {
        $this->_page = $this->model('_content'); //name your model
        //$this->people = $this->model('People');
      }
      public function index() {

        // variables for data or model functions go here
        $title = $this->_page->title();
        $paragraph = $this->_page->paragraph();
        $image = $this->_page->image();

        // add data or variables to the array using key-value pairs
        $data = [
          'title' => $title,
          'paragraph' => $paragraph,
          'image' => $image
        ];

        //$data['title2'];

        // call your view 
        // $this->view('folder/file', $data); //file extension not needed - if a file is not in a folder, don't point one
        $this->view('pages/template_home', $data);
      }
    
      public function products(){
        // variables for data or model functions go here
        $title = $this->_page->title();
        $paragraph = $this->_page->paragraph();
        $image = $this->_page->image();
        $comments = $this->_page->comments();
        $data = [
         'title' => $title,
         'paragraph' => $paragraph,
         'image' => $image,
         'comments' => $comments,
         'title2' => "fds",
       ];
      
        $this->view('pages/template_products', $data);
       }
    
 
      public function legislation(){
       // variables for data or model functions go here
       $title = $this->_page->title();
       $paragraph = $this->_page->paragraph();
       $image = $this->_page->image();

       // add data or variables to the array using key-value pairs
       $data = [
         'title' => $title,
         'paragraph' => $paragraph,
         'image' => $image
       ];

       //$data['title2'];
        $this->view('pages/template_legislation', $data);

      }
      public function contact(){
      // variables for data or model functions go here
      $title = $this->_page->title();
      $paragraph = $this->_page->paragraph();
      $image = $this->_page->image();

      // add data or variables to the array using key-value pairs
      $data = [
        'title' => $title,
        'paragraph' => $paragraph,
        'image' => $image
      ];

      //$data['title2'];

        $this->view('pages/template_contact', $data);

      }
      public function process() {
        // add data or variables to the array using key-value pairs
        if(!empty($_POST['FName']) && !empty($_POST['Lname']) && !empty($_POST['Email']) && !empty($_POST['Phone']) ) {
          if($this->_page->addcontact($_POST['FName'],$_POST['Lname'],$_POST['Email'],$_POST['Phone'])) {
          
            //Redirect to home page
            header("Location: ".URLROOT."pages/contact");
            exit;
          }
        } 
      }
      
      public function processFrom() {
        // add data or variables to the array using key-value pairs
        if(!empty($_POST['Prop']) && !empty($_POST['FName']) ) {
          if($this->_page->addcomment($_POST['Prop'], $_POST['FName'])) {
            $data['title2'] = "Message added successfully";
            //Redirect to home page
            header("Location: ".URLROOT."pages/products");
            exit;
          }
        } 
      }

      public function productlist(){
       
        $title = $this->_page->title();
        $product = $this->_page->getSingleProduct();

        $data = [
          'product' => $product,
          'title' => $title
      ];
      $this->view('pages/template_dynamic', $data);
      }

      public function singleProduct(){
        $id = myTryParse(URLROOT);
        $title = $this->_page->title();
        $product = $this->_page->getproduct($id);
        $data = [
          'product' => $product,
          'title' => $title
      ];
      $this->view('pages/template_singleproduct', $data);
      }

      public function displaybybrand(){
       
        $title = $this->_page->title();
        $product = $this->_page->getbrands();

        $data = [
          'product' => $product,
          'title' => $title
      ];
      $this->view('pages/template_dynamic', $data);
      }


      
      public function search(){
       
        $title = $this->_page->title();
        $product = $this->_page->search($_POST['usersearch']);
      
        $data = [
          'product' => $product,
          'title' => $title,
     
      ];
      $this->view('pages/template_dynamic', $data);
      }


    }
