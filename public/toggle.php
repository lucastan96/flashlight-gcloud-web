<?php
require('../vendor/autoload.php');

use Google\Cloud\Datastore\DatastoreClient;

$request_method = filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_STRING);

if ($request_method == 'POST') {
    $toggle = filter_input(INPUT_POST, 'toggle', FILTER_VALIDATE_INT);

    $project_id = 'avid-garage-193614';

    $datastore = new DatastoreClient([
        'projectId' => $project_id
    ]);

    $key = $datastore->key('Flashlight', 5644406560391168);
    $task = $datastore->entity($key, [
        'Switch' => $toggle
    ]);
    
    $datastore->upsert($task);
}