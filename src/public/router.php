   <?php
   // Serve the requested resource as-is if it exists
   if (file_exists(__DIR__ . $_SERVER['REQUEST_URI'])) {
       return false;
   }
   // Custom routing logic
   switch ($_SERVER['REQUEST_URI']) {
       case '/calculate-discount':
           require __DIR__ . '/calculate_discount.php';
           break;
       default:
           http_response_code(404);
           echo 'Not Found';
           break;
   }