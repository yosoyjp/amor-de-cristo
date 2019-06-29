<?php
class Database{
    public static function StartUp(){
        $pdo = new PDO('mysql:host=localhost;dbname=db_amordecristocn;charset=utf8', 'root', '021218');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}

?>