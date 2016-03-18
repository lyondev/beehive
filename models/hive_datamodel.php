<?php
class ObservationModel
    {
        //vars
        private $db;        
        //constructor
        public function __construct(PDO $db)
        {
            $this->db = $db;
        }
        //functions
        public function getAllObservations()
        {
            //Define query
            $sql = "SELECT * FROM `hive_data`"
            //Prepare the statement
            $statement = $this->db->prepare($sql);
            //Execute
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }
?>