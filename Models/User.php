<?php namespace app\Models;

use app\Database;
use PDO;

class User{
    public ?int $UserId=null;
    public ?string $FirstName=null;
    public ?string $LastName=null;
    public ?string $Password=null;
    public ?string $Email=null;
    public ?string $NumberPhone=null;
    public function load($data)
    {
        $this->UserId=$data['UserId'] ?? null;
        $this->FirstName=$data['FirstName'] ?? '';
        $this->LastName=$data['LastName'] ?? '';
        $this->Password=$data['Password'] ?? '';
        $this->Email=$data['Email'] ?? '';
        $this->NumberPhone=$data['NumberPhone'] ?? '';
    }
    public function save()
    {
        $statement=Database::$db->pdo->prepare("INSERT INTO USERS (Email, NumberPhone, Password, FirstName, LastName) VALUES (:Email, :NumberPhone, :Password, :FirstName, :LastName)");
        $statement->bindValue(':Email',$this->Email);
        $statement->bindValue(':NumberPhone',$this->NumberPhone);
        $statement->bindValue(':Password',$this->Password);
        $statement->bindValue(':FirstName',$this->FirstName);
        $statement->bindValue(':LastName',$this->LastName);
        $statement->execute();
    }
    public function login()
    {
        $statement=Database::$db->pdo->prepare("SELECT * FROM USERS WHERE EMAIL = :Email  AND PASSWORD = :Password");
        $statement->bindValue(':Email',$this->Email);
        $statement->bindValue(':Password',$this->Password);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function checkRegister()
    {
        $statement=Database::$db->pdo->prepare("SELECT * FROM USERS WHERE EMAIL = :Email");
        $statement->bindValue(':Email',$this->Email);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
?>