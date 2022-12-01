<?php  
$t_result=0;$t_valid=$c_valid=FALSE;
$mode_of_travel = $vehicle_of_type = $distance = $ticket = $date = NULL;
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
                "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI0IiwianRpIjoiNDBkNzVlZGU1YmMyNDkyNGY5ZDM1OGQxYzI4MmRmOTBlMDk0NGYxNzFjN2M2YjY4YTI5YjUyYzEzNDQ4NDliZDY5MmYxODMyMDcwZWZjNTciLCJpYXQiOjE2Njk3NjIwNzAsIm5iZiI6MTY2OTc2MjA3MCwiZXhwIjoxNzAxMjk4MDY5LCJzdWIiOiIyMzk0Iiwic2NvcGVzIjpbXX0.EQhjffxpKvcFUXdZh3DlWKWhXzajWuWeU5lrL_2auEZ2uIbETYzTPTwYRLc-hYT5zMxE0zOPH8FSgqwv6M536w",
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
// CLOSING CURL 
            //  print_r($resp);// PRINTING RESPONSE FROM API
            $con=mysqli_connect("localhost","root","","carbon_eliminator");
             $ticket_validation="SELECT t_id FROM t_info WHERE t_id=$ticket";
             try {$t_result=mysqli_query($con,$ticket_validation);
                if($t_result->num_rows>0){ 
                $t_valid=TRUE;
            }
             } catch (\Throwable $th) {
                //throw $th;
             } 
             $ticket_check_sql="SELECT t_id FROM cal WHERE t_id=$ticket";
             try {$t_result=mysqli_query($con,$ticket_check_sql);
                if($t_result->num_rows>0){ 
                $c_valid=TRUE;
            }
             } catch (\Throwable $th) {
                //throw $th;
             } 
             if($t_valid==TRUE){ // TIcket validation
                
                $resp = curl_exec($curl); // EXECUTING CURL
                curl_close($curl);
                $api_response=json_decode($resp,true);
                $carbonFootprint=($api_response['carbon']);
                if($c_valid==TRUE){
                $cal_update_sql="UPDATE cal SET c_date = '".$date."',c_mot ='".$mode_of_travel."', c_vehicle='".$vehicle_of_type."', c_distance='".$distance."', c_footprint='".$carbonFootprint."' WHERE t_id='".$ticket."'";
                $result=mysqli_query($con,$cal_update_sql);
            }
                else{
                    $cal_ist_sql="INSERT INTO cal(t_id,c_date,c_mot, c_vehicle, c_distance, c_footprint) VALUES ('".$ticket."','".$date."', '".$mode_of_travel."', '".$vehicle_of_type."','".$distance."','".$carbonFootprint."')";
                    $result=mysqli_query($con,$cal_ist_sql);
                }
             
            }
            else{
                
            }
?>