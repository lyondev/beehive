<?php
    require 'includes/db.php';
    include 'models/hive_datamodel.php';
    $obsModel = new ObservationModel($db);
    $results = $obsModel->getAllObservations
    include 'views/beedata_table.php';
    $db = null;
?>