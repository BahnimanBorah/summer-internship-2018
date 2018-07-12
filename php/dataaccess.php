<?php
class Database{
    protected static $connection="";
    protected $username="root";
    protected $password="ritubitu7";
    protected $server="localhost";
    protected $database="company";
    public function getAllData(){
        try{
            $connection = new PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $statement=$connection->prepare("SELECT * FROM employees");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_NUM);
            return $result;

        }catch(Exception $e){echo "Error:".$e->getMessage();return;}
    }

    public function InsertImage($name, $gender,$address, $city,$state){
        try{
            $connection = new PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $statement=$connection->prepare("INSERT INTO employees(name,gender,address,city,state) VALUES('$name','$gender','$address','$city','$state')");
            $statement->execute();

            return true;

        }catch(Exception $e){echo "Error:".$e->getMessage();return false;}
    }
}
?>