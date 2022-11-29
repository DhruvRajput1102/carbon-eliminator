<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Carbon Eliminator</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>

    <!-- 

    <form action="footprint_calculator.php" method="post">
        <select name="mot">
<option value="value1">Value 1</option>
<option value="value2">Value 2</option>
</select>
        <input type="submit" name="submit" value="Go" />
    </form> -->

    <div class="content">
        <div class="animated fadeIn">


            <div class="row">
                <div class="col-lg-12">

                    <div class=" card-header ">
                        <strong class="card-title ">Carbon Eliminator</strong>
                    </div>
                    <div class="card-body ">

                        <div id="pay-invoice ">
                            <div class="card-body ">
                                <div class="card-title ">
                                    <h3 class="text-center ">Calculate your carbon footprint for this event</h3>
                                </div>
                                <hr>
                                <form action="footprint_calculator.php" method="post ">


                                    <div >
                                        <label>Enter Ticket Number</label>
                                        <div class="input-group ">
                                            <div class="input-group-addon "><i class="ti-ticket "></i></div>
                                            <input type="text " name ="ticket_no">
                                        </div>
                                        <small class="form-text text-muted ">ex. 999/999/9999</small>
                                    </div>
                                    <div >
                                        <label >Date of an event</label>
                                        <div class="input-group ">
                                            <div class="input-group-addon "><i class="fa fa-calendar "></i></div>
                                            <input type="text " name ="ticket_no">
                                        </div>
                                        <small class="form-text text-muted ">ex. DD/MM/YYYY</small>
                                    </div>
                                    <div class="card-header ">
                                        <strong>Enter Your Travel Details</strong>
                                    </div>&nbsp;
                                    <label >Mode of Travel</label>
                                    <div class="input-group ">
                                        <div class="input-group-addon "><i class="ti-car ">&nbsp;</i>
                                            <select name="mot" data-placeholder="Choose a Country... " class="standardSelect " tabindex=" 1 ">
                                                <option value="" label=" Choose mode of transport "></option>
                                                <option value="carTravel ">Car Travel</option>
                                                <option value=" flight ">Flight</option>
                                                <option value="motorBike ">Motor Bike</option>
                                                <option value="publicTransit ">Public Transit</option>
                                                </select>
                                        </div>
                                    </div>&nbsp;
                                    <label>Choose type of vehicle</label>
                                    <div class="input-group ">
                                        <div class="input-group-addon "><i class="ti-car ">&nbsp;</i>
                                            <select name="tov" class="standardSelect " tabindex="1 ">
                                                    <option value=" " label=" Choose vehicle type "></option>
                                                    <option value="SmallDieselCar ">SmallDieselCar</option>
                                                    <option value=" MediumDieselCar ">MediumDieselCar</option>
                                                    <option value="LargeDieselCar ">LargeDieselCar</option>
                                                    <option value="MediumHybridCar ">MediumHybridCar</option>
                                                    <option value="LargeHybridCar ">LargeHybridCar</option>
                                                    <option value="MediumLPGCar ">MediumLPGCar</option>
                                                    <option value="LargeLPGCar ">LargeLPGCar</option>
                                                    <option value="MediumCNGCar ">MediumCNGCar</option>
                                                    <option value="LargeCNGCar ">LargeCNGCar</option>
                                                    <option value="SmallPetrolVan ">SmallPetrolVan</option>
                                                    <option value="LargePetrolVan ">LargePetrolVan</option>
                                                    <option value="SmallDielselVan ">SmallDielselVan</option>
                                                    <option value="MediumDielselVan ">MediumDielselVan</option>
                                                    <option value="LargeDielselVan ">LargeDielselVan</option>
                                                    <option value="LPGVan ">LPGVan</option>
                                                    <option value="CNGVan ">CNGVan</option>
                                                    <option value="SmallPetrolCar ">SmallPetrolCar</option>
                                                    <option value="MediumPetrolCar ">MediumPetrolCar</option>
                                                    <option value="LargePetrolCar ">LargePetrolCar</option>
                                                    <option value="SmallMotorBike ">SmallMotorBike</option>
                                                    <option value="MediumMotorBike ">MediumMotorBike</option>
                                                    <option value="LargeMotorBike ">LargeMotorBike</option>
                                                    </select></div>
                                    </div>


                                    <label>Distance Traveled</label>
                                    <div class="input-group ">
                                        <div class="input-group-addon "><i class="fa fa-male "></i></div>
                                        <input type="text " name ="distance">
                                    </div>
                                    <small class="form-text text-muted ">The distance in KM</small>




                                    <div>
                                        <button id="payment-button " type="submit "name ="submit" value="submit" class="btn btn-lg btn-info btn-block ">
                                                    <span id="payment-button-amount ">Submit</span>
                                    
                                                </button>
                                    </div>
                                </form>


                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>





    </div>

    <!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js "></script>
    <script src="assets/js/main.js "></script>


</body>

</html>
