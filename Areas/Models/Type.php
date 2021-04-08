<?php namespace admin\Models;

use admin\Database;
use PDO;

class Type{
    public ?int $TypeId=null;
    public ?string $TypeName=null;
    
    public function load($data)
    {
        $this->TypeId=$data['TypeId'] ?? null;
        $this->TypeName=$data['TypeName'] ?? '';
    }
    public function CreateType()
    {
        $statement=Database::$db->pdo->prepare("INSERT INTO TYPE (TypeName) VALUES (:TypeName)");
        $statement->bindValue(':TypeName',$this->TypeName);
        $statement->execute();
    }

    public function update()
    {
        $statement=Database::$db->pdo->prepare("UPDATE TYPE SET TypeName = :TypeName WHERE TypeId = :TypeId");
        $statement->bindValue(':TypeName',$this->TypeName);
        $statement->bindValue(':TypeId',$this->TypeId);
        $statement->execute();
    }

}

?>