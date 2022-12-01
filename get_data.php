<script>$(document).ready(function() {
    $("#mode-of-travel").on('change', function() {
       // var mot_id = $(this).val();
       var mot_id = $(this).find(':selected').attr('data-value');
        $.ajax({
            method: "POST",
            url: "get_data.php",
            data: {
                id: mot_id
            },
            datatype: "html",
            success: function(data) {
                $("#choose-vehicle").html(data);

            }
        });
    });
    
}); 
</script>
<?php
$con=mysqli_connect("localhost","root","","carbon_eliminator");
if (!empty($_POST["id"])) {
    $id = $_POST['id'];
    $query = "SELECT * FROM `category` WHERE parent = $id";
    $result = mysqli_query($con, $query);
    if ($result->num_rows > 0) {
        echo '<option value="" selected disabled>Select Vehicle</option>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
        }
    }
}
?>