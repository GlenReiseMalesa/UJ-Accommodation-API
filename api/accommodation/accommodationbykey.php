<?php
   // Headers
   header('Access-Control-Allow-Origin: *');
   header('Content-Type: application/json');

   define('__ROOT__', dirname(dirname(__FILE__)));
   include_once __ROOT__. '../../config/connection.php';
   include_once __ROOT__. '../../model/APImodel.php';

      // Instantiate DB & connect
      $database = new Connection();
      $db = $database->connect();
      $accommodation = new APImodel($db);

      $accommodation->key = $_GET['key'];

      $result = $accommodation->readAccommodationDataByKey();

      if($accommodation->key != null){    
         
      $arr = array(
        'key' => $accommodation->key,
        'ContactName' => $accommodation->ContactName,
        'ContactEmail' => $accommodation->ContactEmail,
        'PropertyName' => $accommodation->PropertyName,
        'Campus' => $accommodation->Campus,
        'CapacityApproved' => $accommodation->CapacityApproved,
        'Address' => $accommodation->Address
      );



 
         // make json
         print_r(json_encode($arr));   
         
         
       }else{
             echo json_encode(
                 array('message' => 'No data Found')
             ); 
       }
?>