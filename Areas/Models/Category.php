<?php namespace admin\Models;

use admin\Database;
use PDO;

class Category{
    public ?int $CateId=null;
    public ?string $CategoryName=null;
    public ?int $TypeId=null;
    public function load($data)
    {
        $this->CateId=$data['CateId'] ?? null;
        $this->CategoryName=$data['CategoryName'] ?? '';
        $this->TypeId=$data['TypeId'] ?? '';
    }
    public function CreateCategory()
    {
        $statement=Database::$db->pdo->prepare("INSERT INTO CATEGORIES (CategoryName,TypeId) VALUES (:CategoryName,:TypeId)");
        $statement->bindValue(':CategoryName',$this->CategoryName);
        $statement->bindValue(':TypeId',$this->TypeId);
        $statement->execute();
    }
    public function update()
    {
        $statement=Database::$db->pdo->prepare("UPDATE CATEGORIES SET CategoryName = :CategoryName , TypeId = :TypeId WHERE CateId = :CateId");
        $statement->bindValue(':CateId',$this->CateId);
        $statement->bindValue(':CategoryName',$this->CategoryName);
        $statement->bindValue(':TypeId',$this->TypeId);
        $statement->execute();
    }
}
?>