<?php
   // Headers
   header('Access-Control-Allow-Origin: *');
   header('Content-Type: application/json');
   header('Access-Control-Allow-Methods: POST');
   header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

   define('__ROOT__', dirname(dirname(__FILE__)));
   include_once __ROOT__. '../../config/connection.php';
   include_once __ROOT__. '../../model/APImodel.php';

      // Instantiate DB & connect
      $database = new Connection();
      $db = $database->connect();
      $accommodation = new APImodel($db);


      $accommodation->ContactName= $_POST['ContactName'];
      $accommodation->ContactEmail = $_POST['ContactEmail'];
      $accommodation->ContactNumber = $_POST['ContactNumber'];
      $accommodation->PropertyName = $_POST['PropertyName'];
      $accommodation->Campus = $_POST['Campus'];
      $accommodation->CapacityApproved = $_POST['CapacityApproved'];
      $accommodation->Address = $_POST['Address']; 

        // 
        if($accommodation->Contribute()){
            echo json_encode(
                array('message' => 'contributed')
            );
        }else{
            echo json_encode(
                array('message' => 'failed')
            );   
        }
?>