<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">index</h2>

               <?php
               //Starts a new session and returns the curl handler for using the functions
               $apiStudent = curl_init();

               //Sets an option in the session of the cURL resource.
               //1- Resource 2- The CURLOPT_XXX option to configure. 3- Consumed URL
               curl_setopt($apiStudent,CURLOPT_URL,'https://utn-students-api.herokuapp.com/api/Student');

               curl_setopt($apiStudent,CURLOPT_HTTPHEADER,array('x-api-key: 4f3bceed-50ba-4461-a910-518598664c08'));

               // Shipping request


               //Execute the cURL session that is passed to it as a parameter.
               $response = curl_exec($apiStudent);

               // Api Key
               $api_key = '4f3bceed-50ba-4461-a910-518598664c08';

               

               ?>
            
             
          </div>
     </section>
</main>;