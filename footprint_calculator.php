<?php 


if(isset($_POST['submit'])){
  $mode_of_travel=$_POST['mot'];
  $vehicle_of_type=$_POST['voc'];
  $distance=$_POST['distance'];
  $ticket=$_POST['ticket'];
  $date=$_POST['date'];
}

             $url = "https://app.trycarbonapi.com/api/".$mode_of_travel;// API endpoint 
      
             $curl = curl_init($url);
             curl_setopt($curl, CURLOPT_URL, $url);
             curl_setopt($curl, CURLOPT_POST, true);// Calling API using POST method
             curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Requesting response back from the API
             
             $headers = array(
                "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI0IiwianRpIjoiODBmZmU0NDlmMGU0MWQ1ZDI4ZDRmZTA1Njg4ZjJlZDBiY2Q5MzNhYjA2OWQxMWU5YjdhN2IwZmU0ZDMwNjVlMGQ0YmZhNzc4NWIwZjIxODciLCJpYXQiOjE2NjkzMjQ3MTIsIm5iZiI6MTY2OTMyNDcxMiwiZXhwIjoxNzAwODYwNzEyLCJzdWIiOiIyMjk0Iiwic2NvcGVzIjpbXX0.h2Ad4aeo0ahG3jeXTrJARMen2Nu4Rht0yv4y89b9B_5PWVdISqi5HL0h2FO4MNVRGHJqLAuC8iKLfXbZIKoO-Q",
                "Content-Type: application/json",// API KEY
             );
             if ($mode_of_travel == "carTravel"){
                $d_array = array("distance" => $distance, "vehicle" => $vehicle_of_type);
             }
             else{
                $d_array = array("distance" => $distance, "type" => $vehicle_of_type);
             }
              // DATA TO BE SENT TO API FOR CALCULATION
             $data = json_encode($d_array);
             curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
             //for debug only!
             curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
             curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);// PARSING DATA TO CURL THROUGH POST METHOD
             $resp = curl_exec($curl); // EXECUTING CURL
             curl_close($curl);// CLOSING CURL 
            //  print_r($resp);// PRINTING RESPONSE FROM API
             $api_response=json_decode($resp,true);
             $carbonFootprint=($api_response['carbon']);

echo "<h2>Your CarbonFootprint:</h2>";
echo "Your ticket no :".$ticket;
echo "<br>";
echo "Date of Event :".$date;
echo "<br>";
echo "Your Carbon Footprint for this Travel is ".$carbonFootprint;
echo "<br>";
echo "Total Distance Traveled in ".$vehicle_of_type." was ".$distance." KM.";
?>