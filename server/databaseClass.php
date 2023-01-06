<?php
    //class name should be same as the class file name
class databaseClass{
    #Let's create the CRUD methods to the database
    #we use public for the functions because we want to be able to access them from enywhere inthe project

    //class fields
    # $isConn will check if you've connected to the database
    # $dbData will contain all data of the connection
    public $isConn;
    protected $dbData; //protected bcos, it should be used only in this class
    
    public $lastInsertId = null;

    //connect to database
    //connect function will be in the constructor for auto connect every time  the class is used
    //onlineDbName:apomcvnv_shoestore    onlineUserName:apomcvnv_justicemarkwei  onlinePassword:Cu***q
    public function __construct($username = "apomcvnv_justicemarkwei", $password = "Cuz@mb1aq", $host = "localhost", $dbname = "apomcvnv_shoestore", $options = []){
        $this->isConn - TRUE;
        try {
            //connect to database using the database information
            $this->dbData = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password, $options);
            //if connection fails, display an error message
            $this->dbData->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //if connection=true, get some info fromthe database using FETCH MODE (FETCHASSOC)
            $this->dbData->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            throw new Exception($e->getMessage()."Database Not Found!");
        }
    }

    //disconnect from database
    public function Disconnect()
    {
        $this->dbData = null;
        $this->isConn = false;
    }

    //get row (get only 1 row)
    public function getRow($query, $params = [])
    {
        try {
            $sqlStatement = $this->dbData->prepare($query);
            $sqlStatement->execute($params);
            return $sqlStatement->fetch();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    //get rows (get all the rows)
    public function getRows($query, $params = [])
    {
        try {
            $sqlStatement = $this->dbData->prepare($query);
            $sqlStatement->execute($params);
            return $sqlStatement->fetchAll();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    //insert row (insert into the database)
    public function insertRow($query, $params = [])
    {
        try {
            $sqlStatement = $this->dbData->prepare($query);
            $sqlStatement->execute($params);
            $this->lastInsertId = $this->dbData->lastInsertId();
            return TRUE;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    //update row (update a row in the database)
    public function updateRow($query, $params = [])
    {
        // $this->insertRow($query, $params);
        try {
            $sqlStatement = $this->dbData->prepare($query);
            $sqlStatement->execute($params);
            return TRUE;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }

    //delete row (delete a row in the database)
    public function deleteRow($query, $params = [])
    {
        try {
            $sqlStatement = $this->dbData->prepare($query);
            $sqlStatement->execute($params);
            return TRUE;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }

    //save csv file into database

    private $csv_state = false;

    public function import($csv){
        $csv = fopen($csv, 'r');
        while ($row = fgetcsv($csv)) {
            // var_dump($row);
            // print_r($row);
            $value = "'".implode("','",$row)."'";
            // echo '<pre>'.$value;

            $query = "INSERT INTO booking (item_name, item_type) VALUE(".$value.")";
            // echo $query;
            if ($this->insertRow($query,[$value])) {
                $this->csv_state = true;

            }else {
                $this->csv_state = false;
                echo $this->error;
            }
        }
        if ($this->csv_state = true) {
           echo "success";
        }else{
            echo "Failed";
        }
    }
}
 