<?php 
  class Post {
    // DB stuff
    private $conn;
    private $table = 'article';

    // Post Properties
    public $id;
    public $title;
    public $image;
    public $headerimage;
    public $introduction;
    public $description;
    public $lestmod;
    public $language;
    public $keywords;
    public $state;
    public $numvisit;
    public $idtheme;
    public $iduser;
    public $idhost;


    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT *  FROM  '  . $this->table . ' ';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();
      
      


      return $stmt;
    }

}