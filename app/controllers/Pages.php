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
      

       // add data or variables to the array using key-value pairs
       if(!empty($_POST['Prop']) ) {
        if($this->_page->addcomment($_POST['Prop'])) {
            $data = [
                'title2' => "Message added successfully",
                'title' => $title,
                'paragraph' => $paragraph,
                'image' => $image,
                'comments' => $comments,
                
            ];
        }
    } else {
        $data = [
          'title2' => "",
          'title' => $title,
          'paragraph' => $paragraph,
          'image' => $image,
          'comments' => $comments,
            
        ];
    }

       //$data['title2'];
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
    }
