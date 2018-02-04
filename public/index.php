<?php
//require('../vendor/autoload.php');
//
//use Google\Cloud\Datastore\DatastoreClient;
//
//$project_id = 'avid-garage-193614';
//
//$datastore = new DatastoreClient([
//    'projectId' => $project_id
//]);
//
//function getToggle($datastore) {
//    $query = $datastore->query()
//        ->kind('Flashlight');
//
//    $results = $datastore->runQuery($query);
//    $result = [];
//
//    foreach ($results as $entity) {
//        $result[] = $entity['Switch'];
//    }
//
//    return $result[0];
//}
//
//$toggle = getToggle($datastore);

$toggle = 0;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Flashlight</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>
    <body class="text-center mt-5">
        <h1><i class="fa fa-lightbulb-o mr-3" aria-hidden="true"></i>Flashlight</h1>
        <button class="btn btn-danger">Error</button>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase-database.js"></script>
        <script>
            var config = {
                apiKey: "AIzaSyCFowUq2IMeJjKJBBIhaXc8VWiaqqVS7q8",
                authDomain: "flashlight-193812.firebaseapp.com",
                databaseURL: "https://flashlight-193812.firebaseio.com",
                projectId: "flashlight-193812",
                storageBucket: "flashlight-193812.appspot.com",
                messagingSenderId: "701332877484"
            };
            firebase.initializeApp(config);
            console.log(firebase);
            //            database = firebase.database;
            //            
            //            var ref = database.ref('switch');
            //            ref.on('value', gotData, errData);
            //            
            //            function gotData(data) {
            //                console.log(data);
            //            }
            //            
            //            function errData(err) {
            //                console.log("Error!");
            //                console.log(err);
            //            }
        </script>
        <!--
<script>
var toggle = <?php echo $toggle; ?>;

if (toggle == 1) {
$("body").addClass("bg-light");
$(".btn").text("Turn Off");
} else {
$("body").addClass("bg-dark");
$("h1").addClass("text-white");
$(".btn").text("Turn On");
}

$(".btn").click(function (e) {
e.preventDefault();

if ($("body").hasClass("bg-dark")) {
toggle = 1;
$("body").removeClass("bg-dark").addClass("bg-light");
$("h1").removeClass("text-white");
$(".btn").text("Turn Off");
} else {
toggle = 0;
$("body").removeClass("bg-light").addClass("bg-dark");
$("h1").addClass("text-white");
$(".btn").text("Turn On");
}

$.ajax({
type: "POST",
url: "toggle.php",
data: {toggle: toggle}
});
});
</script>
-->
    </body>
</html>