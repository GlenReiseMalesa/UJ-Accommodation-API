<?php
   // Headers
   header('Access-Control-Allow-Origin: *');
   header('Content-Type: application/json');

   include_once '../../config/connection.php';
   include_once '../../model/APImodel.php';
   
      // Instantiate DB & connect
      $database = new Connection();
      $db = $database->connect();
      $accommodation = new APImodel($db);


      $result = $accommodation->readAllAccommodationData();

      //get num of rows
      $num = $result->rowCount();

      //check if there are accommodations
      if($num > 0){

        //array of data
        $arr = array();
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $contact_item = array(
                'ContactName' => $ContactName,
                'ContactEmail' => $ContactEmail,
                'ContactNumber' => $ContactNumber
            );

            $property_item = array(
                'PropertyName' => $PropertyName,
                'Campus' => $Campus,
                'CapacityApproved' => $CapacityApproved,
                'Address' => $Address, 
            );


            $accommodation_item = array(
               'key' => $id,
               'propertyDetails' =>$property_item,
               'contactDetails' => $contact_item                                                      
            );
            
            // push to array
            array_push($arr, $accommodation_item);

        }

        // turn to JSON & output
        echo json_encode($arr);


      }else{
            echo json_encode(
                array('message' => 'No Accommodations Found')
            ); 
      }
?>