<?php
class Database{
    protected static $connection="";
    protected $username="root";
    protected $password="ritubitu7";
    protected $server="localhost";
    protected $database="githubblog";
    public function getAllData(){
        try{
            $connection = new PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $statement=$connection->prepare("SELECT * FROM updates");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_NUM);
            return $result;

        }catch(Exception $e){echo "Error:".$e->getMessage();return;}
    }

    public function InsertImage($imagefile, $caption){
        try{
            $connection = new PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $statement=$connection->prepare("INSERT INTO images(caption,imagename) VALUES('$imagefile','$caption')");
            $statement->execute();

            return true;

        }catch(Exception $e){echo "Error:".$e->getMessage();return false;}
    }
}
?>