<?php

class APImodel {

    private $conn;
    private $accommodationTable = 'accommodation';


    public $ContactName;
    public $ContactEmail;
    public $ContactNumber;
    public $PropertyName;
    public $Campus;
    public $CapacityApproved;
    public $Address; 
    public $key;

    // Constructor with DB
    public function __construct($db){
        $this->conn = $db;
    }
    
    //read all accommodationData
    public function readAllAccommodationData(){
     
        // create query 
        $query = 'SELECT * FROM ' . $this->accommodationTable;

        //Prepare statement
        $stmt = $this->conn->prepare($query);

        // Execute query
        $stmt->execute();

        return $stmt;
    }

    
    public function readAccommodationDataByKey(){

        // create query
        $query = 'SELECT * FROM ' . $this->accommodationTable . ' p WHERE p.id = ?';
      
        // prepare statement
        $stmt = $this->conn->prepare($query);
      
        // Bind ID
        $stmt->bindParam(1,$this->key);
      
        //execute the query
        $stmt->execute();
      
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
      
        if($row != null){
            $this->ContactName = $row['ContactName'];
            $this->ContactEmail = $row['ContactEmail'];
            $this->ContactNumber = $row['ContactNumber'];
            $this->PropertyName = $row['PropertyName'];
            $this->Campus  = $row['Campus'];
            $this->CapacityApproved = $row['CapacityApproved'];
            $this->Address = $row['Address'];
            $this->key = $row['id'];
        }
        
      
      
      }


      public function readAccommodationDataByLocation(){

        // create query
        $query = 'SELECT * FROM ' . $this->accommodationTable . ' p WHERE p.Address = ?';
      
        // prepare statement
        $stmt = $this->conn->prepare($query);
      
        // Bind Address
        $stmt->bindParam(1,$this->Address);
      
        //execute the query
        $stmt->execute();
      
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
      

        if($row != null){
            $this->ContactName = $row['ContactName'];
            $this->ContactEmail = $row['ContactEmail'];
            $this->ContactNumber = $row['ContactNumber'];
            $this->PropertyName = $row['PropertyName'];
            $this->Campus  = $row['Campus'];
            $this->CapacityApproved = $row['CapacityApproved'];
            $this->Address = $row['Address'];
            $this->key = $row['id'];
        }
        
      
      }

      public function readAccommodationDataByPropertyName(){

        // create query
        $query = 'SELECT * FROM ' . $this->accommodationTable . ' p WHERE p.PropertyName = ?';
      
        // prepare statement
        $stmt = $this->conn->prepare($query);
      
        // Bind ID
        $stmt->bindParam(1,$this->PropertyName);
      
        //execute the query
        $stmt->execute();
      
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
      
        if($row != null){
            $this->ContactName = $row['ContactName'];
            $this->ContactEmail = $row['ContactEmail'];
            $this->ContactNumber = $row['ContactNumber'];
            $this->PropertyName = $row['PropertyName'];
            $this->Campus  = $row['Campus'];
            $this->CapacityApproved = $row['CapacityApproved'];
            $this->Address = $row['Address'];
            $this->key = $row['id'];
        }

      
      
      }


      
      public function Contribute(){



        // Create Query
        $query = 'INSERT INTO ' . $this->accommodationTable . ' SET ContactName = :ContactName, ContactEmail = :ContactEmail,ContactNumber = :ContactNumber,PropertyName = :PropertyName,Campus = :Campus,CapacityApproved = :CapacityApproved,Address = :Address';
   
        // prepare statement
        $stmt = $this->conn->prepare($query);


        //clean data
        $this->ContactName = htmlspecialchars(strip_tags($this->ContactName));
        $this->ContactEmail = htmlspecialchars(strip_tags($this->ContactEmail));
        $this->ContactNumber = htmlspecialchars(strip_tags($this->ContactNumber));
        $this->PropertyName = htmlspecialchars(strip_tags($this->PropertyName));
        $this->Campus = htmlspecialchars(strip_tags($this->Campus));
        $this->CapacityApproved = htmlspecialchars(strip_tags($this->CapacityApproved));
        $this->Address = htmlspecialchars(strip_tags($this->Address));


        //bind data
        $stmt->bindParam(':ContactName', $this->ContactName);
        $stmt->bindParam(':ContactEmail', $this->ContactEmail);
        $stmt->bindParam(':ContactNumber', $this->ContactNumber);
        $stmt->bindParam(':PropertyName', $this->PropertyName);
        $stmt->bindParam(':Campus', $this->Campus);
        $stmt->bindParam(':CapacityApproved', $this->CapacityApproved);
        $stmt->bindParam(':Address', $this->Address);
        // execute query
        if($stmt->execute()){
          return true;
        }
  
        // print error if something goes wrong
        printf("Error: %s.\n",$stmt->error);
  
        return false;
  
      }

}


?>