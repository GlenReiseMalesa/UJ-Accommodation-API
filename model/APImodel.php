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

}


?>