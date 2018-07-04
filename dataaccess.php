<?php
class Database{
    protected static $connection="";
    protected $username="root";
    protected $password="ritubitu7";
    protected $server="localhost";
    protected $database="tourcafe";
    public function getAllData(){
        try{
            $connection = new PDO("mysql:host=$this->server;dbname=$this->database",$this->username,$this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $statement=$connection->prepare("SELECT * FROM branches");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_NUM);
            return $result;

        }catch(Exception $e){echo "Error:".$e->getMessage();return;}
    }
}
?>

<?php
 $data = new Database();
 $info = $data->getAllData();
?>
<div class="container">
    <ul>
        <?php
            foreach($info as $i){
                echo "<li>".$i[5]."</li>";
            }
        ?>
    </ul>
</div>