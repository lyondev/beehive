<?php
    $hive_id = "";
    $collection_date = "";
    $sample_period = "";
    $mite_count = "";
    if (isset($_POST['submit'])) {
        $isValid = true;        
        if (!empty($_POST['hive_id'])) {
                $hive_id = $_POST['hive_id'];
            } else {
                echo '<p>Please enter a hive name.</p>';
                $isValid = false;
            }
            if (!empty($_POST['collection_date'])) {
                $collection_date = $_POST['collection_date'];
            } else {
                echo '<p>Please enter a collection date.</p>';
                $isValid = false;
            }
            if (!empty($_POST['sample_period'])) {
                $sample_period = $_POST['sample_period'];
            } else {
                echo '<p>Please enter a sample period.</p>';
                $isValid = false;
            }
            if (!empty($_POST['mite_count'])) {
                $mite_count = $_POST['mite_count'];
            } else {
                echo '<p>Please enter a mite count.</p>';
                $isValid = false;
            }
        if ($isValid) {
            require 'includes/bdb.php';
            $sql = "INSERT INTO hive_data VALUES (NULL, :hive_id, :collection_date, :sample_period, :mite_count, NULL)";
            $statement = $db->prepare($sql);
            $statement->bindParam(':hive_id', $hive_id, PDO::PARAM_STR);
            $statement->bindParam(':collection_date', $collection_date, PDO::PARAM_STR);
            $statement->bindParam(':sample_period', $sample_period, PDO::PARAM_INT);
            $statement->bindParam(':mite_count', $mite_count, PDO::PARAM_INT);
            $result = $statement->execute();
            if ($result) {
                echo "<p>Thanks for your input!</p>";
                return;
            } else {
                echo "<p>Error</p>";
            }
        }
    }
?>